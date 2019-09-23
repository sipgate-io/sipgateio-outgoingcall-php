<?php

use Sipgate\Io\Example\OutgoingCall\SipgateClient;

require_once __DIR__."/../vendor/autoload.php";

$username = "YOUR_SIPGATE_EMAIL";
$password = "YOUR_SIPGATE_PASSWORD";

$deviceId = "YOUR_SIPGATE_DEVICE_EXTENSION";
$caller = "DIALING_DEVICE";

$callerId = "DISPLAYED_CALLER_NUMBER";
$callee = "YOUR_RECIPIENT_PHONE_NUMBER";


$client = new SipgateClient($username, $password);

$response = $client->sendNewCallRequest($caller, $callerId, $deviceId, $callee);

echo "Status: ".$response->status();
echo "\n";
echo "Body: ".$response->body();
echo "\n";
