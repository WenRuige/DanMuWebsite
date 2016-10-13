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
    //将弹幕插入redis
    public function insertDanmuToRedis($list){
        $redis = $this->redis;
        $DanmuModel = new DanmuModel();
        $redis->lPush('danmu_list',$list);
        $danmuList = $redis->lSize('danmu_list');
        //如果redis中的数据大于0的话
        while($danmuList > 0){
            $data  =  $redis->rpop('danmu_list');
            $value = json_decode($data,true);
            $info = $DanmuModel->insertDanmu($value);
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