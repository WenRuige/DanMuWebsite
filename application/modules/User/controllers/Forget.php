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
    public function checkEmailAction(){
        $email = Base_Request::getRequest('email',null);
        $userObj = new User_Logic_User();
        $info = $userObj->checkEmail($email);
        //如果sql没错的话
        if($info['CODE'] != Base_Error::MODEL_RETURN_SUCCESS){
                $result = array(
                    'CODE'       => Base_Error::MYSQL_EXECUTE_ERROR,
                    'MESSAGE'    => '网络错误'
                );
            echo json_encode($result);
        }else{
            $flag = ($info['RES'] == 1)?null:'您输入的邮箱不存在!';
            $result = array(
                'CODE'      => Base_Error::MYSQL_EXECUTE_SUCCESS,
                'MESSAGE'   => $flag
            );
            echo json_encode($result);
        }
    }
    //向账户发送邮件,改变密码
    public function changePasswordAction()
    {
        $email = Base_Request::getRequest('email',null);
        $mailObj = new Base_Mail();
        $mailObj->sendChangePasswordMail($email);
       // $mailObj->sendRegisterEmail()
    }
    //激活密码
    public function activeAction(){
        $token = Base_Request::get('verify',null);
        $email = base64_decode($token);
        if(!empty($email)){
            $userObj = new User_Logic_User();
            $userObj->changePassword($email);
        }else{
            $result = array(
                "CODE"       => Base_Error::PARAM_LEVEL_ERROR,
                "MESSAGE"    => "参数错误"
            );
            echo json_encode($result);
        }
        //var_dump($email);

    }
}