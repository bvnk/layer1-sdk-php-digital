# Layer1ClientsDigitalInvoker\NetworkApi

All URIs are relative to https://api.staging.layer1.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNetworks()**](NetworkApi.md#getNetworks) | **GET** /digital/v1/networks | Get all networks |


## `getNetworks()`

```php
getNetworks($include_disabled): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Network[]
```

Get all networks

Get all supported networks and their assets. By default, only enabled networks are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_disabled = false; // bool | Include disabled networks in the response

try {
    $result = $apiInstance->getNetworks($include_disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->getNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_disabled** | **bool**| Include disabled networks in the response | [optional] [default to false] |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Network[]**](../Model/Network.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
