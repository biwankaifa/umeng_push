<?php

namespace biwankaifa\umeng_push\Android;

use biwankaifa\umeng_push\AndroidNotification;

/**
 * @Class AndroidUnicast 安卓单播
 * @Package biwankaifa\umeng_push\Android
 * @Date 2020/8/30 8:40 下午
 */
class AndroidUnicast extends AndroidNotification
{
    function __construct()
    {
        parent::__construct();
        $this->data["type"] = "unicast";
        $this->data["device_tokens"] = NULL;
    }

}