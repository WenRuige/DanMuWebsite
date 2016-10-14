<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/9/19
 * Time: 12:27
 */
//声明错误信息类
class Base_Error{
    //总共分为1）数据库错误2)逻辑错误3)前台模板错误4)系统级别错误
    //mysql连接错误
    const MYSQL_CONNECT_ERROR        = '00001';
    //config配置错误
    const MYSQL_CONFIG_ERROR         = '00002';
    //model类别执行成功
    const MODEL_RETURN_SUCCESS       = '00000';
    //mysql执行失败
    const MYSQL_EXECUTE_ERROR        = '00003';
    //账户注册错误
    const ACCOUNT_REGISTER_ERROR     = '00004';
    //邮件发送失败！
    const MAIL_SEND_ERROR            = '00005';
    //mysql执行成功
    const MYSQL_EXECUTE_SUCCESS      = '00006';
    //系统级别错误
    const SYSTEM_LEVEL_ERROR         = '00007';
    //参数错误
    const PARAM_LEVEL_ERROR          = '00008';
    //执行成功
    const ACCOUNT_EXECUTE_SUCCESS    = '00009';
    //不能为空
    const CAN_NOT_BE_BLANK           = '00010';
}