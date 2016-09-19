<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/9/19
 * Time: 15:09
 */

//用户逻辑层
class User_Logic_User{
    //用户登录界面
    public function userLogin($email,$password){
        $userModel = new UserModel();
        //密码md5加密
        $inputParam['email']    = $email;
        $inputParam['password'] = md5($password);
        $info = $userModel->getUserAccount($inputParam);
        User_Api::checkLogin();
        return $info;
        //$info = $userModel->insertUserAccount($inputParam);

    }

}