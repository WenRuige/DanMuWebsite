<?php
//管理用户的session
class User_Keys{
    //用户id
    const SESSION_LOGINUSER_KEY  = 'login_user';
    //用户姓名
    const SESSION_LOGINUSER_NAME = 'login_username';

    public static function getLoginUserKey(){
        return self::SESSION_LOGINUSER_KEY;
    }

    public static function getLoginUserName(){
        return self::SESSION_LOGINUSER_NAME;
    }
}