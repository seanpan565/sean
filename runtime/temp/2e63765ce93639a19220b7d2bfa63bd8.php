<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\web\phpweb\sean\public/../app/admin\view\hupi\index.html";i:1576753870;}*/ ?>
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
        <label class="layui-form-label">虎皮椒账号</label>
        <div class="layui-input-inline">
          <input name="appid" type="text" lay-verify="pass" autocomplete="off" class="layui-input" value="<?php echo $hupi['appid']; ?>">
        </div>
        <div class="layui-form-mid layui-word-aux">输入虎皮椒账号</div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">虎皮椒密匙</label>
        <div class="layui-input-inline">
          <input name="appsecret" type="text" lay-verify="pass" autocomplete="off" autocomplete="off" class="layui-input" value="<?php echo $hupi['appsecret']; ?>">
        </div>
        <div class="layui-form-mid layui-word-aux">输入虎皮椒密匙</div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">虎皮椒标题</label>
        <div class="layui-input-inline">
          <input type="text" name="title" lay-verify="pass" autocomplete="off" class="layui-input" value="<?php echo $hupi['title']; ?>">
        </div>
        <div class="layui-form-mid layui-word-aux">虎皮椒标题</div>
      </div>
      <div class="layui-form-item">
        <label class="layui-form-label">自定义ID</label>
        <div class="layui-input-inline">
          <input type="text" name="my_plugin_id" lay-verify="pass" autocomplete="off" class="layui-input" value="<?php echo $hupi['my_plugin_id']; ?>">
        </div>
        <div class="layui-form-mid layui-word-aux">自定义ID</div>
      </div>
      <!-- <div class="layui-form-item">
            <label class="layui-form-label">支付方式</label>
            <div class="layui-input-block">
              <input type="radio" name="pay_type" value="1" title="支付宝" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon layui-anim-scaleSpring"></i><div>是</div></div>
              <input type="radio" name="pay_type" value="2" title="微信"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>否</div></div>
            </div>
      </div> -->
      <div class="layui-form-item">
        <div class="layui-input-block">
          <button class="layui-btn" lay-submit lay-filter="admin">立即提交</button>
          <button type="reset" class="layui-btn layui-btn-primary">重置</button>
          <!-- <button class="layui-btn layui-btn-normal" id="smsto">发送测试</button> -->
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
                      url:"<?php echo url('admin/hupi/save'); ?>",
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
