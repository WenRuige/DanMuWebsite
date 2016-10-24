<?php /* Smarty version Smarty-3.0.8, created on 2016-10-24 09:20:47
         compiled from "/private/var/www/yaf_personal/application/views/center/center.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1600769429580d61efbe4e16-64294963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97189565ee8015d7e9c4a2df817f5754a94709c7' => 
    array (
      0 => '/private/var/www/yaf_personal/application/views/center/center.tpl',
      1 => 1477272046,
      2 => 'file',
    ),
    '0f9d185f525c7eb0c6d1226464db6c6a5ee41f93' => 
    array (
      0 => '/private/var/www/yaf_personal/application/views/layouts/index.tpl',
      1 => 1477120012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1600769429580d61efbe4e16-64294963',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/dist/css/skins/_all-skins.min.css">
    <!--加载回到顶部-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/css/top.css">
    <script src ="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/jQuery/jquery-2.2.3.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/js/html5shiv.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/js/respond.min.js"></script>
    <![endif]-->

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand"><b>Kakoi</b>DanMu</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <!--<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                        </div>
                    </form>
                </div>-->
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li>
                            <!-- Menu toggle button -->
                            <a href="/center/index/index">
                                <i class="fa fa-envelope-o"></i>个人中心
                                <span class="label label-success">new</span>
                            </a>
                        </li>
                        <li>
                        <a href="/user/login/logout" <i="" class="glyphicon glyphicon-off">
                        <!--<span class="label label-danger">9</span>-->
                        </a>
                        </li>
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class="menu">
                                        <li><!-- start notification -->
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <!-- end notification -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks Menu -->
                        <li class="dropdown tasks-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- Inner menu: contains the tasks -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <!-- Task title and progress text -->
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <!-- The progress bar -->
                                                <div class="progress xs">
                                                    <!-- Change the css width attribute to simulate progress -->
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <!--<section class="content-header">
                <h1>
                    Top Navigation
                    <small>Example 2.0</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Layout</a></li>
                    <li class="active">Top Navigation</li>
                </ol>
            </section>-->

            <!-- Main content -->
            
<section class="content">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/uploadify/uploadify.css">
    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" <?php if ($_smarty_tpl->getVariable('userInfo')->value['photo_url']){?>src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/uploads/<?php echo $_smarty_tpl->getVariable('userInfo')->value['id'];?>
/<?php echo $_smarty_tpl->getVariable('userInfo')->value['photo_url'];?>
"<?php }else{ ?>src="../../dist/img/user4-128x128.jpg"<?php }?> alt="User profile picture">

                    <h3 class="profile-username text-center"><?php echo $_smarty_tpl->getVariable('userInfo')->value['nickname'];?>
</h3>

                    <p class="text-muted text-center"><?php echo $_smarty_tpl->getVariable('userInfo')->value['position'];?>
</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Followers</b> <a class="pull-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b>Following</b> <a class="pull-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Friends</b> <a class="pull-right">13,287</a>
                        </li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">关于我</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-book margin-r-5"></i> 教育程度</strong>

                    <p class="text-muted">
                        山东蓝翔高级挖掘机技工学徒
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i>位置</strong>

                    <p class="text-muted">圣地亚哥</p>

                    <hr>

                    <strong><i class="fa fa-pencil margin-r-5"></i>爱好</strong>

                    <p>
                        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_from = explode(",",$_smarty_tpl->getVariable('userInfo')->value['hobby']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
?>
                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</span>
                            <?php }} ?>
                    </p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> 自我介绍</strong>

                    <p><?php echo $_smarty_tpl->getVariable('userInfo')->value['introduce'];?>
</p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab">动态</a></li>
                    <li><a href="#timeline" data-toggle="tab">时间轴</a></li>
                    <li><a href="#settings" data-toggle="tab">个人设置</a></li>
                    <li><a href="#video" data-toggle="tab">视频上传</a></li>
                    <li><a href="#video_uploaded" data-toggle="tab">上传的视频</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                                <span class="description">Shared publicly - 7:30 PM today</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>
                            <ul class="list-inline">
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                </li>
                                <li class="pull-right">
                                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                        (5)</a></li>
                            </ul>

                            <input class="form-control input-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post clearfix">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                                <span class="description">Sent you a message - 3 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>

                            <form class="form-horizontal">
                                <div class="form-group margin-bottom-none">
                                    <div class="col-sm-9">
                                        <input class="form-control input-sm" placeholder="Response">
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                                <span class="description">Posted 5 photos - 5 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="row margin-bottom">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
                                            <br>
                                            <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                                            <br>
                                            <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <ul class="list-inline">
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                </li>
                                <li class="pull-right">
                                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                        (5)</a></li>
                            </ul>

                            <input class="form-control input-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-envelope bg-blue"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                    <div class="timeline-body">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                        quora plaxo ideeli hulu weebly balihoo...
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs">Read more</a>
                                        <a class="btn btn-danger btn-xs">Delete</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-user bg-aqua"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                                    </h3>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-comments bg-yellow"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                    <div class="timeline-body">
                                        Take me to your leader!
                                        Switzerland is small and neutral!
                                        We are more like Germany, ambitious and misunderstood!
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-camera bg-purple"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                    <div class="timeline-body">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">
                        <form class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">姓名</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nickname" value="<?php echo $_smarty_tpl->getVariable('userInfo')->value['nickname'];?>
" placeholder="姓名">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">头像</label>
                                <div class="col-sm-10">
                                <div id="queue"></div>
                                <input id="file_upload" name="file_upload" type="file" multiple="true">
                                    照片名称:<span id="url"></span>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">职位</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="position"  value="<?php echo $_smarty_tpl->getVariable('userInfo')->value['position'];?>
" placeholder="职位">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">位置</label>

                                <div class="col-sm-10">
                                    通过ip来获取位置,二期实现
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" >爱好</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hobby" placeholder="爱好,多个请用','分隔" value="<?php echo $_smarty_tpl->getVariable('userInfo')->value['hobby'];?>
">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">自我介绍</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" id = "introduce" rows="3" placeholder="Enter ..."><?php echo $_smarty_tpl->getVariable('userInfo')->value['introduce'];?>
</textarea>
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" class="btn btn-danger" onclick="personInfo.updatePersonInformation()">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="video">
                        <form class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">视频名称</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="video_name" placeholder="视频名称">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">栏目</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="video_columns">
                                       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('columns')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                           <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                                       <?php }} ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">上传视频</label>
                                <div class="col-sm-10">
                                    <div id="queue"></div>
                                    <input id="video_upload" name="video_upload" type="file" multiple="true">
                                    视频名称:<span id="video_url"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">标签</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tag" placeholder="标签按照','来分隔">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">视频介绍</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id = "video_introduce" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" id="video_button" onclick="videoInfo.insertVideoInformation()" class="btn btn-danger">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="tab-pane" id="video_uploaded">
                        <form class="form-horizontal" enctype="multipart/form-data">
                                <!--<div class="box-header">
                                    <h3 class="box-title">Condensed Full Width Table</h3>
                                </div>-->
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-condensed">
                                        <tr>
                                            <th style="width: 10px">id</th>
                                            <th>视频名称</th>
                                            <th>缩略图</th>
                                            <th style="width: 40px">标签</th>
                                            <th>操作</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-red">55%</span>
                                            </td>
                                            <td>
                                                <span class="label label-primary">修改</span>
                                                <span class="label label-danger">删除</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            <!--<div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" id="video_button"  class="btn btn-danger">提交</button>
                                </div>
                            </div>-->
                        </form>
                    </div>

                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</section>

    <script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/uploadify/jquery.uploadify.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            jQuery('#file_upload').uploadify({
                'buttonText' : '点击上传',
                'swf'      : "<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/uploadify/uploadify.swf",
                'uploader' : '<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/uploadify/uploadify.php',
                'onUploadSuccess' : function(file, data, response){
                    $("#url").text(data);
                }
            });
            jQuery('#video_upload').uploadify({
                'buttonText' : '点击上传',
                'swf'      : "<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/uploadify/uploadify.swf",
                'uploader' : '<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/uploadify/uploadify.php',
                'onUploadSuccess' : function(file, data, response){
                    $("#video_url").text(data);
                }
            });
        });

    </script>
    <script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/logicJs/center/person.js"></script>
    <script src="../../plugins/select2/select2.full.min.js"></script>

    <script>
        $(".select2").select2();
    </script>


            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="actGotop"><a href="javascript:;" title="返回顶部"></a></div>
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="#">kakoi DanMu Website</a>.</strong> All rights
            reserved.
        </div>
        <!-- /.container -->
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

<script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/js/top.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $_smarty_tpl->getVariable('stroot')->value;?>
/dist/js/demo.js"></script>
</body>
</html>
