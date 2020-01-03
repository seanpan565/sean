<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\web\phpweb\sean\public/../app/admin\view\goods\index.html";i:1577358671;s:50:"D:\web\phpweb\sean\app\admin\view\public\foot.html";i:1567493160;}*/ ?>
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
        <li class="layui-this">商品管理</li>
        <li><a href="<?php echo url('admin/goods/create'); ?>" class="a_menu">新增商品</a></li>
      </ul>
    </div>
    <table class="layui-table" lay-size="sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>商品名称</th>
          <th>缩略图</th>
          <th>所属分类</th>
          <th>价格/优惠价</th>
          <th>货号</th>
          <th>销量</th>
          <th>库存</th>
          <th>上架/推荐</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
          <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <tr>
            <td><?php echo $vo['id']; ?></td>
            <td><?php echo $vo['goods_name']; ?></td>
            <td><a href="#" class="tooltip"><img src="<?php echo $vo['goods_thumb']; ?>" width="30" height="30"></a></td>
            <td><?php echo $vo['name']; ?></td>
            <td><?php echo $vo['goods_price']; ?><?php echo $vo['goods_vip']; ?></td>
            <td><?php echo $vo['goods_number']; ?></td>
            <td><?php echo $vo['goods_sales']; ?></td>
            <td><?php echo $vo['goods_inventory']; ?></td>
            <td>
                <a href="javascript:;" title="上架" style="font-size:18px;" class="goods-putaway" data-id="<?php echo $vo['id']; ?>" data-val="<?php echo $vo['goods_putaway']; ?>"><?php if($vo['goods_putaway'] == '1'): ?><i class="fa fa-toggle-on"></i><?php else: ?><i class="fa fa-toggle-off"></i><?php endif; ?></a>
                <a href="javascript:;" title="推荐" style="font-size:18px;" class="goods-recommend" data-id="<?php echo $vo['id']; ?>" data-val="<?php echo $vo['goods_recommend']; ?>"><?php if($vo['goods_recommend'] == '1'): ?><i class="fa fa-toggle-on"></i><?php else: ?><i class="fa fa-toggle-off"></i><?php endif; ?></a>
            </td>
            <td>
                <a title="编辑" href="<?php echo url('admin/goods/edit',['id'=>$vo['id']]); ?>" style="font-size:18px;"><i class="layui-icon"></i></a>
                <a title="删除" href="javascript:;" id="<?php echo $vo['id']; ?>" class="delete" style="font-size:18px;"><i class="layui-icon"></i></a>
            </td>
          </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
    </table>
    <div style="padding:0 20px;"><?php echo $goods->render(); ?></div>
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
        $('.delete').click(function(){
          var id = $(this).attr('id');
          layer.confirm('确定要删除?', function(index) {
            $.ajax({
              url:"<?php echo url('admin/goods/delete'); ?>",
              data:{id:id},
              success:function(res) {
                layer.msg(res.msg);
                if(res.code == 1) {
                  setTimeout(function(){
                    location.href = res.url;
                  },1500)
                }
              }
            })
          })
        })
    </script>
    <script type="text/javascript">
    //是否上架ajax修改
    $('.goods-putaway').click(function(){
      var val = $(this).attr('data-val');
      var id = $(this).attr('data-id');
      var i = $(this).find('i');
      var the = $(this);
      if(val == 1){
        var goods_putaway = 0;
      } else {
        var goods_putaway = 1;
      }
      $.ajax({
        type:"post",
        url:"<?php echo url('admin/goods/goods_putaway'); ?>",
        data:{goods_putaway:goods_putaway,id:id},
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

    //是否推荐ajax修改
    $('.goods-recommend').click(function(){
      var val = $(this).attr('data-val');
      var id = $(this).attr('data-id');
      var i = $(this).find('i');
      var the = $(this);
      if(val == 1){
        var goods_recommend = 0;
      } else {
        var goods_recommend = 1;
      }
      $.ajax({
        type:"post",
        url:"<?php echo url('admin/goods/goods_recommend'); ?>",
        data:{goods_recommend:goods_recommend,id:id},
        success:function(res){
          if(res.code == 1) {
            recommend();
          } else {
            layer.msg(res.msg);
          }
        }
      });
      function recommend(){
        if(val == 1){
          i.attr("class","fa fa-toggle-off");
          the.attr('data-val',0);
        } else {
          i.attr("class","fa fa-toggle-on");
          the.attr('data-val',1);
        }
      }
    });
    </script>
  </div>
</body>
</html>
