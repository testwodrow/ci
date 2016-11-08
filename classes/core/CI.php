<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/8 0008
 * Time: 09:28
 */

namespace core;


class CI
{
    public static $ci; // ci controller instanse
}
CI::$ci = get_instance();