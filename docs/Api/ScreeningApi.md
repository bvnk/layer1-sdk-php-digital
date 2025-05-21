# Layer1ClientsDigitalInvoker\ScreeningApi

All URIs are relative to https://api.staging.layer1.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listScreenings()**](ScreeningApi.md#listScreenings) | **GET** /digital/v1/screenings | List screening results |
| [**manuallyActionHeldTransfer()**](ScreeningApi.md#manuallyActionHeldTransfer) | **PUT** /digital/v1/screenings/action | Approve or reject a held transfer |


## `listScreenings()`

```php
listScreenings($page_number, $page_size, $hash, $operation, $state, $start_date, $end_date, $sort, $q): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedScreenings
```

List screening results

Retrieves a paginated list of the most recent transfers along with their screening results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\ScreeningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 0; // int
$page_size = 16; // int
$hash = 'hash_example'; // string | Filter by transaction hash
$operation = array('operation_example'); // string[] | Set of operations to filter by
$state = array('state_example'); // string[] | Set of screening states to filter by
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date for filtering by transfer creation date
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date for filtering by transfer creation date
$sort = screeningId.transfer.id.createdAt,desc; // string
$q = notReasonCode:DUST_AMOUNT; // string | Query using Lucene-like syntax. Supported properties: notReasonCode, reasonCode, reason, hash, state, operation, from, to

try {
    $result = $apiInstance->listScreenings($page_number, $page_size, $hash, $operation, $state, $start_date, $end_date, $sort, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreeningApi->listScreenings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_number** | **int**|  | [default to 0] |
| **page_size** | **int**|  | [default to 16] |
| **hash** | **string**| Filter by transaction hash | [optional] |
| **operation** | [**string[]**](../Model/string.md)| Set of operations to filter by | [optional] |
| **state** | [**string[]**](../Model/string.md)| Set of screening states to filter by | [optional] |
| **start_date** | **\DateTime**| Start date for filtering by transfer creation date | [optional] |
| **end_date** | **\DateTime**| End date for filtering by transfer creation date | [optional] |
| **sort** | **string**|  | [optional] [default to &#39;screeningId.transfer.id.createdAt,desc&#39;] |
| **q** | **string**| Query using Lucene-like syntax. Supported properties: notReasonCode, reasonCode, reason, hash, state, operation, from, to | [optional] |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\PaginatedScreenings**](../Model/PaginatedScreenings.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manuallyActionHeldTransfer()`

```php
manuallyActionHeldTransfer($manual_action_request)
```

Approve or reject a held transfer

Approves or rejects a held transfer based on the provided transfer ID and the destination address ID. Deposits can be only approved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\ScreeningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_action_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ManualActionRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ManualActionRequest

try {
    $apiInstance->manuallyActionHeldTransfer($manual_action_request);
} catch (Exception $e) {
    echo 'Exception when calling ScreeningApi->manuallyActionHeldTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **manual_action_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ManualActionRequest**](../Model/ManualActionRequest.md)|  | |

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
