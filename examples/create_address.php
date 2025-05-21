<?php
/**
 * Example script to create an address using Layer1Client with RFC 9421 authentication
 */

// Include the autoloader
require_once __DIR__ . '/../vendor/autoload.php';

use Layer1ClientsDigitalInvoker\Configuration;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalApi\AddressApi;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAddressRequest;
use Layer1ClientsDigitalInvoker\Layer1ClientsDigitalAuth\Layer1Client;

// Parse command line arguments
$options = getopt('', ['clientId:', 'privateKeyFile:', 'assetPoolId:', 'network:', 'reference:']);

// Check required parameters
if (!isset($options['clientId']) || !isset($options['privateKeyFile']) || 
    !isset($options['assetPoolId']) || !isset($options['network']) || !isset($options['reference'])) {
    echo "Usage: php create_address.php --clientId=<clientId> --privateKeyFile=<privateKeyFile> --assetPoolId=<assetPoolId> --network=<network> --reference=<reference>\n";
    exit(1);
}

// Read the private key from file
$privateKey = file_get_contents($options['privateKeyFile']);
if ($privateKey === false) {
    echo "Error: Could not read private key file: {$options['privateKeyFile']}\n";
    exit(1);
}

try {
    // Create configuration
    $config = Configuration::getDefaultConfiguration();
    
    // Create Layer1Client with RFC 9421 authentication
    $client = new Layer1Client($options['clientId'], $privateKey, $config);
    
    // Create AddressApi with our custom client
    $addressApi = new AddressApi($client, $config);
    
    // Create the request object
    $createAddressRequest = new CreateAddressRequest();
    $createAddressRequest->setAssetPoolId($options['assetPoolId']);
    $createAddressRequest->setNetwork($options['network']);
    $createAddressRequest->setReference($options['reference']);
    
    // Make the API call
    echo "Creating address...\n";
    $result = $addressApi->createAddress($createAddressRequest);
    
    // Output the result
    echo "Address created successfully!\n";
    echo "ID: " . $result->getId() . "\n";
    echo "Address: " . $result->getAddress() . "\n";
    echo "Network: " . $result->getNetwork() . "\n";
    echo "Reference: " . $result->getReference() . "\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    if (method_exists($e, 'getResponseBody')) {
        echo "Response body: " . $e->getResponseBody() . "\n";
    }
    exit(1);
}