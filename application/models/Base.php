<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/9/19
 * Time: 12:08
 */

//数据层的基类

class BaseModel{
    //数据库名称
    protected $dbname = '';
    //数据库
    protected $db;
    //实例化数据库
    public function __construct()
    {
        if(!$this->db){
            $this->db = BaseModel::getMysql();
        }
    }
    //初始化mysql
    public static function  getMysql(){
        //获取Mysql的配置文件
        $config =  Base_Config::getConfig('mysql');
        if(empty($config)){
            $result = array(
                "CODE"     => Base_Error::MYSQL_CONFIG_ERROR,
                "MESSAGE"  => 'mysql数据库配置错误'
            );
            return $result;
        }
        $dsn = "mysql:host={$config->host};dbname={$config->dbname}";
        $pdo = new PDO($dsn, $config->username,$config->password);
        $fpdo = new FluentPDO($pdo);
        $pdoObj = is_object($fpdo)?$fpdo:Base_Error::MYSQL_CONNECT_ERROR;
        return $pdoObj;
    }

}