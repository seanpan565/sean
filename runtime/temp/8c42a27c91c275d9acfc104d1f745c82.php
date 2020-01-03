<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\web\phpweb\sean\public/../app/admin\view\order\addres.html";i:1576835113;}*/ ?>
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
        <label class="layui-form-label">订单编号</label>
        <div class="layui-form-mid layui-word-aux"><?php echo $addres['order_sn']; ?></div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">收货人</label>
        <div class="layui-form-mid layui-word-aux"><?php echo $addres['address_name']; ?></div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">手机号码</label>
        <div class="layui-form-mid layui-word-aux"><?php echo $addres['address_phone']; ?></div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">收货地址</label>
        <div class="layui-form-mid layui-word-aux"><?php echo $addres['address_site']; ?></div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">订单留言</label>
        <?php if($addres['order_msg'] == ''): ?>
            <div class="layui-form-mid layui-word-aux">暂无留言</div>
        <?php else: ?>
            <div class="layui-form-mid layui-word-aux"><?php echo $addres['order_msg']; ?></div>
        <?php endif; ?>
      </div>

        <div class="layui-form-item">
            <label class="layui-form-label">快递公司</label>
            <div class="layui-input-inline">
                <select name="shipping_id" lay-filter="aihao">
                    <?php if(is_array($delivery_data) || $delivery_data instanceof \think\Collection || $delivery_data instanceof \think\Paginator): $i = 0; $__LIST__ = $delivery_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['delivery_id']; ?>"><?php echo $vo['delivery_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>

      <div class="layui-form-item">
        <label class="layui-form-label">快递单号</label>
        <div class="layui-input-inline">
          <input type="text" name="shipping_sn" lay-verify="pass" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">请输入快递单号</div>
      </div>

      <input type="hidden" name="order_sn" value="<?php echo $addres['order_sn']; ?>">
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
                      url:"<?php echo url('admin/order/delivery'); ?>",
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
