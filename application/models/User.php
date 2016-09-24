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

    }
    //增加用户的
    public function insertUserAccount($inputParam){
        $id = $this->db->insertInto('user',$inputParam)->execute();
        return $id;
    }
    //查询用户账户
    public function getUserAccount($inputParam){
        $res = $this->db->from('user')->select(null)->select("*")->where($inputParam)->select('deleted_at',0)->fetch();
        return $res;
    }
    //检查email是否重复
    public function checkEmail($email){
        $res = $this->db->from('user')->select('email')->where('email',$email)->where('deleted_at',0)->count();
        return $res;
    }
    //查询token值
    public function activeAccount($token){
        $res = $this->db->from('user')->select(null)->select(array('id','token_expire_time'))->where('token',$token)->where('deleted_at',0)->fetch();
        return $res;
    }
    //更改账户的状态
    public function changeAccountStatus($id,$param){
        $res = $this->db->update('user')->set($param)->where('id',$id)->execute();
        return $res;
    }
    //账号过期直接删号处理
    public function deleteAccount($id){
        $res = $this->db->update('user')->set('deleted_at',1)->where('id',$id)->execute();
        return $res;
    }
}