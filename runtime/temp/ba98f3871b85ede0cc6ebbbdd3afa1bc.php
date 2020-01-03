<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\web\phpweb\sean\public/../app/admin\view\order\index.html";i:1577787027;s:50:"D:\web\phpweb\sean\app\admin\view\public\foot.html";i:1567493160;}*/ ?>
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
  <style type="text/css">

/* tooltip */
#tooltip{
  position:absolute;
  border:1px solid #ccc;
  background:#333;
  padding:2px;
  display:none;
  color:#fff;
}
</style>
</head>
<body style="padding:10px;">
  <div class="tplay-body-div">
    <div class="layui-tab">
      <ul class="layui-tab-title">
        <li class="layui-this">订单列表</li>
      </ul>
    </div>
    <table class="layui-table" lay-size="sm">
      <colgroup>
        <col width="50">
        <col width="300">
        <col width="50">
        <col width="100">
        <col width="100">
        <col width="150">
        <col width="100">
        <col width="150">
        <col width="50">
        <col width="50">
        <col width="100">
      </colgroup>
      <thead>
        <tr>
          <th>ID</th>
          <th>订单编号</th>
          <th>用户账户</th>
          <th>支付方式</th>
          <th>订单总价</th>
          <th>虎皮椒订单号</th>
          <th>新增时间</th>
          <th>订单状态</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
          <?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <tr>
            <td><?php echo $vo['main_order_id']; ?></td>
            <td><?php echo $vo['order_sn']; ?></td>
            <td><?php echo $vo['user_name']; ?></td>
            <td>
                <?php if($vo['pay_type'] == '1'): ?>
                    支付宝
                <?php else: ?>
                    微信
                <?php endif; ?>
            </td>
            <td>￥<?php echo $vo['order_price']; ?></td>
            <td><?php echo $vo['trade_no']; ?></td>
            <td><?php echo date("Y-m-d H:i:s",$vo['create_time']); ?></td>
            <td>
                <span class="sub-title" <?php if($vo['order_status'] == 0): ?>style="display:block;" <?php else: ?> style="display:none;"<?php endif; ?>>未付款</span>
                <span class="sub-title" <?php if($vo['order_status'] == 1): ?>style="display:block;" <?php else: ?> style="display:none;"<?php endif; ?>>待发货</span>
                <span class="sub-title" <?php if($vo['order_status'] == 2): ?>style="display:block;" <?php else: ?> style="display:none;"<?php endif; ?>>已发货</span>
                <span class="sub-title" <?php if($vo['order_status'] == 3): ?>style="display:block;" <?php else: ?> style="display:none;"<?php endif; ?>>待评价</span>
                <span class="sub-title" <?php if($vo['order_status'] == 4): ?>style="display:block;" <?php else: ?> style="display:none;"<?php endif; ?>>已评价</span>
                <span class="sub-title" <?php if($vo['order_status'] == 5): ?>style="display:block;" <?php else: ?> style="display:none;"<?php endif; ?>>已取消</span>
                <span class="sub-title" <?php if($vo['order_status'] == 6): ?>style="display:block;" <?php else: ?> style="display:none;"<?php endif; ?>>交易关闭</span>
                <span class="sub-title" <?php if($vo['order_status'] == 7): ?>style="display:block;" <?php else: ?> style="display:none;"<?php endif; ?>>退货中的订单</span>
                <span class="sub-title" <?php if($vo['order_status'] == 8): ?>style="display:block;" <?php else: ?> style="display:none;"<?php endif; ?>>付款超时</span>
                <input type="hidden" value="<?php echo $vo['order_status']; ?>">
            </td>
            <td style="min-width:150px;">
                <button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><a title="查看订单" href="<?php echo url('admin/order/datails',['order_sn'=>$vo['order_sn']]); ?>">查看订单</a></button>
                <button type="button" class="layui-btn layui-btn-primary layui-btn-sm"  <?php if($vo['order_status'] == 0): ?>style="display:block;float:right;" <?php else: ?> style="display:none;float:right;"<?php endif; ?>>
                    <a title="查看订单" href="<?php echo url('admin/order/edit',['order_sn'=>$vo['order_sn']]); ?>">订单未付</a>
                </button>
                <button type="button" class="layui-btn layui-btn-warm layui-btn-sm"  <?php if($vo['order_status'] == 1): ?>style="display:block;float:right;" <?php else: ?> style="display:none;float:right;"<?php endif; ?>>
                    <a title="订单发货" href="<?php echo url('admin/order/addres',['order_sn'=>$vo['order_sn']]); ?>">订单发货</a>
                </button>
                <button type="button" class="layui-btn layui-btn-sm freight"  <?php if($vo['order_status'] == 2): ?>style="display:block;float:right;" <?php else: ?> style="display:none;float:right;"<?php endif; ?>>
                    查看物流
                </button>
                <button type="button" class="layui-btn layui-btn-warm layui-btn-sm"  <?php if($vo['order_status'] == 3): ?>style="display:block;float:right;" <?php else: ?> style="display:none;float:right;"<?php endif; ?>>
                    待评价
                </button>
                <button type="button" class="layui-btn layui-btn-sm"  <?php if($vo['order_status'] == 4): ?>style="display:block;float:right;" <?php else: ?> style="display:none;float:right;"<?php endif; ?>>
                    <a title="查看评价" href="<?php echo url('admin/order/edit',['order_sn'=>$vo['order_sn']]); ?>">查看评价</a>
                </button>
                <button type="button" class="layui-btn layui-btn-sm layui-btn-danger" onclick="order_del(this,'<?php echo $vo['order_sn']; ?>')" <?php if($vo['order_status'] == 5): ?>style="display:block;float:right;" <?php else: ?> style="display:none;float:right;"<?php endif; ?>>
                    删除订单
                </button>
                <button type="button" class="layui-btn layui-btn-sm layui-btn-danger"  <?php if($vo['order_status'] == 6): ?>style="display:block;float:right;" <?php else: ?> style="display:none;float:right;"<?php endif; ?>>
                    <a title="删除订单" href="<?php echo url('admin/order/edit',['order_sn'=>$vo['order_sn']]); ?>">删除订单</a>
                </button>
                <button type="button" class="layui-btn layui-btn-normal layui-btn-sm"  <?php if($vo['order_status'] == 7): ?>style="display:block;float:right;" <?php else: ?> style="display:none;float:right;"<?php endif; ?>>
                    <a title="查看详情" href="<?php echo url('admin/order/edit',['order_sn'=>$vo['order_sn']]); ?>">查看详情</a>
                </button>
                <button type="button" class="layui-btn layui-btn-sm layui-btn-danger" onclick="order_del(this,'<?php echo $vo['order_sn']; ?>')" <?php if($vo['order_status'] == 8): ?>style="display:block;float:right;" <?php else: ?> style="display:none;float:right;"<?php endif; ?>>
                    删除订单
                    <!-- <a title="删除订单" href="<?php echo url('admin/order/edit',['order_sn'=>$vo['order_sn']]); ?>">删除订单</a> -->
                </button>
            </td>
          </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
    </table>
    <div style="padding:0 20px;"><?php echo $order->render(); ?></div>
        <script src="/static/public/layui/layui.js" charset="utf-8"></script>
    <script src="/static/public/jquery/jquery.min.js"></script>
    <script>
            var message;
            layui.config({
                base: '/static/admin/js/',
                version: '1.0.1'
            }).use(['app', 'message'], function() {
                var app = layui.app,
                    $ = layui.jquery,
                    layer = layui.layer;
                //将message设置为全局以便子页面调用
                message = layui.message;
                //主入口
                app.set({
                    type: 'iframe'
                }).init();
            });
        </script> 
    <script type="text/javascript">
    $(function(){
      var x = 10;
      var y = 20;
      $(".tooltip").mouseover(function(e){ 
        var tooltip = "<div id='tooltip'><img src='"+ this.href +"' alt='产品预览图' height='200'/>"+"<\/div>"; //创建 div 元素
        $("body").append(tooltip);  //把它追加到文档中             
        $("#tooltip")
          .css({
            "top": (e.pageY+y) + "px",
            "left":  (e.pageX+x)  + "px"
          }).show("fast");    //设置x坐标和y坐标，并且显示
        }).mouseout(function(){  
        $("#tooltip").remove();  //移除 
        }).mousemove(function(e){
        $("#tooltip")
          .css({
            "top": (e.pageY+y) + "px",
            "left":  (e.pageX+x)  + "px"
          });
      });
    })
    </script>
    <script type="text/javascript">
    $('.a_menu').click(function(){
      var url = $(this).attr('href');
      var id = $(this).attr('id');
      var a = true;
      if(id) {
        $.ajax({
          url:url
          ,async:false
          ,data:{id:id}
          ,success:function(res){
            if(res.code == 0) {
              layer.msg(res.msg);
              a = false;
            }
          }
        })
      } else {
        $.ajax({
          url:url
          ,async:false
          ,success:function(res){
            if(res.code == 0) {
              layer.msg(res.msg);
              a = false;
            }
          }
        })
      }
      return a;
    })
    </script>
    <script>
    layui.use('laydate', function(){
      var laydate = layui.laydate;
      
      //常规用法
      laydate.render({
        elem: '#create_time'
      });
    });
    </script>

    <script type="text/javascript">
        //删除订单
        function order_del(obj,id){
            layer.confirm('确认要删除吗？',function(index){
                //发异步删除数据
                $.ajax({
                    type:"post",
                    dataType:"json",
                    data:{order_sn:id},
                    url:"<?php echo url('admin/order/order_del'); ?>",
                    success:function(data){
                        if (data.status == 1) {
                            $(obj).parents("tr").remove();
                            layer.alert(data.msg, {
                                title: '提示框',
                                icon: 0,
                            });
                        } else {
                            layer.alert(data.msg, {
                                title: '提示框',
                                icon: 0,
                            });
                        }
                    }
                },'json');
            });
        }

        //查看物流
      //   $('.freight').click(function(){
      //     var id = $(this).attr('id');
      //     $.ajax({
      //         url:"<?php echo url('admin/order/freight'); ?>",
      //         type:'post'
      //         data:{id:id},
      //         success:function(res) {
      //             layer.msg(res.msg);
      //             if(res.code == 1) {
      //                 layer.msg(res.msg);
      //             } else {
      //                 layer.msg(res.msg);
      //             }
      //         }
      //     });
      // });
    </script>

  </div>
</body>
</html>
