<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 16/10/1
 * Time: 上午8:43
 */
class IndexController extends Base_Controller_Page{
    public function init() {
        $this->setNeedLogin(true);
        parent::init();
    }

    public function  indexAction(){
        $userId = Yaf_Session::getInstance()->get(User_Keys::getLoginUserKey());
        dump($userId);
        //获取用户的个人信息
        $centerLogic  = new Center_Logic_Person();
        $userInfo     = $centerLogic->getPersonInformation($userId);
        //获取栏目信息
        $columnsInfo  = $centerLogic->getColumnInformation();
        //获取上传的视频
        $videoInfo    = $centerLogic->getVideoInformation($userId);
        if($videoInfo['CODE'] == Base_Error::MYSQL_EXECUTE_SUCCESS){

            $this->getView()->assign('video',$videoInfo['RES']);
        }
        if($columnsInfo['CODE'] == Base_Error::MYSQL_EXECUTE_SUCCESS){
            $this->getView()->assign('columns',$columnsInfo['RES']);
        }
        if($userInfo['CODE'] == Base_Error::MYSQL_EXECUTE_SUCCESS){
            $this->getView()->assign('userInfo',$userInfo['RES']);
        }
        $this->getView()->display('center/center.tpl');
    }

   //更新个人信息
    public function updatePersonInformationAction(){
        //昵称
        $inputParam['nickname']       =   Base_Request::getRequest('nickname',null);
        //职位
        $inputParam['position']       =   Base_Request::getRequest('position',null);
        //自我介绍(过滤)
        $inputParam['introduce']      =   filter_input(INPUT_POST, 'introduce', FILTER_DEFAULT);
        //爱好
        $inputParam['hobby']          =   Base_Request::getRequest('hobby',null);
        $inputParam['photo_url']      =   Base_Request::getRequest('photo_url',null);
        $inputParam = array_filter($inputParam);
        $user_id = Yaf_Session::getInstance()->get(User_Keys::getLoginUserKey());
        //判断爱好是否为空
        //echo json_encode($inputParam);
        $centerLogic = new Center_Logic_Person();
        $info = $centerLogic->updatePersonInformation($user_id,$inputParam);
        echo json_encode($info);
    }
    //增加视频
    public function insertVideoInformationAction(){
        $user_id = Yaf_Session::getInstance()->get(User_Keys::getLoginUserKey());
        //视频名称
        $inputParam['name']         =  Base_Request::getRequest('name',null);
        //栏目Id
        $inputParam['columns_id']   =  Base_Request::getRequest('columns_id',null);
        //视频
        $inputParam['video']        =  Base_Request::getRequest('video',null);
        //标签
        $inputParam['tag']          =  Base_Request::getRequest('tag',null);
        //视频介绍
        $inputParam['introduce']    =  Base_Request::getRequest('introduce',null);
        //过滤
        $inputParam['user_id']      =  $user_id;
        $inputParam['created_at']   = date('Y-m-d H:i:s');
        $inputParam  = array_filter($inputParam);
        $centerLogic = new Center_Logic_Person();
        $info = $centerLogic->insertVideoInformation($inputParam);
        if($info['CODE'] == Base_Error::MYSQL_EXECUTE_SUCCESS){

        }
    }
}