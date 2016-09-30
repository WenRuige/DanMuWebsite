<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/9/19
 * Time: 15:09
 */
//用户逻辑层
//激活逻辑书写,防止忘记 @author:gewenrui Date:2016/9/24
//接受验证码,查找验证码是否在数据库中,如果不在的话默认为已经激活成功
//如果当前时间大于有效期,直接删除账号,并跳转到注册页面,让用户重新注册
class User_Logic_User{
    //用户登录界面
    public function userLogin($email,$password){
        try {
            $userModel = new UserModel();
            //密码md5加密
            $inputParam['email'] = $email;
            $inputParam['password'] = md5($password);
            //是否登录
            $info = $userModel->getUserAccount($inputParam);
            //如果为空表示未登陆
            if (empty($info)) {
                $result = array(
                    "CODE" => Base_Error::MYSQL_EXECUTE_ERROR,
                    "MESSAGE" => "用户名或者密码不正确"
                );
                return $result;
            }
            //判断是否激活邮箱
            if (intval($info['status']) === 0) {
                $result = array(
                    "CODE" => Base_Error::ACCOUNT_REGISTER_ERROR,
                    "MESSAGE" => "账户尚未激活邮箱,请查看注册邮箱内是否有邮件"
                );
                return $result;
            }
            //存入session
            Yaf_Session::getInstance()->set(User_Keys::getLoginUserKey(), $info['id']);
            User_Api::checkLogin();
            $result = array(
                "CODE"      => Base_Error::ACCOUNT_EXECUTE_SUCCESS,
                "MESSAGE"   => "登陆成功"
            );
            return $result;

        }catch(Exception $e){
            $log = new Base_Log();
            $log->ERROR("执行失败!");
            $result = array(
                "CODE"    => Base_Error::MYSQL_EXECUTE_ERROR,
                "MESSAGE" => "系统错误!"
            );
            return $result;

        }
    }
    public function checkEmail($email = ''){
        try{
            $userObj = new UserModel();
            $info = $userObj->checkEmail($email);
            $result = array(
                "CODE"    => Base_Error::MODEL_RETURN_SUCCESS,
                "MESSAGE" => '成功!',
                "RES"     => $info
            );
            return $result;
        }catch (Exception $e){
            $log = new Base_Log();
            $log->ERROR($e->getMessage());
            $result = array(
                "CODE"    => Base_Error::MYSQL_EXECUTE_ERROR,
                "MESSAGE" => $e->getMessage(),
            );
            return $result;
        }
    }
    //增加用户账户
    public function insertAccount($email,$password){
        try{
            //过期时间为24h
            $expireTime                      = time()* 60 * 60 * 24;
            //Token
            $token                           = md5($email.$password);
            $data['email']                   = $email;
            $data['password']                = md5($password);
            $data['token_expire_time']       = $expireTime;
            $data['token']                   = $token;
            $data['created_at']              = date("Y-m-d H:i:s");
            $userModel  = new UserModel();
            $info       = $userModel->insertUserAccount($data);
            $result = array(
                'CODE'              => Base_Error::MODEL_RETURN_SUCCESS,
                'MESSAGE'           => '注册成功!',
                'TOKEN'             => $token,
                'RES'               => $info
            );
            return $result;
        }catch(Exception $e){
            $log = new Base_Log();
            $log->ERROR($e->getMessage());
            $result = array(
                "CODE"    => Base_Error::MYSQL_EXECUTE_ERROR,
                "MESSAGE" => $e->getMessage(),
            );
            return $result;
        }
    }
    //激活账户
    public function activeAccount($verify){
        try{
            $userModel = new UserModel();
            $account = $userModel->activeAccount($verify);
            //防止token未删除
            if($account['status'] == 1){
                $result = array(
                  'CODE'      =>  Base_Error::ACCOUNT_REGISTER_ERROR,
                  'MESSAGE'   =>  '您已经注册成功啦,请登录！'
                );
                return $result;
            }

            $nowTime = time();
            //如果当前时间小于过期时间的话,返回true
            $flag = ($account['token_expire_time'] >= $nowTime)?true:false;
            if($flag){
                //更改用户注册状态,用户注册成功后token,token_expire_time清空
                $data['token']              = null;
                $data['token_expire_time']  = null;
                $data['status']             = 1;
                $data['updated_at']         = date("Y-m-d H:i:s");
                $changeStatus = $userModel->changeAccountStatus($account['id'],$data);
                if($changeStatus){
                    $result = array(
                      'CODE'    => Base_Error::MYSQL_EXECUTE_SUCCESS,
                      'MESSAGE' => '注册成功,正在为您跳转登录界面'
                    );
                    return $result;
                }else{
                    $result = array(
                        'CODE'    => Base_Error::MYSQL_EXECUTE_ERROR,
                        'MESSAGE' => '注册执行错误'
                    );
                    return $result;
                }
            }else{
                if($account['id']){
                    //已经过了有效期,删号,
                    $info = $userModel->deleteAccount($account['id']);
                    if($info){
                        $result = array(
                            'CODE'      =>   Base_Error::MYSQL_EXECUTE_SUCCESS,
                            'MESSAGE'   =>   '您的账号已经删除,请重新注册!'
                        );
                        return $result;
                    }else{
                        $result = array(
                            'CODE'    => Base_Error::MYSQL_EXECUTE_ERROR,
                            'MESSAGE' => '删除执行错误'
                        );
                        return $result;
                    }
                }else{
                    $result = array(
                        'CODE'      =>  Base_Error::ACCOUNT_REGISTER_ERROR,
                        'MESSAGE'   =>  '您已经注册成功啦,请登录！'
                    );
                    return $result;
                }

            }
        }catch(Exception $e){
            $log = new Base_Log();
            $log->ERROR($e->getMessage());
            $result = array(
                'CODE'    => Base_Error::SYSTEM_LEVEL_ERROR,
                'MESSAGE' => '系统错误'
            );
            return $result;
        }
    }
    //更改密码
    public function changePassword($email){
        try{

        }catch(Exception $e){
            $log  = new Base_Log();
            $log  ->ERROR($e->getMessage());
            $result = array(
                'CODE'     => Base_Error::MYSQL_EXECUTE_ERROR,
                'MESSAGE'  => '系统错误'
            );
            return $result;
        }

    }
}