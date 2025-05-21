# Layer1ClientsDigitalInvoker\TransactionApi

All URIs are relative to https://api.staging.layer1.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**claimTransaction()**](TransactionApi.md#claimTransaction) | **POST** /digital/v1/transaction-claims | Claim blockchain transaction |
| [**getTransactionById()**](TransactionApi.md#getTransactionById) | **GET** /digital/v1/transactions/{transactionId} | Get transaction |
| [**listTransactions()**](TransactionApi.md#listTransactions) | **GET** /digital/v1/transactions | List transactions |


## `claimTransaction()`

```php
claimTransaction($transaction_claim_request)
```

Claim blockchain transaction

Claim an existing blockchain transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_claim_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionClaimRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionClaimRequest

try {
    $apiInstance->claimTransaction($transaction_claim_request);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->claimTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_claim_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionClaimRequest**](../Model/TransactionClaimRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionById()`

```php
getTransactionById($transaction_id): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Transaction
```

Get transaction

Get transaction by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 'transaction_id_example'; // string

try {
    $result = $apiInstance->getTransactionById($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getTransactionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Transaction**](../Model/Transaction.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactions()`

```php
listTransactions($asset_pool_id, $page_number, $page_size, $q): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedResultTransaction
```

List transactions

Retrieve paginated list of transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_pool_id = 'asset_pool_id_example'; // string | asset pool id
$page_number = 0; // int | current page number
$page_size = 50; // int | number of items in a page
$q = 'q_example'; // string | Query in lucene like format, e.g. hash:0x012a1. Supported properties: hash, reference, customerId, from, to. If time bounds are not provided default are applied

try {
    $result = $apiInstance->listTransactions($asset_pool_id, $page_number, $page_size, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_pool_id** | **string**| asset pool id | |
| **page_number** | **int**| current page number | [default to 0] |
| **page_size** | **int**| number of items in a page | [default to 50] |
| **q** | **string**| Query in lucene like format, e.g. hash:0x012a1. Supported properties: hash, reference, customerId, from, to. If time bounds are not provided default are applied | [optional] |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedResultTransaction**](../Model/PaginatedResultTransaction.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
