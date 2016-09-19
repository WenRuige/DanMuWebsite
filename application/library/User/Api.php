<?php


class User_Api{

    protected $userId;
    //检查是否登录
    public static function checkLogin(){
        //创建一个空的对象
        $empty_object = new stdClass();
        //设置该空的对象的userId
        $empty_object->userId = Yaf_Session::getInstance()->get(User_Keys::getLoginUserKey());
        return $empty_object;
    }
}