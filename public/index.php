<?php
//应用路径
define("APP_PATH",  realpath(dirname(__FILE__) . '/../'));
echo APP_PATH;echo
//配置路径
define("APP_CONFIG", APP_PATH.'/conf');
//当前使用的节点(test/dev/production)
define('APP_ENVIRON', ini_get('yaf.environ'));
//类库信息
define("APP_LIBRARY", APP_PATH.'/application/library');
//插件信息
define("APP_PLUGINS", APP_PATH.'/application/plugins');
//设置时区
ini_set('date.timezone', 'Asia/Shanghai');

try {
    $application = new Yaf_Application(APP_CONFIG . "/application.ini", APP_ENVIRON);
    $application->bootstrap()->run();
} catch (Exception $e) {
    var_dump($e->getMessage());
}

