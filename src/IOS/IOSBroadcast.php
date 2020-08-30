<?php

namespace biwankaifa\umeng_push\IOS;

use biwankaifa\umeng_push\IOSNotification;

class IOSBroadcast extends IOSNotification
{
    function __construct()
    {
        parent::__construct();
        $this->data["type"] = "broadcast";
    }
}