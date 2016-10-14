<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/10/13
 * Time: 上午8:41
 */
//缓存使用redis
class Danmu_Cache_Cache extends Base_Redis{
    //继承父类
   // public $redis;
    public function __construct()
    {
        parent::__construct();
    }
    //将弹幕插入redis缓存
    public function insertDanmuToRedis($list){
        try{
        $redis = $this->redis;
        $DanmuModel = new DanmuModel();
        $redis->lPush('danmu_list',$list);
        $danmuList = $redis->lSize('danmu_list');
        //如果redis中的数据大于0的话
        while($danmuList > 0){
            $data  =  $redis->rpop('danmu_list');
            //当第二个参数为true的时候,将json数据转化为数组,不设置参数返回为对象
            $value = json_decode($data,true);
            $DanmuModel->insertDanmu($value);
            }
        }catch(Exception $e){
            $log = new Base_Log();
            $log->ERROR("缓存层插入失败!");
            $result = array(
                "CODE"    => Base_Error::MYSQL_EXECUTE_ERROR,
                "MESSAGE" => "系统错误!"
            );
            return $result;
        }

    }
    //测试方法
    public function test(){
        $redis = $this->redis;
       // $list =  $redis->lGet('danmu_list',0);
        $danmuList = $redis->lSize('danmu_list');
        $list = $redis->lRange('danmu_list',0,-1);
        var_dump($list);
        var_dump($danmuList);

    }


}