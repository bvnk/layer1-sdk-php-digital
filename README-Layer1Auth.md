# Layer1 SDK PHP - RFC 9421 Authentication

This extension to the Layer1 SDK for PHP provides RFC 9421 compliant authentication for API requests.

## Overview

The Layer1 SDK for PHP now includes a custom authentication mechanism that implements RFC 9421 for secure API access. This authentication method uses a client ID and a private key to sign requests with cryptographic signatures.

## Features

- RFC 9421 compliant request signing
- Automatic content digest calculation
- Seamless integration with existing Layer1 SDK API classes
- Support for all HTTP methods (GET, POST, PUT, DELETE, etc.)

## Installation

1. Add the Layer1 SDK to your project via Composer:

```bash
composer require layer1/layer1-sdk-php-digital
```

2. Copy the `Layer1ClientsDigitalAuth` directory to your project's `lib` directory.

## Usage

### Basic Usage

```php
<?php
use Layer1ClientsDigitalInvoker\Configuration;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth\Layer1Client;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalApi\AddressApi;

// Your client credentials
$clientId = '20ff4e7d-8f1f-499f-8720-365a73e6f1f5';
$privateKey = file_get_contents('private_key.pem');

// Create configuration
$config = Configuration::getDefaultConfiguration();

// Create Layer1Client with RFC 9421 authentication
$client = new Layer1Client($clientId, $privateKey, $config);

// Create API instance with the authenticated client
$addressApi = new AddressApi($client, $config);

// Now you can make authenticated API calls
$addresses = $addressApi->listAddresses();
```

### Creating an Address Example

```php
<?php
use Layer1ClientsDigitalInvoker\Configuration;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalApi\AddressApi;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAddressRequest;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth\Layer1Client;

// Your client credentials
$clientId = '20ff4e7d-8f1f-499f-8720-365a73e6f1f5';
$privateKey = file_get_contents('private_key.pem');

// Create configuration
$config = Configuration::getDefaultConfiguration();

// Create Layer1Client with RFC 9421 authentication
$client = new Layer1Client($clientId, $privateKey, $config);

// Create AddressApi with our custom client
$addressApi = new AddressApi($client, $config);

// Create the request object
$createAddressRequest = new CreateAddressRequest();
$createAddressRequest->setAssetPoolId('14a066e3-00d4-4b68-b8ee-37d385a32ad9');
$createAddressRequest->setNetwork('ETHEREUM');
$createAddressRequest->setReference('my-user-id');

// Make the API call
$result = $addressApi->createAddress($createAddressRequest);

// Output the result
echo "Address created successfully!\n";
echo "ID: " . $result->getId() . "\n";
echo "Address: " . $result->getAddress() . "\n";
echo "Network: " . $result->getNetwork() . "\n";
echo "Reference: " . $result->getReference() . "\n";
echo "Status: " . $result->getStatus() . "\n";
```

## Command Line Tool

A command line tool is included to demonstrate creating an address:

```bash
cd examples
./run_create_address.sh
```

Or run it manually:

```bash
php create_address.php \
  --clientId="20ff4e7d-8f1f-499f-8720-365a73e6f1f5" \
  --privateKeyFile="private_key.pem" \
  --assetPoolId="14a066e3-00d4-4b68-b8ee-37d385a32ad9" \
  --network="ETHEREUM" \
  --reference="my-user-id"
```

## How It Works

The authentication process follows these steps:

1. `Layer1Client` intercepts all requests before they are sent
2. For each request, it extracts the method, URL, and body
3. If the request has a body, a content digest is calculated using SHA-256
4. A signature is created using the private key according to RFC 9421 specifications
5. Authentication headers are added to the request:
   - `Content-Digest` (if body exists)
   - `Signature-Input`
   - `Signature`
6. The request is sent with these additional headers

## Security Considerations

- Store your private key securely and never commit it to version control
- Use environment variables or a secure key management system to provide the key to your application
- Ensure your client ID and private key have appropriate permissions for the API calls you need to make

## Classes

### Layer1Digest

This class handles the creation of RFC 9421 compliant signatures and digests.

Key methods:
- `buildHeaders(string $url, string $payload, string $method)`: Generates authentication headers
- `sign(string $signatureBase, string $privateKey)`: Signs data using the private key
- `createDigest(string $digestAlgorithm, string $data)`: Creates content digests

### Layer1Client

A wrapper around GuzzleHttp client that automatically adds authentication headers to requests.

Key methods:
- `addAuthHeaders(RequestInterface $request)`: Adds authentication headers to requests
- All standard GuzzleHttp ClientInterface methods (send, request, etc.)

## Troubleshooting

If you encounter authentication errors:

1. Verify your client ID is correct
2. Check that your private key is properly formatted
3. Ensure your system time is accurate (signatures include a timestamp)
4. Verify network connectivity to the Layer1 API endpoint

For additional help, contact Layer1 support.