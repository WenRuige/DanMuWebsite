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
    //保存弹幕
    public function saveDanmuAction(){
        $danmu_post = Base_Request::getRequest('danmu',null);
        $danmu = strip_tags($danmu_post);
        try{
            $danmuLogic = new Danmu_Logic_Danmu();
            $info = $danmuLogic->insertDanmu($danmu);
           
        }catch (Exception $e){
            $log = new Base_Log();
            $log->ERROR($e->getMessage());
            $result = array(
                "CODE"     =>  Base_Error::MYSQL_EXECUTE_ERROR,
                "MESSAGE"  => "系统错误"
            );
            return $result;

        }



        //$log = 'log.txt';
        //file_put_contents($log,$danmu,FILE_APPEND);





    }
}