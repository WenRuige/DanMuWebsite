<?php /* Smarty version Smarty-3.0.8, created on 2016-09-23 08:59:43
         compiled from "/home/vagrant/Code/yaf_personal/application/views/register/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90264822557e47e7f39e235-40956474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a516c0ecebcb5c18a62f00efe35b2a5c390f5ce' => 
    array (
      0 => '/home/vagrant/Code/yaf_personal/application/views/register/register.tpl',
      1 => 1474592378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90264822557e47e7f39e235-40956474',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title></title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/login/css/lrtk.css">
</head>
<body>

<!-- 代码 开始 -->
<div id="login">

    <div class="wrapper">
        <div class="login">
            <form  class="container offset1 loginform">
                <div id="owl-login">
                    <div class="hand"></div>
                    <div class="hand hand-r"></div>
                    <div class="arms">
                        <div class="arm"></div>
                        <div class="arm arm-r"></div>
                    </div>
                </div>
                <div class="pad">
                    <div class="control-group">
                        <div class="controls">
                            <label for="email" class="control-label fa fa-envelope"></label>
                            <input id="email" type="email"  placeholder="邮箱" onblur="registerInfo.checkEmail()" tabindex="1" autofocus="autofocus" class="form-control input-medium">
                            <p id="signEmail"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label for="password" class="control-label fa fa-asterisk"></label>
                            <input  type="password" id="password" placeholder="密码" onblur="registerInfo.checkPassword()" tabindex="2" class="form-control input-medium">
                            <p id="signPassword"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label for="password" class="control-label fa fa-asterisk"></label>
                            <input  type="password" id="repassword" placeholder="确认密码" onblur="registerInfo.checkRePassword()" tabindex="2" class="form-control input-medium">
                            <p id="signRePassword"></p>
                        </div>
                    </div>
                </div>
                <a href="/user/register/registerAccount">发送邮件</a>
                <div class="form-actions"><a href="" tabindex="5" class="btn pull-left btn-link text-muted">忘记密码?</a><a href="" tabindex="6" class="btn btn-link text-muted">注册</a>
                    <button type="button" tabindex="4" class="btn btn-primary" onclick="registerInfo.registerAccount()">注册</button>
                </div>
            </form>

        </div>
    </div>
    <script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/logicJs/register/register.js"></script>
    <script>
        $(function() {
            $('#login #password').focus(function() {
                $('#owl-login').addClass('password');
            }).blur(function() {
                $('#owl-login').removeClass('password');
            });
        });
    </script>
</div>
<!-- 代码 结束 -->

</body>
</html>