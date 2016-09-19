<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2016/9/19
 * Time: 10:28
 */
class LoginController extends Base_Controller_Page {
    //验证登录
    public function init() {
        $this->setNeedLogin(false);
        parent::init();
    }

    public function indexAction(){

        $this->getView()->display('login/login.phtml');
    }
    //登录界面
    public function loginAction(){
        $email =  Base_Request::getRequest('email',null);
        $password =  Base_Request::getRequest('password',null);
        //实例化user逻辑层
        $userObj  = new User_logic_User();
        $data = $userObj -> userLogin($email,$password);
        var_dump($data);
    }
}