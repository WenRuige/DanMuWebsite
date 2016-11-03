<?php


class DanmuModel extends BaseModel {
   //插入弹幕
    public function insertDanmu($data){
        $res = $this->db->insertInto('danmu',$data)->execute();
        return $res;
    }
    //获取弹幕
    public function getDanmu($videoId){
        $res = $this->db->from('danmu')->select(null)->select("*")->where('video_id',$videoId)->where('deleted_at',0)->fetchAll();
        return $res;
    }
    //通配读取弹幕信息
    public function getDanmuList($field,$param){
        $res = $this->db->from('danmu')->select(null)->select($field)->where($param)->where('deleted_at',0)->fetchAll();
        return $res;
    }
}