<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/9/19
 * Time: 12:27
 */
//声明错误信息类
class Base_Error{
    //总共分为1）数据库错误2)逻辑错误3)前台模板错误
    //mysql连接错误
    const MYSQL_CONNECT_ERROR        = 00001;
    const MYSQL_CONFIG_ERROR         = 00002;
    const MODEL_RETURN_SUCCESS       = 00000;
    const MYSQL_EXECUTE_ERROR        = 00003;
    const ACCOUNT_REGISTER_ERROR     = 00004;
    const MAIL_SEND_ERROR            = 00005;
}