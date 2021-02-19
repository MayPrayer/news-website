<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <!-- 样 式 文 件 -->
    <link rel="stylesheet" href="component/pear/css/pear.css" />
    <link rel="stylesheet" href="admin/css/other/login.css" />
</head>
<!-- 代 码 结 构 -->
<body background="admin/images/background2.svg" style="background-size: cover;">
<form class="layui-form" action="javascript:void(0);">
    <div class="layui-form-item">
        <img class="logo" src="admin/images/logo.png" />
        <div class="title">Pear Admin</div>
        <div class="desc">
            明 湖 区 最 具 影 响 力 的 设 计 规 范 之 一
        </div>
    </div>
    <div class="layui-form-item">
        <input placeholder="账 户 :  " hover class="layui-input"  name="username"/>
    </div>
    <div class="layui-form-item">
        <input placeholder="密 码 :  " hover class="layui-input" name="password" />
    </div>
    <div class="layui-form-item">
        <input placeholder="验证码 : "  hover class="code layui-input layui-input-inline" name="vifcode" />
        <img src="admin/images/captcha.gif" class="codeImage" />
    </div>
    <div class="layui-form-item">
        <input type="checkbox" name="" title="记住密码" lay-skin="primary" checked>
    </div>
    <div class="layui-form-item">
        <button type="button" class="pear-btn pear-btn-success login" lay-submit lay-filter="login">
            登 入
        </button>
    </div>
</form>
<!-- 资 源 引 入 -->
<script src="component/layui/layui.js"></script>
<script src="component/pear/pear.js"></script>
<script>
    layui.use(['form', 'element', 'jquery', 'button', 'popup'], function() {
        var form = layui.form;
        var element = layui.element;
        var button = layui.button;
        var popup = layui.popup;
        var $ = layui.jquery;

        // 登 录 提 交
        form.on('submit(login)', function() {
            var username =  $("[name='username']");.val();
            var password = $("[name='password']");.val();
            alert(password);
            button.load({
                elem: '.login',
                time: 1500,
                done: function() {
                    popup.success("登录成功", function() {
                        location.href = "index"
                    });
                }
            })



            return false;
        });
    })
</script>
</body>
</html>
