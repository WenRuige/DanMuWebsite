<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2016/9/19
 * Time: 14:07
 */
class UserModel extends BaseModel {

    //可以在这里实现单例模式的提现

    public function getUserId(){
       // $this->db->
    }
    //增加用户的
    public function insertUserAccount($inputParam){
        $id = $this->db->insertInto('user',$inputParam)->execute();
        return $id;
    }
    //查询用户账户
    public function getUserAccount($inputParam){
        $res = $this->db->from('user')->select(null)->select("*")->where($inputParam)->fetch();
        return $res;
    }
}