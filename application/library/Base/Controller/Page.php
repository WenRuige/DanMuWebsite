<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/9/19
 * Time: 8:35
 */
class Base_Controller_Page extends Base_Controller_Abstract {
    //默认不开启登录
    protected $needLogin =  false;

    public function init(){
        parent::init();
        if($this->needLogin && empty($this->userId)){
                //用户没有进行登录的话直接跳转
            $this->redirect(Base_Config::getConfig('web')->loginUrl);
        }
    }


}