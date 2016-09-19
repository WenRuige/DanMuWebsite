<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/6
 * Time: 15:21
 */
class Base_Request
{
    public static function get($key, $default = '', $type = '')
    {
        if (isset($_GET[$key]) && self::valite($type, $_GET[$key])) {
            return $_GET[$key];
        }
        return $default;
    }

    public static function getPost($key, $default = '', $type = '')
    {
        if (isset($_POST[$key]) && self::valite($type, $_POST[$key])) {
            return $_POST[$key];
        }
        return $default;
    }

    public static function getRequest($key, $default = '', $type = '')
    {
        if (isset($_REQUEST[$key]) && self::valite($type, $_REQUEST[$key])) {
            return $_REQUEST[$key];
        }
        return $default;
    }

    public function valite($type, $val)
    {
        if(empty($type)){
            return true;
        }
        if($type=='int'){
            return is_numeric($val);
        }
    }
}