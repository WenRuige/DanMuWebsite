<?php /* Smarty version Smarty-3.0.8, created on 2016-09-24 09:39:32
         compiled from "/home/vagrant/Code/yaf_personal/application/views/forget/forget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82155457257e5d954640e00-48880311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c5d74352cdea9898222aa3409a476de5317e853' => 
    array (
      0 => '/home/vagrant/Code/yaf_personal/application/views/forget/forget.tpl',
      1 => 1474681171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82155457257e5d954640e00-48880311',
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
            <form action="" method="post" class="container offset1 loginform">
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
                            <input id="email" type="email" name="email" placeholder="邮箱" tabindex="1" autofocus="autofocus" class="form-control input-medium">
                        </div>
                    </div>

                </div>
                <div class="form-actions">
                    <button type="submit" tabindex="4" class="btn btn-primary">登录</button>
                </div>
            </form>

        </div>
    </div>
    <script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/jQuery/jquery-2.2.3.min.js"></script>
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