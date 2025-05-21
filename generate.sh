curl "https://api.sandbox.layer1.com/digital/api-docs" | jq | sed 's/"openId": \[/"oauth2": \[/g' > digital.json

INPUT_FILE="digital.json"
BASE_PACKAGE="Layer1ClientsDigital"
GROUP_ID="com.layer1.clients"
ARTIFACT_ID="digital"

openapi-generator generate -i digital.json -g php -o . \
  --additional-properties hideGenerationTimestamp=true \
  --additional-properties groupId=${GROUP_ID} \
  --additional-properties artifactId=${ARTIFACT_ID} \
  --additional-properties invokerPackage=${BASE_PACKAGE}Invoker \
  --additional-properties apiPackage=${BASE_PACKAGE}Api \
  --additional-properties modelPackage=${BASE_PACKAGE}Model \
  --additional-properties enumUnknownDefaultCase=true \
  --additional-properties generateBuilders=true \
  --additional-properties useSingleRequestParameter=true \
  --additional-properties disallowAdditionalPropertiesIfNotPresent=false

echo "digital.json" >> .gitignore
echo ".idea/" >> .gitignore


