#!/bin/bash

# Run the create_address.php script with the provided credentials
php create_address.php \
  --clientId="20ff4e7d-8f1f-499f-8720-365a73e6f1f5" \
  --privateKeyFile="private_key.pem" \
  --assetPoolId="14a066e3-00d4-4b68-b8ee-37d385a32ad9" \
  --network="ETHEREUM" \
  --reference="my-user-id"