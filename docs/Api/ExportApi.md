# Layer1ClientsDigitalInvoker\ExportApi

All URIs are relative to https://api.staging.layer1.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBalanceExport()**](ExportApi.md#createBalanceExport) | **POST** /digital/v1/exports | Create a balance export |
| [**getExport()**](ExportApi.md#getExport) | **GET** /digital/v1/exports/{id} | Get export with a download link |
| [**getExports()**](ExportApi.md#getExports) | **GET** /digital/v1/exports | List all exports |


## `createBalanceExport()`

```php
createBalanceExport($create_balance_export_request)
```

Create a balance export

Initiates a job to export balance data in the CSV format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_balance_export_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateBalanceExportRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateBalanceExportRequest

try {
    $apiInstance->createBalanceExport($create_balance_export_request);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->createBalanceExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_balance_export_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateBalanceExportRequest**](../Model/CreateBalanceExportRequest.md)|  | |

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

## `getExport()`

```php
getExport($id): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Export
```

Get export with a download link

Retrieves export details with a short-lived download link by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the export to retrieve

try {
    $result = $apiInstance->getExport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the export to retrieve | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Export**](../Model/Export.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExports()`

```php
getExports($type, $page_number, $page_size): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedExports[]
```

List all exports

Retrieves a paginated list of exports based on type and pagination settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = array('type_example'); // string[] | Filter exports by type
$page_number = 0; // int
$page_size = 16; // int

try {
    $result = $apiInstance->getExports($type, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getExports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**string[]**](../Model/string.md)| Filter exports by type | |
| **page_number** | **int**|  | [default to 0] |
| **page_size** | **int**|  | [default to 16] |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedExports[]**](../Model/PaginatedExports.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
