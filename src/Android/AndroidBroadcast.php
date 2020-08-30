<?php
namespace biwankaifa\umeng_push\Android;

use biwankaifa\umeng_push\AndroidNotification;

class AndroidBroadcast extends AndroidNotification {
    function  __construct() {
        parent::__construct();
        $this->data["type"] = "broadcast";
    }
}