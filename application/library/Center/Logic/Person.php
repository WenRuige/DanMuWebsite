<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/10/14
 * Time: 上午8:00
 */
//个人属性设置
class Center_Logic_Person {
    //更新用户个人信息
    public function updatePersonInformation($user_id,$param = ''){
        try{
            //如果user_id或者变量为空的话
            if(empty($param)){
                $result  = array(
                    "CODE"      => Base_Error::CAN_NOT_BE_BLANK,
                    "MESSAGE"   => "条件不能为空!"
                );
                return $result;
            }
            $userObj = new UserModel();
            $updateStatus = $userObj->updatePersonInformation($user_id,$param);
            if($updateStatus){
                $result  = array(
                    "CODE"      => Base_Error::MYSQL_EXECUTE_SUCCESS,
                    "MESSAGE"   => "更新成功!"
                );
                return $result;
            }

        }catch(Exception $e){
            $result  = array(
                "CODE"      => Base_Error::MYSQL_EXECUTE_ERROR,
                "MESSAGE"   => "更新失败!"
            );
            return $result;
        }
    }
    //获取用户的相信信息
    public function getPersonInformation($userId = ''){
        try{
            //昵称,爱好,位置,自我介绍
            $userObj = new UserModel();
            $info = $userObj->getUserInformation(['nickname','hobby','position','introduce'],['id' => $userId]);
            if($info){
                $result = array(
                    "CODE"      => Base_Error::MYSQL_EXECUTE_SUCCESS,
                    "MESSAGE"   => "查询成功",
                    "RES"       => $info
                );
                return $result;
            }
        }catch(Exception $e){
            $result  = array(
                "CODE"      => Base_Error::MYSQL_EXECUTE_ERROR,
                "MESSAGE"   => "查询失败!"
            );
            return $result;
        }
    }
}