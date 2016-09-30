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
            <div class="col-md-9">
                <div class="container" style="float:left;">
                    <div class="demo">
                        <div id="danmup"></div>
                    </div>

            </div>
        </div>
            <div class="col-md-3">
                右侧弹幕栏
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