<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 16/10/7
 * Time: 下午12:17
 */

//date_default_timezone_set('Asia/Shanghai');
////设置密码
//$password = '1234567';
//
//$passwordHash = password_hash($password,PASSWORD_DEFAULT,['cost' => '5']);
//
//echo $passwordHash;

//连接本地的 Redis 服务
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

//$data = "{'video_id':'1','content':"{ \"text\":\"\u63d2\u5165\u6570\u636e\",\"color\":\"#ffffff\",\"size\":\"10\",\"position\":\"0\",\"time\":89}","created_at":"2016-10-13 08:25:09","user_id":"23"}"
//$redis->lPush('list','redis');
//$redis->lPush('list','mysql');
//$redis->lPush('list','oracle');
//$size = $redis->lSize('list');    //首先判断整个链表的数量是否大于0,如果大约0的话递归删除链表内的元素
//if($size > 0){
//    echo $size;
//    $delete = $redis->lPop('list');
//    echo $delete;
//}

//返回链表中的所有元素
//$list = $redis->lRange('danmu_list',0,-1);
//$list =  $redis->lGet('danmu_list',0);
//进行decode
//如果json_decode第二个参数为true的时候,将json数据转换为数组,
//如果不设置参数的话将其转换成对象
//$array = json_decode($list,true);
//$redis->set('name','gwenrui',1);
$name = $redis->get('name');
var_dump($name);

