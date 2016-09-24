<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2016/9/24
 * Time: 9:37
 */


class ForgetController extends Base_Controller_Page {
    public function init() {
        $this->setNeedLogin(false);
        parent::init();
    }

    public function indexAction(){
        $this->getView()->display('forget/forget.tpl');
    }
}