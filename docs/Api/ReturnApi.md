# Layer1ClientsDigitalInvoker\ReturnApi

All URIs are relative to https://api.staging.layer1.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReturnTransactionRequest()**](ReturnApi.md#createReturnTransactionRequest) | **POST** /digital/v1/returns | Create return transaction request |


## `createReturnTransactionRequest()`

```php
createReturnTransactionRequest($return_request): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionRequest
```

Create return transaction request

Create a new blockchain transaction meant to return previously deposited funds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ReturnRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ReturnRequest

try {
    $result = $apiInstance->createReturnTransactionRequest($return_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->createReturnTransactionRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **return_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ReturnRequest**](../Model/ReturnRequest.md)|  | |

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
