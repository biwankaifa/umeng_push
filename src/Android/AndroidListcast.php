<?php

namespace biwankaifa\umeng_push\Android;

use biwankaifa\umeng_push\AndroidNotification;

/**
 * @Class AndroidListcast 安卓列播
 * @Package biwankaifa\umeng_push\Android
 * @Date 2020/8/30 8:41 下午
 */
class AndroidListcast extends AndroidNotification
{
    function __construct()
    {
        parent::__construct();
        $this->data["type"] = "listcast";
        $this->data["device_tokens"] = NULL;
    }

}