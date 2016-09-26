<?php


class DanmuModel extends BaseModel {

    public function insertDanmu($data){
        $res = $this->db->insertInto('danmu',$data)->execute();
        return $res;
    }
}