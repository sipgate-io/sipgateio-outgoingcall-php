<?php

use Sipgate\Io\Example\OutgoingCall\SipgateClient;

require_once __DIR__."/../vendor/autoload.php";


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/..");
$dotenv->load();



$tokenId = $_ENV['TOKEN_ID'];
$token = $_ENV['TOKEN'];

$deviceId = $_ENV['DEVICE_ID'];
$caller = $_ENV['CALLER'];

$callerId = $_ENV['CALLER_ID'];
$callee = $_ENV['CALLEE'];

$client = new SipgateClient($tokenId, $token);

$response = $client->sendNewCallRequest($caller, $callerId, $deviceId, $callee);

echo "Status: ".$response->status();
echo "\n";
echo "Body: ".$response->body();
echo "\n";
