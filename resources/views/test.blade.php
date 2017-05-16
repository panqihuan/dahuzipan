<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('js/general/jquery-2.2.4.min.js')}}"></script>

    <script>
        function GetJsonData() {
            var json = {
                "classid": 2,
                "name": $("#tb_name").val(),
                "zlclass": "测试类型1,测试类型2,测试类型3",
                "pname": $("#tb_contact_people").val(),
                "tel": $("#tb_contact_phone").val()
            };
            return json;
        }

        $.ajax({
            type: "POST",
            url: "http://www.haima-pay.com/payment/gateway",
            contentType: "application/json; charset=utf-8",
            data: JSON.stringify(GetJsonData()),
            dataType: "json",
            success: function (message) {
                if (message > 0) {
                    alert("请求已提交！我们会尽快与您取得联系");
                }
            },
            error: function (message) {
                $("#request-process-patent").html("提交数据失败！");
            }
        });
    </script>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Laravel 5</div>
    </div>
</div>
</body>
</html>
