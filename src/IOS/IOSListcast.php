<?php

namespace biwankaifa\umeng_push\IOS;

use biwankaifa\umeng_push\IOSNotification;

class IOSListcast extends IOSNotification
{
    function __construct()
    {
        parent::__construct();
        $this->data["type"] = "listcast";
        $this->data["device_tokens"] = NULL;
    }

}