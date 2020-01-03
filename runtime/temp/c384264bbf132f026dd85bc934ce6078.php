<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"D:\web\phpweb\sean\public/../app/admin\view\order\order_datails.html";i:1576839720;s:50:"D:\web\phpweb\sean\app\admin\view\public\foot.html";i:1567493160;}*/ ?>
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
        <li class="layui-this">订单详情</li>
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
        </tr>
      </thead>
      <tbody>

          <tr>
            <td>{vo.id}</td>
            <td>{vo.goods_name}</td>
            <td><a href="#" class="tooltip"><img src="{vo.goods_thumb}" width="30" height="30"></a></td>
            <td>{vo.name}</td>
            <td>{vo.goods_price}</td>
            <td>{vo.goods_number}</td>
            <td>{vo.goods_sales}</td>
            <td>{vo.goods_inventory}</td>
          </tr>

      </tbody>
    </table>
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
  </div>

  <script type="text/javascript">
      $('.delete').click(function(){
          var id = $(this).attr('id');
          layer.confirm('确定要删除?', function(index) {
              $.ajax({
                  url:"<?php echo url('admin/'); ?>",
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

</body>
</html>
