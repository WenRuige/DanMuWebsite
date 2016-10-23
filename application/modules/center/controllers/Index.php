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
        echo APP_PATH;
        $userId = Yaf_Session::getInstance()->get(User_Keys::getLoginUserKey());
        //获取用户的个人信息
        $centerLogic = new Center_Logic_Person();
        $userInfo = $centerLogic->getPersonInformation($userId);
        dump($userInfo['RES']);
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
}