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
       }, //检查密码格式
        checkPassword:function () {
            var password = $("#password").val().trim();
            if(password == ""){
                $("#signPassword").html('密码不可为空！');
            }else{
                $("#signPassword").html('');
            }
        },//检查确认密码格式
        checkRePassword:function () {
            var repassword = $("#repassword").val();
            if(repassword == ""){
                $("#signRePassword").html('确认密码不可为空！');
            }else{
                $("#signRePassword").html('');
            }
        },//注册账户
        registerAccount:function(){
            //如果提示信息都有不为空的数据的话说明还有信息不复合注册时候的信息
            //2期希望改版成每个标签都有 类似 "isSuccess="true"" 当都为true的时候继续向下操作
            var dataObj = {};
            dataObj['email']      = $("#email").val().trim();
            dataObj['password']   = $("#password").val().trim();
            dataObj['repassword'] = $("#repassword").val().trim();

        if($("#signRePassword").text() != "" &&$("#signPassword").text() != "" && $("#signEmail").text() != ""){
            return false;
        }
        console.log(dataObj);
        if(dataObj['password'] != dataObj['repassword']){
            $("#signRePassword").html('两次输入的密码不一致!');
            return false;
        }else if(dataObj['password'].length <=6 || dataObj['repassword'].length >=12){
            $("#signRePassword").html('密码需要在6~12位之间!');
            return false;
        }
            $.get("/user/register/registerAccount",dataObj,function(data){
                //
                console.log(data);
                //data = JSON.parse(data||"null");
               // var sign = data.MESSAGE;
               // $("#signEmail").html(sign);
            });

        //return false;
    }
}