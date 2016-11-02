/**
 * Created by gewenrui on 2016/10/13.
 */

var personInfo = {
    //增加个人信息
    updatePersonInformation: function () {
        var data = {};
        //昵称
        data['nickname']    =   $("#nickname").val();
        //职位
        data['position']    =   $("#position").val();
        //获取title
        //$(".select2-selection__choice").each(function(){
        //    hobby+= $(this).attr('title') +'|';
        //});
        //爱好
        data['hobby']       =   $("#hobby").val();
        //自我介绍
        data['introduce']   =   $("#introduce").val();
        data['photo_url']   =   $("#url").text();
        console.log(data);
        $.post("/center/index/updatePersonInformation",data,function(data){
            console.log(data);
            //data = JSON.parse(data||"null");
            //var sign = data.MESSAGE;
            //$("#signEmail").html(sign);
        });
    }

}

var videoInfo = {
    //增加视频信息
    insertVideoInformation:function(){

        var data = {};
        //视频名称
        data['title']          = $("#video_name").val() ;
        //栏目id
        data['columns_id']    = $("#video_columns option:selected").val();
        //视频
        data['video']         = $("#video_url").text();
        //标签
        data['tag']           = $("#tag").val();
        //视频介绍
        data['introduce']     = $("#video_introduce").val();
        console.log(data);
        console.log(data);
        $.post("/center/index/insertVideoInformation",data,function(data){


        });
    }
}
