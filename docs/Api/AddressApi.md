# Layer1ClientsDigitalInvoker\AddressApi

All URIs are relative to https://api.staging.layer1.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAddress()**](AddressApi.md#createAddress) | **POST** /digital/v1/addresses | Create a new address |
| [**getAddress()**](AddressApi.md#getAddress) | **GET** /digital/v1/addresses/{addressId} | Get address |
| [**listAddresses()**](AddressApi.md#listAddresses) | **GET** /digital/v1/addresses | List addresses |
| [**listTags()**](AddressApi.md#listTags) | **GET** /digital/v1/addresses/{addressId}/tags | List address tags |
| [**validateAddress()**](AddressApi.md#validateAddress) | **POST** /digital/v1/addresses/validate | Validate address |


## `createAddress()`

```php
createAddress($create_address_request): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Address
```

Create a new address

Creates a new address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_address_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAddressRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAddressRequest

try {
    $result = $apiInstance->createAddress($create_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->createAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_address_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAddressRequest**](../Model/CreateAddressRequest.md)|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Address**](../Model/Address.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddress()`

```php
getAddress($address_id): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Address[]
```

Get address

Retrieve select address details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string

try {
    $result = $apiInstance->getAddress($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->getAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **string**|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Address[]**](../Model/Address.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAddresses()`

```php
listAddresses($asset_pool_id, $page_number, $page_size, $q): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedResultAddress
```

List addresses

Retrieve paginated list of addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_pool_id = 'asset_pool_id_example'; // string
$page_number = 0; // int
$page_size = 64; // int
$q = 'q_example'; // string | Query in lucene format. Supported fields: reference, customerId

try {
    $result = $apiInstance->listAddresses($asset_pool_id, $page_number, $page_size, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->listAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_pool_id** | **string**|  | |
| **page_number** | **int**|  | [default to 0] |
| **page_size** | **int**|  | [default to 64] |
| **q** | **string**| Query in lucene format. Supported fields: reference, customerId | [optional] |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedResultAddress**](../Model/PaginatedResultAddress.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTags()`

```php
listTags($address_id, $page_number, $page_size): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedResultAddress
```

List address tags

Retrieve paginated list of address tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string
$page_number = 0; // int
$page_size = 64; // int

try {
    $result = $apiInstance->listTags($address_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->listTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **string**|  | |
| **page_number** | **int**|  | [default to 0] |
| **page_size** | **int**|  | [default to 64] |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedResultAddress**](../Model/PaginatedResultAddress.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAddress()`

```php
validateAddress($validate_address_request): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ValidateAddressResponse
```

Validate address

Validate a blockchain address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_address_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ValidateAddressRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ValidateAddressRequest

try {
    $result = $apiInstance->validateAddress($validate_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->validateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_address_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ValidateAddressRequest**](../Model/ValidateAddressRequest.md)|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ValidateAddressResponse**](../Model/ValidateAddressResponse.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
