<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2016/9/26
 * Time: 9:25
 */
class IndexController extends Base_Controller_Page {
    public function init() {
        $this->setNeedLogin(false);
        parent::init();
    }
    //主页展示
    public function indexAction(){
        $this->getView()->display('video/video.tpl');
    }
}