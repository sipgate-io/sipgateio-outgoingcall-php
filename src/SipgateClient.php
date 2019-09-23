<?php

namespace Sipgate\Io\Example\OutgoingCall;

use Sipgate\Io\Example\OutgoingCall\Dto\Call;
use Zttp\Zttp;
use Zttp\ZttpResponse;

class SipgateClient
{
    protected static $BASE_URL = "https://api.sipgate.com/v2";

    protected $username;
    protected $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function sendNewCallRequest(string $caller, string $callerId, string $deviceId, string $callee): ZttpResponse
    {
        return $this->send(new Call($caller, $callerId, $callee, $deviceId));
    }

    protected function send(Call $call): ZttpResponse
    {
        return Zttp::withHeaders([
                "Accept" => "application/json",
                "Content-Type" => "application/json"
            ])
            ->withBasicAuth($this->username, $this->password)
            ->post(self::$BASE_URL."/sessions/calls", $call->toArray());
    }
}
