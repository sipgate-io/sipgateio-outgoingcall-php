<?php

namespace Sipgate\Io\Example\OutgoingCall\Dto;

class Call
{
    private $caller;
    private $callerId;
    private $callee;
    private $deviceId;

    public function __construct($caller, $callerId, $callee, $deviceId)
    {
        $this->caller = $caller;
        $this->callerId = $callerId;
        $this->callee = $callee;
        $this->deviceId = $deviceId;
    }

    public function toArray()
    {
        return [
            "caller" => $this->caller,
            "callerId" => $this->callerId,
            "callee" => $this->callee,
            "deviceId" => $this->deviceId
        ];
    }
}

