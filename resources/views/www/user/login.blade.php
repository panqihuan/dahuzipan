

<style>
    .login-submit:after {
    }
    .login {
        display: none;
        position: relative;
        margin: 200px auto 0;
        width: 462px;
        padding-right: 32px;
        font-weight: 300;
        color: #a8a7a8;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);
    }
    .login p {
        margin: 0 0 16px;
    }
    .login-submit {
        background-color: rgb(55,55,55);
        position: absolute;
        top: 15px;
        right: 0;
        width: 66px;
        height: 66px;
        padding: 8px;
        border-radius: 33px;
        -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.35);
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.35);
    }
    label {
        float: left;
        width: 130px;
        line-height: 40px;
        padding-right: 15px;
        font-weight: 100;
        text-align: right;
        letter-spacing: 1px;
        color: #DDDDDD;
    }
    input, button, label {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 20px;
        font-weight: 300;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    input[type=text], input[type=password] {
        padding: 0 10px 0 12px;
        width: 300px;
        font-size: 18px;
        height: 40px;
        font-weight: bold;
        color: #CCCCCC;
        letter-spacing: 2px;
        text-shadow: 1px 1px 1px black;
        /*background: rgba(0, 0, 0, 0.16);*/
        background: rgba(255, 255, 255, 0.16);
        border: 0;
        border-radius: 5px;
        /*-webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.06);*/
        -webkit-box-shadow: inset 0 1px 8px rgba(255, 255, 255, 0.2), 1px 4px rgba(0, 0, 0, 0.06);
        /*box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.06);*/
        box-shadow: inset 0 1px 8px rgba(255, 255, 255, 0.2), 1px 4px rgba(0, 0, 0, 0.06);
    }
    .login-button {
        position: relative;
        z-index: 2;
        width: 50px;
        height: 50px;
        padding: 0 0 48px;
        text-indent: 120%;
        white-space: nowrap;
        overflow: hidden;
        background: none;
        border: 0;
        border-radius: 24px;
        cursor: pointer;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, 0.1);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, 0.1);
    }
    .login-button:before {
        content: '';
        position: absolute;
        top: 5px;
        bottom: 5px;
        left: 5px;
        right: 5px;
        background: #00a2d3;
        border-radius: 25px;
        background-image: -webkit-linear-gradient(top, #00a2d3, #0d7796);
        background-image: -moz-linear-gradient(top, #00a2d3, #0d7796);
        background-image: -o-linear-gradient(top, #00a2d3, #0d7796);
        background-image: linear-gradient(to bottom, #00a2d3, #0d7796);
        -webkit-box-shadow: inset 0 0 0 1px #00a2d3, 0 0 0 5px rgba(0, 0, 0, 0.16);
        box-shadow: inset 0 0 0 1px #00a2d3, 0 0 0 5px rgba(0, 0, 0, 0.16);
    }
    .login-submit:before {
        top: 29px;
        left: -4px;
        width: 4px;
        height: 10px;
        -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.06);
        box-shadow: inset 0 1px rgba(255, 255, 255, 0.06);
    }
    .login-button:after {
        content: '';
        position: absolute;
        top: 16px;
        left: 13px;
        width: 26px;
        height: 20px;
        background: url(/image/arrow.png) 0 0 no-repeat;
    }
    .forgot-password {
        padding-left: 130px;
        font-size: 13px;
        font-weight: 100;
        letter-spacing: 1px;
    }
    a {
        color: #00a1d2;
        text-decoration: none;
    }
</style>
<script>
    $(function(){
        $.ajax({
            type: "get",
            async: false,
            url :"{{env('USER_URL')}}/checkLogin",
            cache : false,
            dataType: "jsonp",
            jsonp: "checkLogin",
            success: function(json){
                console.log(json);
                if(json.isLogin == true){
                    $('.main').html('您已经登录, <a style="color:blue" href="{{env('USER_URL')}}" target="_blank">点击</a> 前往后台.')
                }else{
                    $('.login').show();
                }
            },
            error: function(e){
                alert('系统错误');
            }
        });
        var cellphoneInput = $('input[name=cellphone]');
        cellphoneInput.bind('input propertychange', function() {
            var value = $(this).val().replace("－", "");
            value = value.replace("－", "");
            var newValue = '';
            for(var i=0; i<value.length; i++){
                if(value.charAt(i) == "－") continue;
                if(i > 10) continue;
                if(i == 3 || i == 7){
                    newValue += "－";
                }
                if(isNaN(value.charAt(i))){
                    continue;
                }
                newValue += value.charAt(i);
            }
            $(this).val(newValue);
        });
        $('.login-button').click(function(){
            var cellphone = cellphoneInput.val().replace("－", "");
            cellphone = cellphone.replace("－", "");

            var password = $('input[name=password]').val();

            if(cellphone.length != 11){
                alert('请输入正确的手机号');
                return false;
            }

            if(password.length <6){
                alert('密码长度最少6位');
                return false;
            }

            $.ajax({
                type: "post",
                url :"{{env('HOME_URL')}}/login",
                data:{
                    cellphone: cellphone,
                    password: password,
                    _token: $('input[name=_token]').val()
                },
                success: function(json){
                    if(json.code == 0){
                        $.ajax({
                            type: "get",
                            async: false,
                            url :"{{env('USER_URL')}}/login",
                            cache : false,
                            dataType: "jsonp",
                            jsonp: "login",
                            data:{
                                cellphone: cellphone,
                                password: password,
                                _token: $('input[name=_token]').val()
                            },
                            success: function(json){
                                console.log(json);
                                if(json.code == 0){
                                    window.location.href = "{{env('USER_URL')}}";
                                }else{
                                    alert(json.msg);
                                }
                            },
                            error: function(e){
                                alert('系统错误1');
                            }
                        });
                    }else{
                        alert(json.msg);
                    }
                },
                error: function(e){
                    alert('系统错误2');
                }
            });
        });

    })
</script>
<div class="login">
    <p>
        <label for="login">手机号 :</label>
        <input type="text" name="cellphone" id="login" value="">
    </p>

    <p>
        <label for="password">密码 :</label>
        <input type="password" name="password" id="password" value="">
    </p>

    <p class="login-submit">
        <button type="submit" class="login-button">Login</button>
    </p>

    <p class="forgot-password">
        <a href="javascript:;" slug="reset">忘记了您的密码?</a>
    </p>
    {{csrf_field()}}
</div>