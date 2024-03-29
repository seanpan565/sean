<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\web\phpweb\sean\public/../app/admin\view\article\publish.html";i:1576836563;}*/ ?>
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
    <div class="layui-tab">
      <ul class="layui-tab-title">
        <li><a href="<?php echo url('admin/article/index'); ?>" class="a_menu">文章管理</a></li>
        <li class="layui-this">新增文章</li>
      </ul>
    </div>
    <div style="margin-top: 20px;"></div>
    <form class="layui-form" id="admin">

      <div class="layui-form-item">
        <label class="layui-form-label">标题</label>
        <div class="layui-input-block" style="max-width:600px;">
          <input name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" type="text" <?php if(!(empty($article['title']) || (($article['title'] instanceof \think\Collection || $article['title'] instanceof \think\Paginator ) && $article['title']->isEmpty()))): ?>value="<?php echo $article['title']; ?>"<?php endif; ?>>
        </div>
      </div>


      <div class="layui-form-item">
        <label class="layui-form-label">标签</label>
        <div class="layui-input-block" style="max-width:600px;">
          <input name="tag" autocomplete="off" placeholder="标签之间用,隔开" class="layui-input" type="text" <?php if(!(empty($article['tag']) || (($article['tag'] instanceof \think\Collection || $article['tag'] instanceof \think\Paginator ) && $article['tag']->isEmpty()))): ?>value="<?php echo $article['tag']; ?>"<?php endif; ?>>
        </div>
      </div>

      <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">描述</label>
        <div class="layui-input-block" style="max-width:600px;">
          <textarea placeholder="请输入内容" class="layui-textarea" name="description"><?php if(!(empty($article['description']) || (($article['description'] instanceof \think\Collection || $article['description'] instanceof \think\Paginator ) && $article['description']->isEmpty()))): ?><?php echo $article['description']; endif; ?></textarea>
        </div>
      </div>


      <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">内容</label>
        <div class="layui-input-block" style="max-width:1000px;">
          <textarea placeholder="请输入内容" class="layui-textarea" name="content" id="container" style="border:0;padding:0"><?php if(!(empty($article['content']) || (($article['content'] instanceof \think\Collection || $article['content'] instanceof \think\Paginator ) && $article['content']->isEmpty()))): ?><?php echo $article['content']; endif; ?></textarea>
        </div>
      </div>


      <div class="layui-form-item">
        <label class="layui-form-label">分类</label>
        <div class="layui-input-block" style="max-width:600px;">
          <select name="article_cate_id" lay-filter="aihao">
            <option value="">请选择分类</option>
            <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $vo['id']; ?>" <?php if(!(empty($article['article_cate_id']) || (($article['article_cate_id'] instanceof \think\Collection || $article['article_cate_id'] instanceof \think\Paginator ) && $article['article_cate_id']->isEmpty()))): if($article['article_cate_id'] == $vo['id']): ?> selected=""<?php endif; endif; ?>><?php echo $vo['str']; ?><?php echo $vo['name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
        </div>
      </div>


      <div class="layui-upload" id="upload-thumb">
        <label class="layui-form-label">缩略图</label>
        <button type="button" class="layui-btn" id="thumb">上传图片</button>
        <div class="layui-upload-list">
          <label class="layui-form-label"></label>
          <img class="layui-upload-img" id="demo1" width="150" height="150" <?php if(!(empty($article['thumb']) || (($article['thumb'] instanceof \think\Collection || $article['thumb'] instanceof \think\Paginator ) && $article['thumb']->isEmpty()))): ?>src="<?php echo geturl($article['thumb']); ?>"<?php endif; ?>><?php if(!(empty($article['thumb']) || (($article['thumb'] instanceof \think\Collection || $article['thumb'] instanceof \think\Paginator ) && $article['thumb']->isEmpty()))): ?><input type="hidden" name="thumb" value="<?php echo $article['thumb']; ?>"><?php endif; ?>
          <p id="demoText"></p>
        </div>
      </div>
      <?php if(!(empty($article) || (($article instanceof \think\Collection || $article instanceof \think\Paginator ) && $article->isEmpty()))): ?>
      <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
      <?php endif; ?>
      <div class="layui-form-item">
        <div class="layui-input-block">
          <button class="layui-btn" lay-submit lay-filter="admin">立即提交</button>
          <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
      </div>

    </form>


    <script src="/static/public/layui/layui.js"></script>
    <script src="/static/public/jquery/jquery.min.js"></script>

    <script>
    layui.use('upload', function(){
      var upload = layui.upload;
      //执行实例
      var uploadInst = upload.render({
        elem: '#thumb' //绑定元素
        ,url: "<?php echo url('common/upload'); ?>" //上传接口
        ,data:{use:'article_thumb'}
        ,done: function(res){
          //上传完毕回调
          if(res.code == 2) {
            $('#demo1').attr('src',res.src);
            $('#upload-thumb').append('<input type="hidden" name="thumb" value="'+ res.id +'">');
          } else {
            layer.msg(res.msg);
          }
        }
        ,error: function(){
          //请求异常回调
          //演示失败状态，并实现重传
          var demoText = $('#demoText');
          demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
          demoText.find('.demo-reload').on('click', function(){
            uploadInst.upload();
          });
        }
      });
    });
    </script>
    <script>
      layui.use(['layer', 'form'], function() {
          var layer = layui.layer,
              $ = layui.jquery,
              form = layui.form;
          $(window).on('load', function() {
              form.on('submit(admin)', function(data) {
                  $.ajax({
                      url:"<?php echo url('admin/article/publish'); ?>",
                      data:$('#admin').serialize(),
                      type:'post',
                      async: false,
                      success:function(res) {
                          if(res.code == 1) {
                              layer.alert(res.msg, function(index){
                                location.href = res.url;
                            });
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

    <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
        这里写你的初始化内容
    </script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/static/public/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/static/public/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
  </div>
</body>
</html>
