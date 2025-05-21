# OpenAPIClient-php

Layer1 API making management of crypto assets simple and easy


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




// Configure OAuth2 access token for authorization: oauth2
$config = Layer1ClientsDigitalInvoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Layer1ClientsDigitalInvoker\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_address_request = new \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAddressRequest(); // \Layer1ClientsDigitalInvoker\Layer1ClientsDigitalModel\CreateAddressRequest

try {
    $result = $apiInstance->createAddress($create_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->createAddress: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.staging.layer1.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressApi* | [**createAddress**](docs/Api/AddressApi.md#createaddress) | **POST** /digital/v1/addresses | Create a new address
*AddressApi* | [**getAddress**](docs/Api/AddressApi.md#getaddress) | **GET** /digital/v1/addresses/{addressId} | Get address
*AddressApi* | [**listAddresses**](docs/Api/AddressApi.md#listaddresses) | **GET** /digital/v1/addresses | List addresses
*AddressApi* | [**listTags**](docs/Api/AddressApi.md#listtags) | **GET** /digital/v1/addresses/{addressId}/tags | List address tags
*AddressApi* | [**validateAddress**](docs/Api/AddressApi.md#validateaddress) | **POST** /digital/v1/addresses/validate | Validate address
*AssetPoolApi* | [**createAssetPool**](docs/Api/AssetPoolApi.md#createassetpool) | **POST** /digital/v1/asset-pools | Create asset pool
*AssetPoolApi* | [**deleteAssetPool**](docs/Api/AssetPoolApi.md#deleteassetpool) | **DELETE** /digital/v1/asset-pools/{assetPoolId} | Delete asset pool
*AssetPoolApi* | [**getAssetPool**](docs/Api/AssetPoolApi.md#getassetpool) | **GET** /digital/v1/asset-pools/{assetPoolId} | Get asset pool
*AssetPoolApi* | [**getAssetPoolBalance**](docs/Api/AssetPoolApi.md#getassetpoolbalance) | **GET** /digital/v1/asset-pools/{assetPoolId}/balances | Get asset pool balance
*AssetPoolApi* | [**getAssetPoolMaxWithdrawableAmount**](docs/Api/AssetPoolApi.md#getassetpoolmaxwithdrawableamount) | **GET** /digital/v1/asset-pools/{assetPoolId}/max-withdrawable-amount | Get max asset pool withdrawable balance
*AssetPoolApi* | [**getAssetPoolSummary**](docs/Api/AssetPoolApi.md#getassetpoolsummary) | **GET** /digital/v1/asset-pools/summary | Get asset pool summary
*AssetPoolApi* | [**listAssetPools**](docs/Api/AssetPoolApi.md#listassetpools) | **GET** /digital/v1/asset-pools | List asset pools
*AssetPoolApi* | [**updateAssetPool**](docs/Api/AssetPoolApi.md#updateassetpool) | **PATCH** /digital/v1/asset-pools/{assetPoolId} | Update asset pool
*ExportApi* | [**createBalanceExport**](docs/Api/ExportApi.md#createbalanceexport) | **POST** /digital/v1/exports | Create a balance export
*ExportApi* | [**getExport**](docs/Api/ExportApi.md#getexport) | **GET** /digital/v1/exports/{id} | Get export with a download link
*ExportApi* | [**getExports**](docs/Api/ExportApi.md#getexports) | **GET** /digital/v1/exports | List all exports
*FeeApi* | [**estimateTransactionFee**](docs/Api/FeeApi.md#estimatetransactionfee) | **POST** /digital/v1/fee-estimate | Estimate transaction fee
*KeyPairApi* | [**createKeyPair**](docs/Api/KeyPairApi.md#createkeypair) | **POST** /digital/v1/key-pairs | Create key pair
*KeyPairApi* | [**getKeyPair**](docs/Api/KeyPairApi.md#getkeypair) | **GET** /digital/v1/key-pairs/{keyPairId} | Get key pair
*KeyPairApi* | [**listKeyPairs**](docs/Api/KeyPairApi.md#listkeypairs) | **GET** /digital/v1/key-pairs | List key pairs
*NetworkApi* | [**getNetworks**](docs/Api/NetworkApi.md#getnetworks) | **GET** /digital/v1/networks | Get all networks
*ReturnApi* | [**createReturnTransactionRequest**](docs/Api/ReturnApi.md#createreturntransactionrequest) | **POST** /digital/v1/returns | Create return transaction request
*ScreeningApi* | [**listScreenings**](docs/Api/ScreeningApi.md#listscreenings) | **GET** /digital/v1/screenings | List screening results
*ScreeningApi* | [**manuallyActionHeldTransfer**](docs/Api/ScreeningApi.md#manuallyactionheldtransfer) | **PUT** /digital/v1/screenings/action | Approve or reject a held transfer
*TransactionApi* | [**claimTransaction**](docs/Api/TransactionApi.md#claimtransaction) | **POST** /digital/v1/transaction-claims | Claim blockchain transaction
*TransactionApi* | [**getTransactionById**](docs/Api/TransactionApi.md#gettransactionbyid) | **GET** /digital/v1/transactions/{transactionId} | Get transaction
*TransactionApi* | [**listTransactions**](docs/Api/TransactionApi.md#listtransactions) | **GET** /digital/v1/transactions | List transactions
*TransactionRequestApi* | [**createStakingTransaction**](docs/Api/TransactionRequestApi.md#createstakingtransaction) | **POST** /digital/v1/staking-requests | Create staking transaction request
*TransactionRequestApi* | [**createTransaction**](docs/Api/TransactionRequestApi.md#createtransaction) | **POST** /digital/v1/transaction-requests | Create transaction request
*TransactionRequestApi* | [**getTransactionRequestById**](docs/Api/TransactionRequestApi.md#gettransactionrequestbyid) | **GET** /digital/v1/transaction-requests/{requestId} | Get transaction request
*TransactionRequestApi* | [**listTransactionRequests**](docs/Api/TransactionRequestApi.md#listtransactionrequests) | **GET** /digital/v1/transaction-requests | List transaction requests

## Models

- [Address](docs/Model/Address.md)
- [ApiError](docs/Model/ApiError.md)
- [Asset](docs/Model/Asset.md)
- [AssetPoolSummary](docs/Model/AssetPoolSummary.md)
- [AssetValue](docs/Model/AssetValue.md)
- [Balance](docs/Model/Balance.md)
- [BlockDetail](docs/Model/BlockDetail.md)
- [CreateAddressRequest](docs/Model/CreateAddressRequest.md)
- [CreateAssetPoolRequest](docs/Model/CreateAssetPoolRequest.md)
- [CreateBalanceExportRequest](docs/Model/CreateBalanceExportRequest.md)
- [CreateKeyPairRequest](docs/Model/CreateKeyPairRequest.md)
- [CreateStakingTransactionRequest](docs/Model/CreateStakingTransactionRequest.md)
- [CreateTransactionRequest](docs/Model/CreateTransactionRequest.md)
- [Detail](docs/Model/Detail.md)
- [EstimateTransactionFeeRequest](docs/Model/EstimateTransactionFeeRequest.md)
- [Export](docs/Model/Export.md)
- [Failure](docs/Model/Failure.md)
- [KeyPair](docs/Model/KeyPair.md)
- [ManualActionRequest](docs/Model/ManualActionRequest.md)
- [Network](docs/Model/Network.md)
- [NetworkDetail](docs/Model/NetworkDetail.md)
- [Pageable](docs/Model/Pageable.md)
- [PaginatedExports](docs/Model/PaginatedExports.md)
- [PaginatedResultAddress](docs/Model/PaginatedResultAddress.md)
- [PaginatedResultKeyPair](docs/Model/PaginatedResultKeyPair.md)
- [PaginatedResultTransaction](docs/Model/PaginatedResultTransaction.md)
- [PaginatedResultTransactionRequest](docs/Model/PaginatedResultTransactionRequest.md)
- [PaginatedScreenings](docs/Model/PaginatedScreenings.md)
- [Participant](docs/Model/Participant.md)
- [ReturnRequest](docs/Model/ReturnRequest.md)
- [ScreeningMetadata](docs/Model/ScreeningMetadata.md)
- [ScreeningView](docs/Model/ScreeningView.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionClaimRequest](docs/Model/TransactionClaimRequest.md)
- [TransactionMetadata](docs/Model/TransactionMetadata.md)
- [TransactionRequest](docs/Model/TransactionRequest.md)
- [UpdateAssetPoolRequest](docs/Model/UpdateAssetPoolRequest.md)
- [ValidateAddressRequest](docs/Model/ValidateAddressRequest.md)
- [ValidateAddressResponse](docs/Model/ValidateAddressResponse.md)

## Authorization

Authentication schemes defined for the API:
### openId

### httpSignature

- **Type**: HTTP signature authentication

### oauth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
