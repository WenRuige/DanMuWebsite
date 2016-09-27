<?php
//弹幕逻辑类
class Danmu_Logic_Danmu{



    //插入一条弹幕
    public function insertDanmu($danmu = ''){
        if(empty($danmu)){
            return array("CODE" => Base_Error::MYSQL_EXECUTE_ERROR,"MESSAGE" => "参数错误!");
        }
        try{
            $DanmuModel = new DanmuModel();
            $data['video_id'] = 1 ;
            $data['content']  = $danmu;
            $data['created_at'] = date("Y-m-d H:i:s");
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
    public function getDanmu(){
        try{
           $DanmuModle = new DanmuModel();
            $info = $DanmuModle->getDanmu();
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