<?php
//弹幕逻辑类
class Danmu_Logic_Danmu{

    //插入一条弹幕
    public function insertDanmu($danmu = '',$videoId = ''){
        //用户id
        $userId    = Yaf_Session::getInstance()->get(User_Keys::getLoginUserKey());
        if(empty($danmu)||empty($videoId)||empty($userId)){
            return array("CODE" => Base_Error::MYSQL_EXECUTE_ERROR,"MESSAGE" => "参数错误!");
        }
        try{
            $DanmuModel = new DanmuModel();
            $data['video_id']   = $videoId ;
            $data['content']    = $danmu;
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['user_id']    = $userId;
            //json_encode数据
            $list = json_encode($data);
            //如果已经加载了redis,先加到redis在加到Mysql,如果不得话直接加载到Mysql
            if(extension_loaded('redis')){

            }
            //$log = "123.log";
            //file_put_contents($)
            $info = $DanmuModel->insertDanmu($data);
            if(!empty($info)){
                $result  = array(
                    "CODE"      => Base_Error::MYSQL_EXECUTE_SUCCESS,
                    "MESSAGE"   => "插入成功"
                );
                return $result;
            }

        }catch(Exception $e){
            $result  = array(
                "CODE"      => Base_Error::MYSQL_EXECUTE_ERROR,
                "MESSAGE"   => "查询失败"
            );
            return $result;
        }
    }
    public function getDanmu($videoId = ''){
        try{
           $DanmuModle = new DanmuModel();
            $info = $DanmuModle->getDanmu($videoId);
            //拼凑弹幕
            $json = '[';
            foreach($info as $key => $value){
                $json .= $info[$key]['content'].',';
            }
            $json = substr($json,0,-1);
            $json .= ']';
            return $json;
        }catch(Exception $e){
            $e->getMessage();
            $result   = array(
                'CODE'      => Base_Error::MYSQL_EXECUTE_ERROR,
                'MESSAGE'   => '执行错误'
            );
            return $result;
        }
    }

}