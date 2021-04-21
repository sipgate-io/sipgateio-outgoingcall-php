<?php

use Sipgate\Io\Example\OutgoingCall\SipgateClient;

require_once __DIR__."/../vendor/autoload.php";

$tokenId = "YOUR_SIPGATE_TOKEN_ID";
$token = "YOUR_SIPGATE_TOKEN";

$deviceId = "YOUR_SIPGATE_DEVICE_EXTENSION";
$caller = "DIALING_DEVICE";

$callerId = "DISPLAYED_CALLER_NUMBER";
$callee = "YOUR_RECIPIENT_PHONE_NUMBER";


$client = new SipgateClient($tokenId, $token);

$response = $client->sendNewCallRequest($caller, $callerId, $deviceId, $callee);

echo "Status: ".$response->status();
echo "\n";
echo "Body: ".$response->body();
echo "\n";
