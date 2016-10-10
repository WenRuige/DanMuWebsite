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
        //获取当前视频的Id
        $id = Base_Request::get('id',null);
        //设置当前视频的id
        if(empty($id)){
            //跳转404界面
            echo "404 DIE!";die;
        }
        $this->getView()->assign("id",$id);
        $this->getView()->display('video/video.tpl');
    }
    //保存弹幕
    public function saveDanmuAction(){
        //弹幕
        $danmu_post = Base_Request::getRequest('danmu',null);
        //视频id
        $videoId   = Base_Request::getRequest('id',null);
        $danmu = strip_tags($danmu_post);
        $danmuLogic = new Danmu_Logic_Danmu();
        $info = $danmuLogic->insertDanmu($danmu,$videoId);
        if($info['CODE'] != Base_Error::MYSQL_EXECUTE_SUCCESS){
            //error
        }
        var_dump($info);
           


    }
    //从数据库读取弹幕信息
    public function shootDanmuAction(){
        $videoId = Base_Request::getRequest('id',null);
        if(empty($videoId)){
            die;
        }
        $danmuLogic = new Danmu_Logic_Danmu();
        $danmuInfo = $danmuLogic->getDanmu($videoId);
        echo $danmuInfo;
    }
}