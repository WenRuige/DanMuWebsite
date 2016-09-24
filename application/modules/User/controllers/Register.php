<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2016/9/19
 * Time: 10:28
 */
class RegisterController extends Base_Controller_Page {
    //验证登录
    public function init() {
        $this->setNeedLogin(false);
        parent::init();
    }
    //显示注册界面
    public function indexAction(){

        $this->getView()->display('register/register.tpl');
    }
    //检查email是否重复
    public function checkEmailAction(){
        $email = Base_Request::get('email',null);
        $userLogic = new User_Logic_User();
        $info = $userLogic->checkEmail($email);
        if($info['CODE'] != Base_Error::MODEL_RETURN_SUCCESS){
            $result = array(
                'CODE'       => Base_Error::MYSQL_EXECUTE_ERROR,
                'MESSAGE'    => '网络错误'
            );
            echo json_encode($result);
        }else{
            $content = ($info['RES'] == 1)?"邮箱重复啦!":null;
            $result = array(
                'CODE'       => Base_Error::MYSQL_EXECUTE_ERROR,
                'MESSAGE'    => $content
            );
            echo json_encode($result);
        }
    }
    //注册用户id
    public function registerAccountAction(){
        $email        = Base_Request::get('email',null);
        $password     = Base_Request::get('password',null);
        $repassword   = Base_Request::get('repassword',null);
        //如果email 为空 或者密码为空 或者确认密码为空 密码不等于确认密码
        if(empty($email) || empty($password) || empty($repassword) || ($password != $repassword)){
            $result = array(
                'CODE'       => Base_Error::ACCOUNT_REGISTER_ERROR,
                'MESSAGE'    => "注册错误!"
            );
            return $result;
        }
        $registerLogic = new User_logic_User();
        //二次验证,防止已经注册的用户重复注册
        $checkRepeat = $registerLogic->checkEmail($email);
        //如果用户邮箱存在,并且返回的值是正确执行返回的值
        if($checkRepeat['RES']&&$checkRepeat['CODE'] == Base_Error::MODEL_RETURN_SUCCESS){
            $result = array('CODE' => Base_Error::ACCOUNT_REGISTER_ERROR,'MESSAGE' => '用户邮箱重复注册');
            echo json_encode($result);
        }else{
            //新增用户
            $info = $registerLogic->insertAccount($email,$password);
        }
        //如果插入成功的话,向用户发送邮件,
        if($info['RES']){
            $mailObj =  new Base_Mail();
            $res = $mailObj->sendRegisterEmail($email,$info['TOKEN']);
            if($res['CODE'] == Base_Error::MODEL_RETURN_SUCCESS){
                echo json_encode($res);
            }else{
                echo json_encode($res);
            }
        }
    }
    //激活操作
    public function activeAction(){
        //验证码
        $verify = Base_Request::get('verify',null);
        $registerLogic  = new User_logic_User();
        $data = $registerLogic->activeAccount($verify);
        dump($data);
        echo $verify;
    }
}