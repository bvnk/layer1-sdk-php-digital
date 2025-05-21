# Layer1 SDK PHP Authentication

This document explains how to use the Layer1 SDK with RFC 9421 authentication.

## Overview

The Layer1 SDK for PHP includes a custom authentication mechanism that implements RFC 9421 for secure API access. This authentication method uses a client ID and a private key to sign requests with cryptographic signatures.

## Installation

The Layer1 SDK is installed via Composer:

```bash
composer require layer1/layer1-sdk-php-digital
```

## Authentication

The SDK provides two main classes for authentication:

1. `Layer1Digest` - Handles the creation of RFC 9421 compliant signatures and digests
2. `Layer1Client` - A wrapper around GuzzleHttp client that automatically adds authentication headers to requests

### Setting Up Authentication

To use the Layer1 SDK with authentication:

```php
<?php
use Layer1ClientsDigitalInvoker\Configuration;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth\Layer1Client;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalApi\AddressApi;

// Your client credentials
$clientId = 'your-client-id';
$privateKey = file_get_contents('path/to/your/private_key.pem');

// Create configuration
$config = Configuration::getDefaultConfiguration();

// Create Layer1Client with RFC 9421 authentication
$client = new Layer1Client($clientId, $privateKey, $config);

// Create API instance with the authenticated client
$addressApi = new AddressApi($client, $config);

// Now you can make authenticated API calls
$result = $addressApi->listAddresses();
```

## Example: Creating an Address

Here's a complete example of creating an address using the Layer1 SDK with authentication:

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Layer1ClientsDigitalInvoker\Configuration;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalApi\AddressApi;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAddressRequest;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth\Layer1Client;

// Your client credentials
$clientId = 'your-client-id';
$privateKey = file_get_contents('path/to/your/private_key.pem');

try {
    // Create configuration
    $config = Configuration::getDefaultConfiguration();
    
    // Create Layer1Client with RFC 9421 authentication
    $client = new Layer1Client($clientId, $privateKey, $config);
    
    // Create AddressApi with our custom client
    $addressApi = new AddressApi($client, $config);
    
    // Create the request object
    $createAddressRequest = new CreateAddressRequest();
    $createAddressRequest->setAssetPoolId('your-asset-pool-id');
    $createAddressRequest->setNetwork('ETHEREUM');
    $createAddressRequest->setReference('Your reference');
    
    // Make the API call
    $result = $addressApi->createAddress($createAddressRequest);
    
    // Output the result
    echo "Address created successfully!\n";
    echo "ID: " . $result->getId() . "\n";
    echo "Address: " . $result->getAddress() . "\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
```

## Private Key Format

The private key should be in PEM format. If you have a raw private key, the `Layer1Digest` class will automatically format it correctly.

Example of a properly formatted private key:

```
-----BEGIN PRIVATE KEY-----
MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC/buDEyRp5FRT8
lqlBkB9gM5tDRkPf4gpEBwKGkcewUtqsYS0FPGaoak1rDgyKHm84qOh1FtdkTjuv
...
t/IytfHaEqhO8mCymWeQ0gg=
-----END PRIVATE KEY-----
```

## Security Considerations

- Store your private key securely and never commit it to version control
- Use environment variables or a secure key management system to provide the key to your application
- Ensure your client ID and private key have appropriate permissions for the API calls you need to make

## Troubleshooting

If you encounter authentication errors:

1. Verify your client ID is correct
2. Check that your private key is properly formatted
3. Ensure your system time is accurate (signatures include a timestamp)
4. Verify network connectivity to the Layer1 API endpoint

For additional help, contact Layer1 support.