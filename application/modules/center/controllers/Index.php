<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 16/10/1
 * Time: 上午8:43
 */
class IndexController extends Base_Controller_Page{
    public function init() {
        $this->setNeedLogin(false);
        parent::init();
    }

    public function  indexAction(){
        $userId = Yaf_Session::getInstance()->get(User_Keys::getLoginUserKey());
        //dump($userId);
        $this->getView()->display('center/center.tpl');
    }
}