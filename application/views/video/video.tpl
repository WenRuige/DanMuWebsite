{extends file="layouts/index.tpl"}
{block name="content"}
    <link rel="stylesheet" href="{$stroot}/css/main.css">
    <section class="content">
        <!---资源占位使用--->
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
                撒是谁的
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
                    urlToGetDanmu: "",
                    urlToPostDanmu: "/video/index/saveDanmu"
                });
                $("#danmup .danmu-div").danmu("addDanmu", [
                    {*{text: "我是帽子绿", color: "green", size: 1, position: 0, time: 3}*}
                    {*, {text: "素材火火火火", color: "#f30", size: 1, position: 0, time: 10}*}
                    {*, {text: "这是黄色的弹幕", color: "yellow", size: 1, position: 0, time: 3}*}
                    {*, {text: "好快啊", color: "red", size: 1, position: 0, time: 19}*}
                    {*, {text: "大家好，我是打不死的小强", color: "orange", size: 1, position: 0, time: 23}*}
                ])
            </script>
    </section>

{/block}