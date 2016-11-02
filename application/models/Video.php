<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/10/23
 * Time: 下午8:35
 */
class VideoModel extends BaseModel{
    //插入视频信息
    public function insertVideoInformation($param){
         $id = $this->db->insertInto('video',$param)->execute();
         return $id;
    }
    //获取视频信息
    public function getVideoInformation($field = '*',$param){
        $res = $this->db->from('video')->select(null)->select($field)->where($param)->where('deleted_at',0)->fetchAll();
        return $res;
    }

}