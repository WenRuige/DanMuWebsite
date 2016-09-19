<?php /* Smarty version Smarty-3.0.8, created on 2016-09-19 14:59:26
         compiled from "/home/vagrant/Code/yaf_personal/application/views/login/login.phtml" */ ?>
<?php /*%%SmartyHeaderCode:90574686857df8cce6ca185-77644668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0792530433fa6cd1bcdaf2013b0177064d8b04d6' => 
    array (
      0 => '/home/vagrant/Code/yaf_personal/application/views/login/login.phtml',
      1 => 1474268909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90574686857df8cce6ca185-77644668',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
    <title>登陆界面</title>
</head>
<body>
    <form action="/user/login/login" method="post">
用户名:<input type="text" name = "email">
 密码 :<input type="text" name = "password">
    <input type="submit" value="提交">
    </form>
</body>
</html>