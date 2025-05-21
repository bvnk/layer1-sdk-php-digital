# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | transaction id | [optional]
**address** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Address**](Address.md) | address involved in the transaction | [optional]
**reference** | **string** | custom identifier supplied for transaction that is used to link transaction to specific customer or use case | [optional]
**status** | **string** | transaction status | [optional]
**sources** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Participant[]**](Participant.md) | list of addresses and amounts that fund the transaction | [optional]
**destinations** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Participant[]**](Participant.md) | list of recipient addresses and amounts that benefit from the transaction | [optional]
**type** | **string** | transaction type | [optional]
**asset** | **string** | currency | [optional]
**amount** | **mixed** |  | [optional]
**hash** | **string** | blockchain transaction hash | [optional]
**network_detail** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\NetworkDetail**](NetworkDetail.md) | network details of the transaction | [optional]
**metadata** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionMetadata**](TransactionMetadata.md) | metadata about the transaction | [optional]
**created_at** | **\DateTime** | timestamp when transaction was created | [optional]
**updated_at** | **\DateTime** | timestamp when transaction was updated | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
