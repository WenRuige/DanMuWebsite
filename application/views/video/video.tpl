{extends file="layouts/index.tpl"}
{block name="content"}
    <link rel="stylesheet" href="{$stroot}/css/main.css">
    <section class="content">
        <!---资源占位使用--->

        <input type="hidden" id="video_id" value="{$id}">
        <div class="row">
            <div class="col-md-12">
                </br>
            </div>
        </div>
        <!---资源占位使用--->
        <div class="row">
            <div class="col-md-8">
                <div class="container" style="float:left;">
                    <div class="demo">
                        <div id="danmup"></div>
                    </div>

            </div>
        </div>
            <div class="col-md-3">


                <div class="box">
                    <div class="box-header">

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding" style=" height:515px; overflow:auto">
                        <table class="table table-condensed">
                            <tr>
                                <th style="width: 10px">id</th>
                                <th>弹幕发送内容</th>
                                <th>弹幕发送时间</th>
                                <th>操作</th>
                            </tr>

                            {foreach from=$danmu key=k item=v}
                                <tr>
                                    <td>{$v.id}</td>
                                    <td>{$v.content}</td>
                                    <td>
                                        {$v.created_at}
                                        {*<div class="progress progress-xs">*}
                                            {*<div class="progress-bar progress-bar-danger" style="width: 55%"></div>*}
                                        {*</div>*}
                                    </td>
                                </tr>
                                {/foreach}
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                </div>
            <script src="{$stroot}/js/jquery-2.1.4.min.js"></script>
            <script src="{$stroot}/js/jquery.shCircleLoader.js"></script>
            <script src="{$stroot}/js/jquery.danmu.js"></script>
            <script src="{$stroot}/js/main.js"></script>
            <script>
                $("#danmup").DanmuPlayer({
                    src: "{$stroot}/video/ocean.mp4",
                    height: "500px", //区域的高度
                    width: "700px", //区域的宽度
                    urlToGetDanmu: "/video/index/shootDanmu?id="+$("#video_id").val(),
                    urlToPostDanmu: "/video/index/saveDanmu?id="+$("#video_id").val()
                });
            </script>
    </section>

{/block}