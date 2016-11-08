<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/7 0007
 * Time: 14:06
 */

namespace tools;


use core\CI;

class Tools
{
    public static function test()
    {
        CI::$ci->load->database();
        $x = CI::$ci->db->query("select * from `user` limit 0,10");
        var_dump($x->result());
    }

    /**
     * 对象转成数组
     * @param array $d
     * @return array
     */
    public static function object2array($d)
    {
        if (is_object($d)) $d = get_object_vars($d);
        if (is_array($d))
            return array_map('self::object2array', $d);
        else
            return $d;
    }

    /**
     * 数组转成对象
     * @param object $d
     * @return object
     */
    public static function array2object($d)
    {
        if (is_array($d))
            return (object) array_map('self::array2object', $d);
        else
            return $d;
    }
}