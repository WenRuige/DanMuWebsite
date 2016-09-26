<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>滋啦滋啦弹幕网</title>
    <meta name="keywords" content="播放器" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="css/main.css">

</head>

<body>

<div class="container">
    <div class="demo">
        <div id="danmup" style="margin:20px auto"></div>
    </div>
</div>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.shCircleLoader.js"></script>
<script src="js/jquery.danmu.js"></script>
<script src="js/main.js"></script>
<script>
    $("#danmup").DanmuPlayer({
        src: "video/ocean.mp4",
        height: "500px", //区域的高度
        width: "500px" //区域的宽度
        ,urlToGetDanmu: ""
        ,urlToPostDanmu: "/danmu/danmu/index"
    });

    $("#danmup .danmu-div").danmu("addDanmu", [
          {text:"这是滚动弹幕", color: "black", size: 5, position: 0, time: 2}
        , {text:"我是帽子绿", color: "green", size: 1, position: 0, time: 3}
        , {text: "这是黄色的弹幕", color: "yellow", size: 1, position: 0, time: 3}
        , {text: "好快啊", color: "red", size: 1, position: 0, time: 19}
        , {text: "大家好，我是打不死的小强", color: "orange", size: 1, position: 0, time: 23}
    ])
</script>
<div class="foot">
</div>


</body>
</html>
