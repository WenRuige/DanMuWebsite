<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 16/10/7
 * Time: 下午12:17
 */

date_default_timezone_set('Asia/Shanghai');
//设置密码
$password = '1234567';

$passwordHash = password_hash($password,PASSWORD_DEFAULT,['cost' => '5']);

echo $passwordHash;


