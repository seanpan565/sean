<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"D:\web\phpweb\sean\public/../app/admin\view\order\refundlist.html";i:1577785949;s:50:"D:\web\phpweb\sean\app\admin\view\public\foot.html";i:1567493160;}*/ ?>
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

  <script src="/static/public/layui/layui.js"></script>
  <script src="/static/public/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/static/index/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/static/index/css/bootstrap.min.css" type="text/css" media="all">

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

    <!-- 模态框开始 -->
    <div class="modal fade modleDailog" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" class="layui-form">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4>拒绝描述：</h4>
                        <textarea name="reply_content" placeholder="请输入拒绝原因" class="layui-textarea reply_content" rows="5" cols="150"></textarea>
                    </div>
                    <input type="hidden" name="reply_id" value="" id="reply_id">
                    <!-- <div class="modal-body">
                        <div class="layui-form-item">
                            <label class="layui-form-label" style="width:100px;">拒绝原因</label>
                            <div class="layui-input-inline">
                                <select name="return_seller_cause" lay-filter="aihao">
                                    <option value="1">现摘蔬菜</option>
                                    <option value="2">鲜榨果汁</option>
                                    <option value="3">新鲜水果</option>
                                    <option value="4">美味果脯</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <div class="modal-footer">
                        <input type="button" data-dismiss="modal" value="关闭" class="btn btn-default">
                        <input type="button" lay-filter="add" lay-submit="" value="提交原因" class="btn btn-primary layui-btn" onclick="refuse()">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- 模态框结束 -->

  <div class="tplay-body-div">
    <div class="layui-tab">
      <ul class="layui-tab-title">
        <li class="layui-this">申请退款列表</li>
      </ul>
    </div>
    <table class="layui-table" lay-size="sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>商品名称</th>
          <th>缩略图</th>
          <th>用户名称</th>
          <th>退款编号</th>
          <th>退款状态</th>
          <th>退款类型</th>
          <th>申请时间</th>
          <th>退款金额</th>
          <th>退款描述</th>
          <th>实收款</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
          <?php if(is_array($refundlist) || $refundlist instanceof \think\Collection || $refundlist instanceof \think\Paginator): $i = 0; $__LIST__ = $refundlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <tr>
            <td><?php echo $vo['return_id']; ?></td>
            <td><?php echo $vo['goods_name']; ?></td>
            <td><img src="<?php echo $vo['goods_thumb']; ?>" width="30" height="30"></td>
            <td><?php echo $vo['user_name']; ?></td>
            <td><?php echo $vo['return_sn']; ?></td>
            <td>
                <?php switch($vo['return_status']): case "-2": ?>全部<?php break; case "-1": ?>已取消<?php break; case "0": ?>申请退款中<?php break; case "1": ?>退款成功<?php break; case "2": ?>拒绝申请<?php break; default: endswitch; ?>
            </td>
            <td>
                <?php switch($vo['return_type']): case "1": ?>仅退款<?php break; case "2": ?>退货退款<?php break; default: endswitch; ?>
            </td>
            <td><?php echo date("Y-m-d H:i:s",$vo['return_time']); ?></td>
            <td><?php echo $vo['return_money']; ?></td>
            <td><?php echo $vo['return_desc']; ?></td>
            <td><?php echo $vo['return_money']; ?></td>
            <td>
                <span title="确认退款" id="<?php echo $vo['return_id']; ?>" class="dele" style="font-size:18px;"><i class="layui-icon-ok"></i></span>
                <span title="拒绝退款" data-toggle="modal" data-target="#myModal" data-target=".modleDailog" onclick="values('<?php echo $vo['return_id']; ?>')" style="font-size:18px;"><i class="layui-icon"></i></span>
                <span title="取消申请" id="<?php echo $vo['return_id']; ?>" onclick="cancel(this,<?php echo $vo['return_id']; ?>)" style="font-size:18px;"><i class="layui-icon"></i></span>
                <span title="删除申请" id="<?php echo $vo['return_id']; ?>" onclick="del(this,<?php echo $vo['return_id']; ?>)" style="font-size:18px;"><i class="layui-icon"></i></span>
            </td>
          </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
    </table>
    <div style="padding:0 20px;"><?php echo $refundlist->render(); ?></div>
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
        //layer弹窗组件
    	layui.use(['form', 'layer'],
    	function() {
    		$ = layui.jquery;
    		var form = layui.form,
    		layer = layui.layer;
    	});

        //模态框传值
        $('#myModal').modal("hide");
        function values(ID){
        	$('#reply_id').val(ID);
        }


        //取消申请
        function cancel(obj,id){
            layer.confirm('确定要取消申请?', function(index) {
                $.ajax({
                    type:"post",
                    dataType:"json",
                    data:{id:id},
                    url:"<?php echo url('order/refund_cancel'); ?>",
                    success:function(data){
                        if (data.status == 1) {
                            layer.alert(data.msg, {
                                title: '提示框',
                                icon: 1,
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
            return false;
        }

        //删除申请
        function del(obj,id){
            layer.confirm('确定要删除申请?', function(index) {
                $.ajax({
                    type:"post",
                    dataType:"json",
                    data:{id:id},
                    url:"<?php echo url('order/refund_del'); ?>",
                    success:function(data){
                        if (data.status == 1) {
                            layer.alert(data.msg, {
                                title: '提示框',
                                icon: 1,
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
            return false;
        }

        //拒绝退款
        function refuse(){
            //获取表单数据
            var reply_content = $(".reply_content").val();
            var reply_id = $("#reply_id").val();
            $.ajax({
                type:"post",
                dataType:"json",
                data:{return_seller_desc:reply_content,reply_id:reply_id},
                url:"<?php echo url('order/refund_refuse'); ?>",
                success:function(data){
                    if (data.status == 1) {
                        layer.alert(data.msg, {
                            title: '提示框',
                            icon: 1,
                        });
                    } else {
                        layer.alert(data.msg, {
                            title: '提示框',
                            icon: 0,
                        });
                    }
                }
            },'json');
            return false;
        }



    </script>
  </div>
</body>
</html>
