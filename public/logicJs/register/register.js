var registerInfo = {
        //验证邮箱是否重复
        checkEmail:function(){
            //获取用户输入的email
           var email = $("#email").val().trim();
            if(email == ""){
                $("#signEmail").html("邮箱不可为空!");
                return;
            }
            $.get("/user/register/checkEmail",{"email":email},function(data){
                data = JSON.parse(data||"null");
                var sign = data.MESSAGE;
                $("#signEmail").html(sign);
            });
       }
}