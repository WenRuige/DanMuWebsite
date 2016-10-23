<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/10/23
 * Time: 下午12:07
 */
class ColumnsModel extends BaseModel {
    //插入弹幕
  public function getColumnInformation($fields='*'){
      $res = $this->db->from('columns')->select(null)->select($fields)->where('deleted_at',0)->fetchAll();
      return $res;
  }
}