<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\web\phpweb\sean\public/../app/admin\view\order\commentlist.html";i:1577675532;s:50:"D:\web\phpweb\sean\app\admin\view\public\foot.html";i:1567493160;}*/ ?>
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
                        <h4>回复评价：</h4>
                        <textarea name="reply_content" placeholder="请输入回复评价内容" class="layui-textarea reply_content" rows="5" cols="150"></textarea>
                    </div>
                    <input type="hidden" name="reply_id" value="" id="reply_id">
                    <div class="modal-footer">
                        <input type="button" data-dismiss="modal" value="关闭" class="btn btn-default">
                        <input type="button" lay-filter="add" lay-submit="" value="提交回复" class="btn btn-primary layui-btn reply-comm" onclick="reply()">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- 模态框结束 -->

  <div class="tplay-body-div">
    <div class="layui-tab">
      <ul class="layui-tab-title">
        <li class="layui-this">商品评价列表</li>
      </ul>
    </div>
    <table class="layui-table" lay-size="sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>商品名称</th>
          <th>缩略图</th>
          <th>用户名称</th>
          <th>订单号</th>
          <th>评论商品星级</th>
          <th>评论内容</th>
          <th>评论时间</th>
          <th>评论状态</th>
          <th>评论回复</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
          <?php if(is_array($commentlist) || $commentlist instanceof \think\Collection || $commentlist instanceof \think\Paginator): $i = 0; $__LIST__ = $commentlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <tr>
            <td><?php echo $vo['id']; ?></td>
            <td><?php echo $vo['goods_name']; ?></td>
            <td><a href="#" class="tooltip"><img src="<?php echo $vo['goods_thumb']; ?>" width="30" height="30"></a></td>
            <td><?php echo $vo['user_name']; ?></td>
            <td><?php echo $vo['order_sn']; ?></td>
            <td><?php echo $vo['comment_grade']; ?>星</td>
            <td><?php echo $vo['goods_comment']; ?></td>
            <td><?php echo date("Y-m-d H:i:s",$vo['comment_create_time']); ?></td>
            <td>
                <span title="显示" style="font-size:18px;" class="comment_status" data-id="<?php echo $vo['id']; ?>" data-val="<?php echo $vo['comment_status']; ?>"><?php if($vo['comment_status'] == '1'): ?><i class="fa fa-toggle-on"></i><?php else: ?><i class="fa fa-toggle-off"></i><?php endif; ?></span>
            </td>
            <td>
                <?php echo $vo['reply_content']; ?>
            </td>
            <td>
                <span title="回复" data-toggle="modal" data-target="#myModal" data-target=".modleDailog" onclick="values('<?php echo $vo['id']; ?>')" style="font-size:18px;"><i class="layui-icon"></i></span>
                <span title="删除" id="<?php echo $vo['id']; ?>" class="delete" onclick="del(this,<?php echo $vo['id']; ?>)" style="font-size:18px;"><i class="layui-icon"></i></span>
            </td>
          </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
    </table>
    <div style="padding:0 20px;"><?php echo $commentlist->render(); ?></div>
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
        //模态框传值
        $('#myModal').modal("hide");
        function values(ID){
        	$('#reply_id').val(ID);
        }

        //删除评价
        // $('.delete').click(function(){
        //     var id = $(this).attr('id');
        //     layer.confirm('确定要删除?', function(index) {
        //         $.ajax({
        //             url:"<?php echo url('admin/order/comment_del'); ?>",
        //             data:{id:id},
        //             success:function(res) {
        //                 layer.msg(res.msg);
        //                 if(res.code == 1) {
        //                     setTimeout(function(){
        //                     location.href = res.url;
        //                 },1500);
        //                 }
        //             }
        //         });
        //     });
        // });

        //删除评价
        // function del(obj,id){
        //     layer.confirm('确定要删除评价?', function(index) {
        //
        //     });
        // }
        function del(obj,id){
            layer.confirm('确定要删除评价?', function(index) {
                $.ajax({
                    type:"post",
                    dataType:"json",
                    data:{id:id},
                    url:"<?php echo url('admin/order/comment_del'); ?>",
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


        //修改评价状态
        $('.comment_status').click(function(){
            var val = $(this).attr('data-val');
            var id = $(this).attr('data-id');
            var i = $(this).find('i');
            var the = $(this);
            if(val == 1){
                var comment_status = 0;
            } else {
                var comment_status = 1;
            }
            $.ajax({
                type:"post",
                url:"<?php echo url('admin/order/comment_status'); ?>",
                data:{comment_status:comment_status,id:id},
                success:function(res){
                    if(res.code == 1) {
                        putaway();
                    } else {
                        layer.msg(res.msg);
                    }
                }
            });

            function putaway(){
                if(val == 1){
                    i.attr("class","fa fa-toggle-off");
                    the.attr('data-val',0);
                } else {
                    i.attr("class","fa fa-toggle-on");
                    the.attr('data-val',1);
                }
            }
        });


        function reply(){
            //获取表单数据
            var reply_content = $(".reply_content").val();
            var reply_id = $("#reply_id").val();
            $.ajax({
                type:"post",
                dataType:"json",
                data:{reply_content:reply_content,reply_id:reply_id},
                url:"<?php echo url('order/comment_reply'); ?>",
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
