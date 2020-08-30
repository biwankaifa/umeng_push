<?php

namespace biwankaifa\umeng_push\IOS;

use biwankaifa\umeng_push\IOSNotification;

class IOSGroupcast extends IOSNotification
{
    function __construct()
    {
        parent::__construct();
        $this->data["type"] = "groupcast";
        $this->data["filter"] = NULL;
    }
}