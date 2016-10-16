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
        //为了避免频繁的对Mysql进行写操作
            //此处使用了redis,数据先进入到redis中然后进行,
            //当redis的数据大于一定数量的时候,将redis的数据存入到mysql中
        //如果redis中的数据大于5的话
            if($danmuList > 5){
                while($danmuList > 0){
                    $data  =  $redis->rpop('danmu_list');
                    //当第二个参数为true的时候,将json数据转化为数组,不设置参数返回为对象
                    $value = json_decode($data,true);
                    $DanmuModel->insertDanmu($value);
                }
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
    //从redis中读取信息,此处为什么使用string,因为string上线的大小是512M
    public function getDanmuFromRedis($videoId){
    try{
        $redis = $this->redis;
        $DanmuModel = new DanmuModel();
        //设置对应的视频号为list_video_id
        //如果当前的视频中有缓存的话
        if($redis->get('list_'.$videoId)){
        //如果有缓存的话直接将缓存的数据返回
            return $redis->get('list_'.$videoId);
        }else{
            $info = $DanmuModel->getDanmu($videoId);
            $json = '[';
            foreach($info as $key => $value){
                $json .= $info[$key]['content'].',';
            }
            $json = substr($json,0,-1);
            $json .= ']';
            //插入redis 并且设置过期时间为200s
            $redis->set('list_'.$videoId,$json,1);
            //返回从数据库查询的结果集
            return $json;
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