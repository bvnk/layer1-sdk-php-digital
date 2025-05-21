<?php
/**
 * Layer1Digest
 * PHP version 8.1
 *
 * @category Class
 * @package  Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth
 */

namespace Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth;

/**
 * Layer1Digest Class
 * 
 * This class implements RFC 9421 authentication for Layer1 API
 * 
 * @category Class
 * @package  Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth
 */
class Layer1Digest
{
    private const SIGNATURE_ALGORITHM = 'rsa-v1_5-sha256';
    private const DIGEST_ALGORITHM = 'sha-256';

    /**
     * @var string
     */
    private $signingKey;

    /**
     * @var string
     */
    private $clientId;

    /**
     * Constructor
     * 
     * @param string $signingPrivateKey Base64 encoded private key
     * @param string $clientId OAuth2 Client ID
     */
    public function __construct(string $signingPrivateKey, string $clientId)
    {
        $this->clientId = $clientId;
        $this->signingKey = $this->prepareKey($signingPrivateKey);
    }

    /**
     * Build the necessary signature headers and returns them as an array
     *
     * @param string $url The full URL of the request
     * @param string $payload The body of the request (if any, POST, etc)
     * @param string $method The HTTP method of the request
     * @return array A map of headers
     */
    public function buildHeaders(string $url, string $payload = '', string $method = 'GET'): array
    {
        $headerParams = [];

        $contentDigest = null;

        if (!empty($payload)) {
            try {
                $contentDigest = $this->createDigest(self::DIGEST_ALGORITHM, $payload);
                $headerParams['Content-Digest'] = $contentDigest;
            } catch (\Exception $e) {
                throw new \RuntimeException('Failed to create digest: ' . $e->getMessage(), 0, $e);
            }
        }

        $signatureParameters = $this->createSignatureParameters($contentDigest);
        $headerParams['Signature-Input'] = 'sig=' . $signatureParameters;

        try {
            $headerParams['Signature'] = sprintf(
                'sig=:%s:',
                $this->sign(
                    sprintf(
                        "\"@method\": %s\n\"@target-uri\": %s\n%s\"@signature-params\": %s",
                        strtoupper($method),
                        $url,
                        $contentDigest === null ? '' : "\"content-digest\": " . $contentDigest . "\n",
                        $signatureParameters
                    ),
                    $this->signingKey
                )
            );
        } catch (\Exception $e) {
            throw new \RuntimeException('Failed to sign request: ' . $e->getMessage(), 0, $e);
        }

        return $headerParams;
    }

    /**
     * Sign the request using SHA256withRSA
     *
     * @param string $signatureBase
     * @param string $privateKey
     * @return string
     * @throws \Exception
     */
    private function sign(string $signatureBase, string $privateKey): string
    {
        $privateKeyResource = openssl_pkey_get_private($privateKey);
        if ($privateKeyResource === false) {
            throw new \RuntimeException('Failed to load private key: ' . openssl_error_string());
        }

        $signature = '';
        $result = openssl_sign($signatureBase, $signature, $privateKeyResource, OPENSSL_ALGO_SHA256);
        
        if ($result === false) {
            throw new \RuntimeException('Failed to sign data: ' . openssl_error_string());
        }

        return base64_encode($signature);
    }

    /**
     * Assemble the RFC 9421 signature parameters
     *
     * @param string|null $contentDigest
     * @return string
     */
    private function createSignatureParameters(?string $contentDigest): string
    {
        return sprintf(
            '("@method" "@target-uri"%s);created=%d;keyid="%s";alg="%s"',
            $contentDigest === null ? '' : ' "content-digest"',
            time(),
            $this->clientId,
            self::SIGNATURE_ALGORITHM
        );
    }

    /**
     * Create and prepare the digest for the request for the content-digest header
     *
     * @param string $digestAlgorithm
     * @param string $data
     * @return string
     */
    private function createDigest(string $digestAlgorithm, string $data): string
    {
        return sprintf('%s=:%s:', $digestAlgorithm, $this->getDigest($digestAlgorithm, $data));
    }

    /**
     * Calculate digest hash
     * 
     * @param string $algorithm
     * @param string $data
     * @return string
     */
    private function getDigest(string $algorithm, string $data): string
    {
        $hash = hash('sha256', $data, true);
        return base64_encode($hash);
    }

    /**
     * Remove the header and footer from the private key if generated via openssl etc
     *
     * @param string $rawKey
     * @return string
     */
    private function prepareKey(string $rawKey): string
    {
        if (strpos($rawKey, '-----BEGIN PRIVATE KEY-----') !== false) {
            // Key is already in PEM format, return as is
            return $rawKey;
        }
        
        // Add PEM headers if they're missing
        $newKey = trim($rawKey);
        $newKey = "-----BEGIN PRIVATE KEY-----\n" . 
                  chunk_split($newKey, 64, "\n") .
                  "-----END PRIVATE KEY-----";
        
        return $newKey;
    }
}