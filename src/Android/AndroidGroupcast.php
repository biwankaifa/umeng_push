<?php

namespace biwankaifa\umeng_push\Android;

use biwankaifa\umeng_push\AndroidNotification;

/**
 * @Class AndroidGroupcast 安卓组播
 * @Package biwankaifa\umeng_push\Android
 * @Date 2020/8/30 8:41 下午
 */
class AndroidGroupcast extends AndroidNotification
{
    function __construct()
    {
        parent::__construct();
        $this->data["type"] = "groupcast";
        $this->data["filter"] = NULL;
    }
}