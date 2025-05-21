# # ScreeningView

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | Unique identifier of the transaction | [optional]
**transaction_hash** | **string** | Blockchain transaction hash | [optional]
**transaction_status** | **string** | Current status of the transaction | [optional]
**network** | **string** | Network code used for the transaction | [optional]
**transaction_metadata** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\TransactionMetadata**](TransactionMetadata.md) | Transaction metadata in JSON format | [optional]
**transaction_created_at** | **\DateTime** | Timestamp when the transaction was created | [optional]
**transaction_updated_at** | **\DateTime** | Timestamp when the transaction was last updated | [optional]
**screening_state** | **string** | Screening state of the transaction | [optional]
**screening_reason** | **string** | Reason for the screening result | [optional]
**screening_reason_code** | **string** | Reason code for the screening result | [optional]
**screening_created_at** | **\DateTime** | Timestamp when the screening was created | [optional]
**screening_updated_at** | **\DateTime** | Timestamp when the screening was last updated | [optional]
**screening_metadata** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\ScreeningMetadata**](ScreeningMetadata.md) | Screening metadata in JSON format | [optional]
**participants** | [**\Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\Participant[]**](Participant.md) | List of participants involved in the transaction | [optional]
**operation** | **string** | Operation type for the screening | [optional]
**address_id** | **string** | Unique identifier of the address involved in the screening | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
