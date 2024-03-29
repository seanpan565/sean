<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\web\phpweb\sean\public/../app/admin\view\order\comment_reply.html";i:1577443326;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/static/public/layui/css/layui.css"  media="all">
  <link rel="stylesheet" href="/static/public/font-awesome/css/font-awesome.min.css" media="all" />
  <link rel="stylesheet" href="/static/admin/css/admin.css"  media="all">
</head>
<body style="padding:10px;">
  <div class="tplay-body-div">
    <div style="margin-top: 20px;">
    </div>
    <form class="layui-form" id="admin">

      <div class="layui-form-item">
        <label class="layui-form-label">短信宝账号</label>
        <div class="layui-input-inline">
          <input name="username" type="text" lay-verify="pass" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">输入短信宝账号</div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">短信宝密码</label>
        <div class="layui-input-inline">
          <input name="password" type="text" lay-verify="pass" autocomplete="off" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">输入短信宝密码</div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">短信宝测试</label>
        <div class="layui-input-inline">
          <input type="text" name="template" lay-verify="pass" autocomplete="off" class="layui-input" value="" id="user_phone">
        </div>
        <div class="layui-form-mid layui-word-aux">短信宝短信测试手机号</div>
      </div>

      <div class="layui-form-item">
        <div class="layui-input-block">
          <button class="layui-btn" lay-submit lay-filter="admin">立即提交</button>
          <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
      </div>
    </form>

    <div class="layui-form-item">
      <div class="layui-input-block">
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
              form.on('submit(admin)', function(data) {
                  $.ajax({
                      url:"<?php echo url('admin/smspo/save'); ?>",
                      data:$('#admin').serialize(),
                      type:'post',
                      async: false,
                      success:function(res) {
                          if(res.code == 1) {
                              layer.alert(res.msg, function(index){
                                location.href = res.url;
                              })
                          } else {
                              layer.msg(res.msg);
                          }
                      }
                  })
                  return false;
              });
          });
      });
    </script>

  </div>
</body>
</html>
