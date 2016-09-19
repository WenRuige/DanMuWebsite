<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2016/9/19
 * Time: 8:07
 */
class Base_Controller_Abstract extends Yaf_Controller_Abstract{

    protected $webroot;                 //项目根路径

    protected $objUser = null;          //实例化User

    protected $userId  = null;          //用户id

    public function init(){
        $this->webroot =  Base_Config::getConfig('web')->root;
        $this->objUser = User_Api::checkLogin();
        $this->userId  = !empty($this->objUser->userId)?$this->objUser->userId:0;
    }
    //未登录是否跳转
    protected function setNeedLogin($needLogin){
        $this->needLogin = $needLogin;
    }
}