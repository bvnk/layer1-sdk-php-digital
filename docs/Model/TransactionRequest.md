# # TransactionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** | transaction request id | [optional]
**asset** | **string** | currency | [optional]
**asset_pool_id** | **string** | asset pool id | [optional]
**network** | **string** | crypto network | [optional]
**reference** | **string** | custom identifier supplied for transaction that is used to link transaction to specific customer or use case | [optional]
**status** | **string** | transaction request status | [optional]
**sources** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Participant[]**](Participant.md) | requested list of addresses and amounts that fund the transaction | [optional]
**destinations** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Participant[]**](Participant.md) | requested list of recipient addresses and amounts that benefit from the transaction | [optional]
**type** | **string** | transaction request type | [optional]
**created_at** | **\DateTime** | timestamp when transaction request was created | [optional]
**updated_at** | **\DateTime** | timestamp when transaction request was updated | [optional]
**failure** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Failure**](Failure.md) | failure details | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
