<?php

class IndexController extends Base_Controller_Page {
    //封装了construct()方法
    public function init() {
        $this->setNeedLogin(false);
        parent::init();
    }
    public function indexAction(){
     //  $a = new UserModel();
       //echo Base_Config::getConfig('web')->stroot;
        //echo "hello world";

        $this->getView()->display('index/index.tpl');
    }
}