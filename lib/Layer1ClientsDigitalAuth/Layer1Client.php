<?php
/**
 * Layer1Client
 * PHP version 8.1
 *
 * @category Class
 * @package  Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth
 */

namespace Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Layer1ClientsDigitalInvoker\Configuration;

/**
 * Layer1Client Class
 * 
 * This class wraps the GuzzleHttp client to add RFC 9421 authentication headers
 * 
 * @category Class
 * @package  Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth
 */
class Layer1Client implements ClientInterface
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var Layer1Digest
     */
    private $layer1Digest;

    /**
     * @var Configuration
     */
    private $config;

    /**
     * Constructor
     * 
     * @param string $clientId OAuth2 Client ID
     * @param string $privateKey Private key for signing requests
     * @param Configuration|null $config Configuration object
     */
    public function __construct(string $clientId, string $privateKey, ?Configuration $config = null)
    {
        $this->layer1Digest = new Layer1Digest($privateKey, $clientId);
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        
        // Create a handler stack
        $stack = HandlerStack::create();
        
        // Add middleware to add authentication headers
        $stack->push(Middleware::mapRequest(function (RequestInterface $request) {
            return $this->addAuthHeaders($request);
        }));
        
        // Create a new client with the handler stack
        $this->client = new Client(['handler' => $stack]);
    }

    /**
     * Add authentication headers to the request
     * 
     * @param RequestInterface $request
     * @return RequestInterface
     */
    private function addAuthHeaders(RequestInterface $request): RequestInterface
    {
        $method = $request->getMethod();
        $uri = (string) $request->getUri();
        
        // Get the request body if it exists
        $body = (string) $request->getBody();
        
        // Build the authentication headers
        $headers = $this->layer1Digest->buildHeaders($uri, $body, $method);
        
        // Add the headers to the request
        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }
        
        return $request;
    }

    /**
     * Get the configuration object
     * 
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->config;
    }

    /**
     * Send a request
     * 
     * @param RequestInterface $request
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function send(RequestInterface $request, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        return $this->client->send($request, $options);
    }

    /**
     * Send an asynchronous request
     * 
     * @param RequestInterface $request
     * @param array $options
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAsync(RequestInterface $request, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->client->sendAsync($request, $options);
    }

    /**
     * Create and send a request
     * 
     * @param string $method
     * @param string|\Psr\Http\Message\UriInterface $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function request($method, $uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        return $this->client->request($method, $uri, $options);
    }

    /**
     * Create and send an asynchronous request
     * 
     * @param string $method
     * @param string|\Psr\Http\Message\UriInterface $uri
     * @param array $options
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function requestAsync($method, $uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->client->requestAsync($method, $uri, $options);
    }

    /**
     * Get the base URI or config option
     * 
     * @param string|null $option
     * @return mixed
     */
    public function getConfig($option = null)
    {
        return $this->client->getConfig($option);
    }
}