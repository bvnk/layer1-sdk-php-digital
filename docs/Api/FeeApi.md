# Layer1ClientsDigitalInvoker\FeeApi

All URIs are relative to https://api.staging.layer1.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**estimateTransactionFee()**](FeeApi.md#estimateTransactionFee) | **POST** /digital/v1/fee-estimate | Estimate transaction fee |


## `estimateTransactionFee()`

```php
estimateTransactionFee($estimate_transaction_fee_request): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\AssetValue
```

Estimate transaction fee

Estimate fee to send blockchain transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$estimate_transaction_fee_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\EstimateTransactionFeeRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\EstimateTransactionFeeRequest

try {
    $result = $apiInstance->estimateTransactionFee($estimate_transaction_fee_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->estimateTransactionFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **estimate_transaction_fee_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\EstimateTransactionFeeRequest**](../Model/EstimateTransactionFeeRequest.md)|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\AssetValue**](../Model/AssetValue.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
