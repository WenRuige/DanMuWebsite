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
            //如果照片路由不为空的话,更新的时候需要把原来的照片删掉节省空间
            if(!empty($param['photo_url'])){
                $photo_url = $userObj->getUserInformation(['photo_url'],["id" =>$user_id]);
                $filepath = APP_UPLOADS.'/'.$user_id.'/'.$photo_url['photo_url'];
//                $file = 'log.txt';
//                file_put_contents($file,$filepath,FILE_APPEND);
                @unlink($filepath);
            }

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
    //获取用户的详细信息
    public function getPersonInformation($userId = ''){
        try{
            //昵称,爱好,位置,自我介绍
            $userObj = new UserModel();
            $info = $userObj->getUserInformation(['nickname','hobby','position','introduce','photo_url,id'],['id' => $userId]);
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
    //获取栏目的信息
    public function getColumnInformation(){
        try {
            $columnModel = new ColumnsModel();
            $res = $columnModel->getColumnInformation(['id', 'name']);
            if ($res) {
                $result = array(
                    "CODE"      => Base_Error::MYSQL_EXECUTE_SUCCESS,
                    "MESSAGE"   => "查询成功",
                    "RES"       => $res
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
    //插入视频信息
    public function insertVideoInformation($param){
        try{
        $videoModel = new VideoModel();
        $info = $videoModel->insertVideoInformation($param);
        if(!empty($info)){
            $result = array(
                "CODE"      => Base_Error::MYSQL_EXECUTE_SUCCESS,
                "MESSAGE"   => "插入成功",
                "RES"       => $info
            );
            return $result;
        }else{
            $result = array(
                "CODE"      => Base_Error::MYSQL_EXECUTE_SUCCESS,
                "MESSAGE"   => "插入失败",
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