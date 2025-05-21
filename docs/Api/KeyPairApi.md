# Layer1ClientsDigitalInvoker\KeyPairApi

All URIs are relative to https://api.staging.layer1.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createKeyPair()**](KeyPairApi.md#createKeyPair) | **POST** /digital/v1/key-pairs | Create key pair |
| [**getKeyPair()**](KeyPairApi.md#getKeyPair) | **GET** /digital/v1/key-pairs/{keyPairId} | Get key pair |
| [**listKeyPairs()**](KeyPairApi.md#listKeyPairs) | **GET** /digital/v1/key-pairs | List key pairs |


## `createKeyPair()`

```php
createKeyPair($create_key_pair_request): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\KeyPair
```

Create key pair

Creates a new key pair from which different addresses can be created

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\KeyPairApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_key_pair_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateKeyPairRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateKeyPairRequest

try {
    $result = $apiInstance->createKeyPair($create_key_pair_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyPairApi->createKeyPair: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_key_pair_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateKeyPairRequest**](../Model/CreateKeyPairRequest.md)|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\KeyPair**](../Model/KeyPair.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKeyPair()`

```php
getKeyPair($key_pair_id): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\KeyPair
```

Get key pair

Retrieve a key pair given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\KeyPairApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_pair_id = 'key_pair_id_example'; // string

try {
    $result = $apiInstance->getKeyPair($key_pair_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyPairApi->getKeyPair: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_pair_id** | **string**|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\KeyPair**](../Model/KeyPair.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listKeyPairs()`

```php
listKeyPairs($asset_pool_id, $page_number, $page_size): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedResultKeyPair
```

List key pairs

Retrieve paginated list of key-pairs belonging to a asset pool

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\KeyPairApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_pool_id = 'asset_pool_id_example'; // string
$page_number = 0; // int
$page_size = 64; // int

try {
    $result = $apiInstance->listKeyPairs($asset_pool_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyPairApi->listKeyPairs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_pool_id** | **string**|  | |
| **page_number** | **int**|  | [default to 0] |
| **page_size** | **int**|  | [default to 64] |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedResultKeyPair**](../Model/PaginatedResultKeyPair.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
