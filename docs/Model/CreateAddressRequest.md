# # CreateAddressRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset_pool_id** | **string** | asset pool id | [optional]
**network** | **string** | crypto network | [optional]
**asset** | **string** | crypto currency for which address(es) should be created. if network is not given will create addreses in all networks supporting given asset | [optional]
**reference** | **string** | unique identifier for each destination that is receiving funds (whether tag or address). Similar to banking reference it is used to link deposit to a specific invoice | [optional]
**customer_id** | **string** | custom non-unique identifier supplied for address that is used to link address to external entity like customer, merchant, company, etc. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
