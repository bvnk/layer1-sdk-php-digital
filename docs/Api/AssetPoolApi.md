# Layer1ClientsDigitalInvoker\AssetPoolApi

All URIs are relative to https://api.staging.layer1.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAssetPool()**](AssetPoolApi.md#createAssetPool) | **POST** /digital/v1/asset-pools | Create asset pool |
| [**deleteAssetPool()**](AssetPoolApi.md#deleteAssetPool) | **DELETE** /digital/v1/asset-pools/{assetPoolId} | Delete asset pool |
| [**getAssetPool()**](AssetPoolApi.md#getAssetPool) | **GET** /digital/v1/asset-pools/{assetPoolId} | Get asset pool |
| [**getAssetPoolBalance()**](AssetPoolApi.md#getAssetPoolBalance) | **GET** /digital/v1/asset-pools/{assetPoolId}/balances | Get asset pool balance |
| [**getAssetPoolMaxWithdrawableAmount()**](AssetPoolApi.md#getAssetPoolMaxWithdrawableAmount) | **GET** /digital/v1/asset-pools/{assetPoolId}/max-withdrawable-amount | Get max asset pool withdrawable balance |
| [**getAssetPoolSummary()**](AssetPoolApi.md#getAssetPoolSummary) | **GET** /digital/v1/asset-pools/summary | Get asset pool summary |
| [**listAssetPools()**](AssetPoolApi.md#listAssetPools) | **GET** /digital/v1/asset-pools | List asset pools |
| [**updateAssetPool()**](AssetPoolApi.md#updateAssetPool) | **PATCH** /digital/v1/asset-pools/{assetPoolId} | Update asset pool |


## `createAssetPool()`

```php
createAssetPool($create_asset_pool_request): string
```

Create asset pool

Creates a new asset pool which serves as a collection of assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AssetPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_asset_pool_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAssetPoolRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAssetPoolRequest

try {
    $result = $apiInstance->createAssetPool($create_asset_pool_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPoolApi->createAssetPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_asset_pool_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAssetPoolRequest**](../Model/CreateAssetPoolRequest.md)|  | |

### Return type

**string**

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssetPool()`

```php
deleteAssetPool($asset_pool_id)
```

Delete asset pool

Delete asset pool with given id if it has not addresses nor transactions created

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AssetPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_pool_id = 'asset_pool_id_example'; // string

try {
    $apiInstance->deleteAssetPool($asset_pool_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetPoolApi->deleteAssetPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_pool_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetPool()`

```php
getAssetPool($asset_pool_id): string
```

Get asset pool

Retrieve a specific asset pool given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AssetPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_pool_id = 'asset_pool_id_example'; // string

try {
    $result = $apiInstance->getAssetPool($asset_pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPoolApi->getAssetPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_pool_id** | **string**|  | |

### Return type

**string**

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetPoolBalance()`

```php
getAssetPoolBalance($asset_pool_id, $network, $asset): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Balance
```

Get asset pool balance

Retrieve an asset pool balance for specific network and asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AssetPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_pool_id = 'asset_pool_id_example'; // string
$network = 'network_example'; // string
$asset = 'asset_example'; // string

try {
    $result = $apiInstance->getAssetPoolBalance($asset_pool_id, $network, $asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPoolApi->getAssetPoolBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_pool_id** | **string**|  | |
| **network** | **string**|  | |
| **asset** | **string**|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Balance**](../Model/Balance.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetPoolMaxWithdrawableAmount()`

```php
getAssetPoolMaxWithdrawableAmount($asset_pool_id, $network, $asset): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Balance
```

Get max asset pool withdrawable balance

Retrieve maximal approximate (does not take fees into account) amount withdrawable for specific network and asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AssetPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_pool_id = 'asset_pool_id_example'; // string
$network = 'network_example'; // string
$asset = 'asset_example'; // string

try {
    $result = $apiInstance->getAssetPoolMaxWithdrawableAmount($asset_pool_id, $network, $asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPoolApi->getAssetPoolMaxWithdrawableAmount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_pool_id** | **string**|  | |
| **network** | **string**|  | |
| **asset** | **string**|  | |

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Balance**](../Model/Balance.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetPoolSummary()`

```php
getAssetPoolSummary(): \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\AssetPoolSummary
```

Get asset pool summary

Retrieve authenticated summary across all asset pools.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AssetPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAssetPoolSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPoolApi->getAssetPoolSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\AssetPoolSummary**](../Model/AssetPoolSummary.md)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssetPools()`

```php
listAssetPools($page_number, $page_size)
```

List asset pools

Retrieve paginated list of asset pools

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AssetPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 0; // int
$page_size = 64; // int

try {
    $apiInstance->listAssetPools($page_number, $page_size);
} catch (Exception $e) {
    echo 'Exception when calling AssetPoolApi->listAssetPools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_number** | **int**|  | [default to 0] |
| **page_size** | **int**|  | [default to 64] |

### Return type

void (empty response body)

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssetPool()`

```php
updateAssetPool($asset_pool_id, $update_asset_pool_request): string
```

Update asset pool

Update an asset pool

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AssetPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_pool_id = 'asset_pool_id_example'; // string
$update_asset_pool_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\UpdateAssetPoolRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\UpdateAssetPoolRequest

try {
    $result = $apiInstance->updateAssetPool($asset_pool_id, $update_asset_pool_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetPoolApi->updateAssetPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_pool_id** | **string**|  | |
| **update_asset_pool_request** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\UpdateAssetPoolRequest**](../Model/UpdateAssetPoolRequest.md)|  | |

### Return type

**string**

### Authorization

[httpSignature](../../README.md#httpSignature), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
