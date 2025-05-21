# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | internal id | [optional]
**address** | **string** | blockchain address | [optional]
**asset_pool_id** | **string** | asset pool id | [optional]
**network** | **string** | crypto network | [optional]
**key_pair_id** | **string** | key pair id | [optional]
**reference** | **string** | key pair reference | [optional]
**supported_assets** | **string[]** | list of assets supported by network | [optional]
**aliases** | **string[]** | alternative address (e.g. BTC has segwitt and legacy format) | [optional]
**tag** | **string** | destination tag that serves as optional payment identifier. Only applicable to select networks like Ripple, Solana etc. | [optional]
**balances** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Balance[]**](Balance.md) | address balances | [optional]
**customer_id** | **string** | custom non-unique identifier supplied for address that is used to link address to external entity like customer | [optional]
**master** | **bool** | flag indicating whether this address is asset pool master address | [optional]
**supported_networks** | **string[]** | list of networks supporting given asset. mutually exclusive with network and supportedAssets | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
