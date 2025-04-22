
<?php

require 'aws.phar'; // AWSSDK

// Get region from environment variable or default to 'us-east-2'
$region = getenv('AWS_REGION') ?: 'us-east-2';

$secrets_client = new Aws\SecretsManager\SecretsManagerClient([
  'version' => 'latest',
  'region'  => $region,
]);

$showServerInfo = "";
$timeZone = "";
$currency = "";
$db_url = "";
$db_name = "";
$db_user = "";
$db_password = "";

try {
  $db_url = $secrets_client->getSecretValue([
    'SecretId' => '/cafe/dbUrl1'
  ]);
  $db_url = $db_url["
jqd-pboh-eeu
