;!function(e){
    layui.use(['form', 'element', 'jquery', 'button', 'popup'], function() {
        var form = layui.form;
        var element = layui.element;
        var button = layui.button;
        var popup = layui.popup;
        var $ = layui.jquery;

        // 登 录 提 交
        form.on('submit(login)', function() {
            var username =  $("#username").val();
            var password = $("#password").val();
            $.ajax({
                url:"/vifuser",
                data:{'username':username,'password':password},
                type:"post",
                dataType:"json",
                headers : {'Content-Type' : 'application/json;charset=utf-8'}, //接口json格式
                success:function(data){
                    console.log(data);
                    layer.alert(JSON.stringify(data), {
                        title: data
                    });
                    location.href = "/index"

                },
                error:function(data){
                    layer.alert(JSON.stringify(data), {
                        title: data
                    });
                }
            });


        })

    })
}(window);
