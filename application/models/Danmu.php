<?php


class DanmuModel extends BaseModel {
   //插入弹幕
    public function insertDanmu($data){
        $res = $this->db->insertInto('danmu',$data)->execute();
        return $res;
    }
    //获取弹幕的
    public function getDanmu($videoId){
        $res = $this->db->from('danmu')->select(null)->select("*")->where('video_id',$videoId)->where('deleted_at',0)->fetchAll();
        return $res;
    }
}