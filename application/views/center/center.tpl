{extends file="layouts/index.tpl"}
{block name="content"}
<section class="content">
    <link rel="stylesheet" href="{$stroot}/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="{$stroot}/plugins/uploadify/uploadify.css">
    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" {if $userInfo['photo_url'] }src="{$stroot}/uploads/{$userInfo['id']}/{$userInfo['photo_url']}"{else}src="../../dist/img/user4-128x128.jpg"{/if} alt="User profile picture">

                    <h3 class="profile-username text-center">{$userInfo['nickname']}</h3>

                    <p class="text-muted text-center">{$userInfo['position']}</p>

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

                    {*<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>*}
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
                        {foreach from = ","|explode:$userInfo['hobby'] item =list}
                        <span class="label label-info">{$list}</span>
                            {/foreach}
                        {*<span class="label label-success">Coding</span>*}
                        {*<span class="label label-info">Javascript</span>*}
                        {*<span class="label label-warning">PHP</span>*}
                        {*<span class="label label-primary">Node.js</span>*}
                    </p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> 自我介绍</strong>

                    <p>{$userInfo['introduce']}</p>
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
                                    <input type="text" class="form-control" id="nickname" value="{$userInfo['nickname']}" placeholder="姓名">
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
                                    <input type="text" class="form-control" id="position"  value="{$userInfo['position']}" placeholder="职位">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">位置</label>

                                <div class="col-sm-10">
                                    {*<input type="text" class="form-control" id="inputName" placeholder="位置">*}
                                    通过ip来获取位置,二期实现
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" >爱好</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hobby" placeholder="爱好,多个请用','分隔" value="{$userInfo['hobby']}">
                                {*<select class="form-control select2" multiple="multiple" data-placeholder="选择一个或者多个"style="width: 100%">*}
                                    {*<option>PHP</option>*}
                                    {*<option>JAVASCRIPT</option>*}
                                    {*<option>PYTHON</option>*}
                                    {*<option>C++</option>*}
                                    {*<option>C</option>*}
                                    {*<option>C#</option>*}
                                    {*<option>我啥也不会</option>*}
                                {*</select>*}
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">自我介绍</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" id = "introduce" rows="3" placeholder="Enter ...">{$userInfo['introduce']}</textarea>
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
                                       {foreach from=$columns key=k item=v}
                                           <option value="{$v.id}">{$v.name}</option>
                                       {/foreach}
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

    <script src="{$stroot}/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="{$stroot}/plugins/uploadify/jquery.uploadify.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            jQuery('#file_upload').uploadify({
                'buttonText' : '点击上传',
                'swf'      : "{$stroot}/plugins/uploadify/uploadify.swf",
                'uploader' : '{$stroot}/plugins/uploadify/uploadify.php',
                'onUploadSuccess' : function(file, data, response){
                    $("#url").text(data);
                }
            });
            jQuery('#video_upload').uploadify({
                'buttonText' : '点击上传',
                'swf'      : "{$stroot}/plugins/uploadify/uploadify.swf",
                'uploader' : '{$stroot}/plugins/uploadify/uploadify.php',
                'onUploadSuccess' : function(file, data, response){
                    $("#video_url").text(data);
                }
            });
        });

    </script>
    <script src="{$stroot}/logicJs/center/person.js"></script>
    <script src="../../plugins/select2/select2.full.min.js"></script>

    <script>
        $(".select2").select2();
    </script>
{/block}