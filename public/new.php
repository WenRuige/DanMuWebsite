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
print_r(get_loaded_extensions());

$s = extension_loaded('redis');
var_dump($s);