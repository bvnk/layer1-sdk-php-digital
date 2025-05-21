# # CreateTransactionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset_pool_id** | **string** | asset pool id | [optional]
**asset** | **string** | currency | [optional]
**network** | **string** | crypto network | [optional]
**reference** | **string** | custom identifier supplied for transaction that is used to link transaction to specific customer or use case | [optional]
**sources** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Participant[]**](Participant.md) | (Optional) list of addresses and amounts that fund the transaction | [optional]
**destinations** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Participant[]**](Participant.md) | list of recipient addresses and amounts that benefit from the transaction | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
