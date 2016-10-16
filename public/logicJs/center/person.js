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
        console.log(data);
        $.post("/center/index/updatePersonInformation",data,function(data){
            console.log(data);
            //data = JSON.parse(data||"null");
            //var sign = data.MESSAGE;
            //$("#signEmail").html(sign);
        });

          // var a = $(".select2-selection__choice").attr('title');
       // alert(a);
       // alert(hobbit);


    }
}
