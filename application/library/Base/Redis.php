<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/10/13
 * Time: 上午7:58
 */
class Base_Redis{
    protected $redis;
    //实例化redis
    public function __construct()
    {
        $redisConfig = Base_Config::getConfig('redis');
        $this->redis = new Redis();
        $this->redis->connect($redisConfig->host,$redisConfig->port);
    }
}