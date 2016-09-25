var forgetInfo = {
    //检查邮箱是否存在
    checkEmail:function(){
        var email = $("#email").val();
        //如果输入为空则提示空
        if(email == ''){
            $("#signEmail").html('邮箱不能为空');
            return false;
        }else{
            $("#signEmail").html('');
        }

        $.get("/user/forget/checkEmail",{"email":email},function(data){
            data = JSON.parse(data||"null");
            var sign = data.MESSAGE;
            $("#signEmail").html(sign);
        });
        //验证邮箱是否存在
    },
    //发送邮件
    sendEmail:function(){
        var email = $("#email").val();
        //如果输入为空则提示空
        if(email == ''){
            return;
        }
        if($("#signEmail").text() != ""){
            return false;
        }

        $.post("/user/forget/changePassword",{'email':email},function(data){
            //
            console.log(data);
            //data = JSON.parse(data||"null");
            // var sign = data.MESSAGE;
            // $("#signEmail").html(sign);
        });
    }
};