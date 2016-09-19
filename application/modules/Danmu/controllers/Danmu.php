<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2016/9/18
 * Time: 22:20
 */
class DanmuController extends Yaf_Controller_Abstract{
    public function indexAction(){
        $danmu=strip_tags($_POST['danmu']);
        $file = 'log.txt';
        file_put_contents($file,$danmu,FILE_APPEND);
    }
}