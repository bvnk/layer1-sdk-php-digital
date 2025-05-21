# Layer1ClientsDigitalInvoker\TransactionRequestApi

All URIs are relative to https://api.staging.layer1.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStakingTransaction()**](TransactionRequestApi.md#createStakingTransaction) | **POST** /digital/v1/staking-requests | Create staking transaction request |
| [**createTransaction()**](TransactionRequestApi.md#createTransaction) | **POST** /digital/v1/transaction-requests | Create transaction request |
| [**getTransactionRequestById()**](TransactionRequestApi.md#getTransactionRequestById) | **GET** /digital/v1/transaction-requests/{requestId} | Get transaction request |
| [**listTransactionRequests()**](TransactionRequestApi.md#listTransactionRequests) | **GET** /digital/v1/transaction-requests | List transaction requests |


## `createStakingTransaction()`

```php
createStakingTransaction($create_staking_transaction_request): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionRequest
```

Create staking transaction request

Create a new blockchain staking transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\TransactionRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_staking_transaction_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateStakingTransactionRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateStakingTransactionRequest

try {
    $result = $apiInstance->createStakingTransaction($create_staking_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRequestApi->createStakingTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_staking_transaction_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateStakingTransactionRequest**](../Model/CreateStakingTransactionRequest.md)|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionRequest**](../Model/TransactionRequest.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransaction()`

```php
createTransaction($create_transaction_request): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionRequest
```

Create transaction request

Create a new blockchain transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\TransactionRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_transaction_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateTransactionRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateTransactionRequest

try {
    $result = $apiInstance->createTransaction($create_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRequestApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_transaction_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateTransactionRequest**](../Model/CreateTransactionRequest.md)|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionRequest**](../Model/TransactionRequest.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionRequestById()`

```php
getTransactionRequestById($request_id): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionRequest
```

Get transaction request

Get transaction request by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\TransactionRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = 'request_id_example'; // string

try {
    $result = $apiInstance->getTransactionRequestById($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRequestApi->getTransactionRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_id** | **string**|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionRequest**](../Model/TransactionRequest.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactionRequests()`

```php
listTransactionRequests($asset_pool_id, $page_number, $page_size, $q): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedResultTransactionRequest
```

List transaction requests

Retrieve paginated list of transaction requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\TransactionRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_pool_id = 'asset_pool_id_example'; // string | asset pool id
$page_number = 0; // int | current page number
$page_size = 50; // int | number of items in a page
$q = 'q_example'; // string | Query in lucene like format, e.g. reference:REF-12a1. Supported properties: reference, type

try {
    $result = $apiInstance->listTransactionRequests($asset_pool_id, $page_number, $page_size, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRequestApi->listTransactionRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_pool_id** | **string**| asset pool id | |
| **page_number** | **int**| current page number | [default to 0] |
| **page_size** | **int**| number of items in a page | [default to 50] |
| **q** | **string**| Query in lucene like format, e.g. reference:REF-12a1. Supported properties: reference, type | [optional] |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedResultTransactionRequest**](../Model/PaginatedResultTransactionRequest.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
