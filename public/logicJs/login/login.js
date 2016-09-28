var loginInfo ={
    login:function () {
        var dataObj    = {};
            dataObj['email']      = $("#email").val().trim();
            dataObj['password']   = $("#password").val().trim();
        //判断是否为空
        if(dataObj['email'] == "" || dataObj['password'] == ""){
            $("#sign").html("不可为空");
            return false;
        }
        $.post("/user/login/login",dataObj,function(data){
            console.log(data);
            // data = JSON.parse(data||"null");
            // var sign = data.MESSAGE;
            // $("#signEmail").html(sign);
        });



    }



};