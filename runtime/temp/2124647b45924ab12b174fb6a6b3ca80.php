<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\web\moban\thinkphp\tplay-master\public/../app/admin\view\common\login.html";i:1567493159;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Tplay后台登录</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link href="/static/public/layui/css/layui.css" rel="stylesheet" />
  <link rel="stylesheet" href="/static/admin/css/admin-1.css" media="all">
  <link href="/static/admin/css/login-1.css" rel="stylesheet" />
  <link href="/static/public/font-awesome/css/font-awesome.css" rel="stylesheet" />
  </head>
<body class="layui-layout-body">
  <div id="LAY_app">
  <div class="layadmin-user-login" id="LAY-user-login" style="display: none;">

  <div class="layadmin-user-login-main">
    <div class="layadmin-user-login-box layadmin-user-login-header">
      <h2>Tplay后台管理框架</h2>
      <p>体验ThinkPHP5+Layui2的极速双飞快感</p>
    </div>
    <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
      <form class="layui-form" id="login">
        <div class="layui-form-item">
          <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-username"><i class="fa fa-user"></i></label>
          <input type="text" name="name" lay-verify="required" autocomplete="off" placeholder="用户名" class="layui-input" <?php if(!(empty($usermember) || (($usermember instanceof \think\Collection || $usermember instanceof \think\Paginator ) && $usermember->isEmpty()))): ?>value="<?php echo $usermember; ?>"<?php endif; ?>>
        </div>
        <div class="layui-form-item">
          <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"><i class="fa fa-unlock-alt"></i></label>
          <input type="password" name="password" lay-verify="required" autocomplete="off" placeholder="密码" class="layui-input">
        </div>
        <div class="layui-form-item">
          <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"><i class="fa fa-code"></i></label>
          <input type="text" name="captcha" lay-verify="required" autocomplete="off" placeholder="验证码" class="layui-input" style="width:62%;float: left;margin-right:11px;"><img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?seed='+Math.random()" height="36" id="captcha" style="margin-top: 1px" />
        </div>
        <div class="layui-form-item">
          <input type="checkbox" lay-skin="primary" title="记住账号" name="remember" value="1" <?php if(!(empty($usermember) || (($usermember instanceof \think\Collection || $usermember instanceof \think\Paginator ) && $usermember->isEmpty()))): ?>checked=""<?php endif; ?>><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>记住账号?</span><i class="layui-icon"></i></div>
        </div>
        <div class="layui-form-item">
          <button class="layui-btn layui-btn-fluid" lay-submit lay-filter="login">登 入</button>
        </div>
        <?php echo token('__token__', 'sha1'); ?>
      </form>
    </div>
  </div>
  
</div>

</div>

<script src="/static/public/layui/layui.js"></script>
<script src="/static/public/jquery/jquery.min.js"></script>
    <script>
        layui.use(['layer', 'form'], function() {
            var layer = layui.layer,
                $ = layui.jquery,
                form = layui.form;
            $(window).on('load', function() {
                form.on('submit(login)', function(data) {
                    $.ajax({
                        url:"<?php echo url('admin/common/login'); ?>",
                        data:$('#login').serialize(),
                        type:'post',
                        async: false,
                        success:function(res) {
                          //alert(res.msg);
                            layer.msg(res.msg,{offset: '50px',anim: 1});
                            if(res.code == 1) {
                                setTimeout(function() {
                                    location.href = res.url;
                                }, 1500);
                            } else {
                                $('#captcha').click();
                            }
                        }
                    })
                    return false;
                });
            });
        });
    </script>
</body>
</html>