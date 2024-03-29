<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\web\phpweb\sean\public/../app/admin\view\goods\create.html";i:1576822021;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>layui</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="/static/public/xadmin/css/font.css">
        <link rel="stylesheet" href="/static/public/xadmin/css/xadmin.css">
        <script type="text/javascript" src="/static/public/xadmin/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/static/public/xadmin/js/xadmin.js"></script>
        <script src="/static/public/jquery/jquery.min.js"></script>
    </head>
    <body>
        <div class="layui-fluid">
            <div class="layui-row">
                <div class="layui-tab">
                  <ul class="layui-tab-title">
                    <li><a href="<?php echo url('admin/goods/index'); ?>" class="a_menu">商品管理</a></li>
                    <li class="layui-this">新增商品</li>
                  </ul>
                </div>
                <div style="margin-top: 20px;"></div>
                <div class="layui-fluid">
                    <form class="layui-form">
                        <div class="layui-collapse">
                            <div class="layui-colla-item">
                              <h2 class="layui-colla-title">商品信息<i class="layui-icon layui-colla-icon"></i></h2>
                              <div class="layui-colla-content" style="height:800px;">
                                  <div class="layui-form-item">
                                    <label class="layui-form-label">所属分类</label>
                                    <div class="layui-input-inline">
                                      <select name="goods_cate_id" lay-filter="aihao">
                                        <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['id']; ?>" <?php if(!(empty($cate['pid']) || (($cate['pid'] instanceof \think\Collection || $cate['pid'] instanceof \think\Paginator ) && $cate['pid']->isEmpty()))): if($cate['pid'] == $vo['id']): ?> selected=""<?php endif; else: if(!(empty($pid) || (($pid instanceof \think\Collection || $pid instanceof \think\Paginator ) && $pid->isEmpty()))): if($pid == $vo['id']): ?> selected=""<?php endif; endif; endif; ?>><?php echo $vo['str']; ?><?php echo $vo['name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="layui-form-item">
                                      <label for="username" class="layui-form-label">
                                          <span class="x-red">*</span>商品名称
                                      </label>
                                      <div class="layui-input-inline">
                                          <input type="text" onblur="ajaxName()" id="username" name="goods_name" required="" lay-verify="required" autocomplete="off" class="layui-input">
                                      </div>
                                  </div>
                                  <div class="layui-form-item">
                                      <label for="username" class="layui-form-label">商品副标题</label>
                                      <div class="layui-input-inline">
                                          <input type="text" id="username" name="goods_title" required="" lay-verify="required" autocomplete="off" class="layui-input">
                                      </div>
                                  </div>
                                  <div class="layui-form-item">
                                      <label for="username" class="layui-form-label">商品关键词</label>
                                      <div class="layui-input-inline">
                                          <input type="text" id="username" name="goods_keyword" required="" lay-verify="required" autocomplete="off" class="layui-input">
                                      </div>
                                  </div>
                                  <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">商品详情</label>
                                    <div class="layui-input-block" style="max-width:1000px;">
                                      <textarea placeholder="请输入内容" class="layui-textarea" name="goods_contents" id="container" style="border:0;padding:0"></textarea>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <div class="layui-colla-item">
                              <h2 class="layui-colla-title">销售信息<i class="layui-icon layui-colla-icon"></i></h2>
                              <div class="layui-colla-content">
                                  <div class="layui-form-item">
                                      <label for="username" class="layui-form-label">
                                          <span class="x-red">*</span>价格
                                      </label>
                                      <div class="layui-input-inline">
                                          <input type="text" id="username" name="goods_price" required="" lay-verify="required" autocomplete="off" class="layui-input">
                                      </div>
                                  </div>
                                  <div class="layui-form-item">
                                      <label for="username" class="layui-form-label">
                                          <span class="x-red">*</span>优惠价
                                      </label>
                                      <div class="layui-input-inline">
                                          <input type="text" id="username" name="goods_vip" required="" lay-verify="required" autocomplete="off" class="layui-input">
                                      </div>
                                  </div>
                                  <div class="layui-form-item">
                                      <label for="username" class="layui-form-label">
                                          <span class="x-red">*</span>库存
                                      </label>
                                      <div class="layui-input-inline">
                                          <input type="text" id="username" name="goods_inventory" required="" lay-verify="required" autocomplete="off" class="layui-input">
                                      </div>
                                  </div>
                                  <div class="layui-form-item">
                                      <label for="username" class="layui-form-label">
                                          <span class="x-red">*</span>库存单位
                                      </label>
                                      <div class="layui-input-inline">
                                          <input type="text" id="username" name="goods_unit" required="" lay-verify="required" autocomplete="off" class="layui-input">
                                      </div>
                                  </div>
                                  <div class="layui-form-item">
                                      <label for="username" class="layui-form-label">
                                          <span class="x-red">*</span>商品货号
                                      </label>
                                      <div class="layui-input-inline">
                                          <input type="text" id="username" name="goods_number" required="" lay-verify="required" autocomplete="off" class="layui-input">
                                      </div>
                                  </div>
                                  <div class="layui-form-item">
                                        <label class="layui-form-label">是否上架</label>
                                        <div class="layui-input-block">
                                          <input type="radio" name="goods_putaway" value="1" title="是" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon layui-anim-scaleSpring"></i><div>是</div></div>
                                          <input type="radio" name="goods_putaway" value="0" title="否"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>否</div></div>
                                        </div>
                                  </div>
                                  <div class="layui-form-item">
                                        <label class="layui-form-label">是否推荐</label>
                                        <div class="layui-input-block">
                                          <input type="radio" name="goods_recommend" value="1" title="是" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon layui-anim-scaleSpring"></i><div>是</div></div>
                                          <input type="radio" name="goods_recommend" value="0" title="否"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>否</div></div>
                                        </div>
                                  </div>
                              </div>
                            </div>
                            <div class="layui-colla-item">
                              <h2 class="layui-colla-title">属性/图集<i class="layui-icon layui-colla-icon"></i></h2>
                              <div class="layui-colla-content">
                                  <div class="layui-form-item">
                                      <label class="layui-form-label">商品主图</label>
                                      <div class="layui-input-block">
                                          <a id="btn-thumb"><img src="/static/admin/images/thumb.jpg" id="thumb-preview" style="cursor:pointer;width:100px; height:100px;"></a>
                                          <!-- 路径 -->
                                          <input type="hidden" name="goods_thumb" id="input-thumb" value="">
                                          <!-- <button class="layui-btn layui-btn-danger" lay-filter="demo1" id="cancel" type="button" style="display:block">删除图片</button> -->
                                      </div>
                                  </div>

                                  <!--相册图集开始-->
                                  <div class="layui-form-item" id="pics">
                                    <div class="layui-form-label" style="margin-bottom: 10px;">相册图集</div>
                                    <div class="layui-input-block" style="width: 70%;">
                                      <div class="layui-upload">
                                        <button type="button" class="layui-btn layui-btn-primary pull-left" id="slide-pc">选择多图</button>
                                        <div class="pic-more">
                                          <ul class="pic-more-upload-list" id="slide-pc-priview">
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--相册图集结束-->
                                  <!--商品属性-->
                                  <div class="layui-form-item">
                                      <label class="layui-form-label">商品属性</label>
                                      <div class="layui-input-block">
                                          <div class="sell-o-rich-text top">商品属性</div>
                                          <div class="fl commodity-property goods-attrs">
                                              <span class="layui-btn add-prop-btn">+添加类目属性</span>
                                          </div>
                                      </div>
                                  </div>
                                  <!--商品属性-->
                            </div>
                        </div>
                        <div style="height:20px;"></div>
                      <div class="layui-form-item">
                          <label class="layui-form-label"></label>
                          <button  class="layui-btn" lay-filter="add" lay-submit="">立即提交</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
    <!-- 加载编辑器的容器 -->
    <script src="/static/public/ueditor/ueditor.config.js"></script>
    <script src="/static/public/ueditor/ueditor.all.min.js"></script>
    <script src="/static/public/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">UE.getEditor('container',{initialFrameWidth:800,initialFrameHeight:400,});</script>

    <script>
        layui.use(['form','layer'], function(){
          $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;

          //自定义验证规则
          form.verify({
            nikename: function(value){
              if(value.length < 5){
                return '昵称至少得5个字符啊';
              }
            }
          });
        });
    </script>

    <script>

        // layui表单验证
        layui.use(['form', 'layer'],
        function() {
            $ = layui.jquery;
            var form = layui.form,
            layer = layui.layer;

            //自定义验证规则
            form.verify({
              username: function(value){ //value：表单的值、item：表单的DOM对象
                if (value.length < 3) {
                    return '商品类型英文名称至少得3个字符';
                }
                if(!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$").test(value)){
                    return '商品类型英文名称不能有特殊字符';
                }
                if(/(^\_)|(\__)|(\_+$)/.test(value)){
                    return '商品类型英文名称首尾不能出现下划线\'_\'';
                }
                if(/^\d+\d+\d$/.test(value)){
                    return '商品类型英文名称不能全为数字';
                }
              },
              pass:function(value, item){
                  if (value.length > 3) {
                      return '排序最多3个字符';
                  }
              },

            });

            //监听提交
            form.on('submit(add)',function (data){
        		$.post("<?php echo url('goods/create'); ?>",data.field,function(data){
                    if (data.status == 1) {
                        layer.msg(data.info, {
                            title: '提示框',
                            icon: 1,
                            time:2000,
                        });
                        // var url = "<?php echo url('goods/index'); ?>";
        				// setTimeout(window.location.href = url,2000);
                    } else {
                        layer.msg(data.info, {
                            title: '提示框',
                            icon: 0,
                            time:2000,
                        });
                    }
        		},'json');
        		return false;
        	});

        });

        //ajax查询是否重名
        function ajaxName()
        {
            var username = $('#username').val();
            $.ajax({
                type:"post",
                dataType:"json",
                data:{username:username},
                url:"<?php echo url('goods/ajaxName'); ?>",
                success:function(data){
                    if (data.status == 1) {
                        layer.alert(data.info, {
                            title: '提示框',
                            icon: 0,
                        });
                        return false;
                    }
                }
            },'json');
        }

        //主图上传
        layui.use('upload', function(){
            var $ = layui.jquery;
            var upload = layui.upload;
            var uploadInst = upload.render({
                elem:'#btn-thumb',
                url: "<?php echo url('common/upload'); ?>",
                size:2500,
                exts: 'jpg|png|jpeg',
                before: function(obj){
                    obj.preview(function(index,thumb, result){
                        $('#thumb-preview').attr('src',result);
                    });
                },
                done: function(res){
                    console.log(res);
                    if(res.code == 0){
                        return layer.msg(res.message);
                    }
                    $('#input-thumb').val(res.src);
                }
            });
        });

        //图集上传
        layui.use('upload', function(){
            var $ = layui.jquery;
            var upload = layui.upload;
            upload.render({
                 elem: '#slide-pc',
                 url: "<?php echo url('goods/upload'); ?>",
                 size: 500,
                 exts: 'jpg|png|jpeg',
                 multiple: true,
                 before: function(obj) {
                    layer.msg('图片上传中...', {
                        icon: 16,
                        shade: 0.01,
                        time: 0,
                    });
                 },
                 done: function(res) {
                    layer.close(layer.msg());//关闭上传提示窗口
                    if(res.status == 0) {
                         return layer.msg(res.message);
                    }
                     $('#slide-pc-priview').append('<li class="item_img" style="width: 90px;float: left;margin-right: 15px;"><div class="operate"><i class="toleft layui-icon"></i><i class="toright layui-icon"></i><i  class="close layui-icon"></i></div><img src="/uploads/admin/goods_thumb' + res.filepath + '" class="img" style="width: 90px;float: left;"><input type="hidden" id="pc_src" name="pc_src[]" value="' + res.filepath + '" /></li>');
                 }
            });
        });

        //点击多图上传的X,删除当前的图片
        $("body").on("click",".close",function(){
            var imgurl = $(this).parent().siblings("input[type='hidden']").val();
            if(!imgurl){
                layer.msg('请先上传图片！', {icon: 2});
                return false;
            }
            $.ajax({
                type:"post",
                dataType:"json",
                data:{imgurl:imgurl},
                url:"<?php echo url('goods/delimg'); ?>",
                success:function(data){
                    if(data==1){
                        layer.msg('撤销成功！', {icon: 1});
                    }else{
                        layer.msg('撤销失败！', {icon: 2});
                    }
                }
            });
            $(this).closest("li").remove();
        });

         //多图上传点击<>左右移动图片
        $("body").on("click",".pic-more ul li .toleft",function(){
            var li_index=$(this).closest("li").index();
            if(li_index>=1){
              $(this).closest("li").insertBefore($(this).closest("ul").find("li").eq(Number(li_index)-1));
            }
        });
        $("body").on("click",".pic-more ul li .toright",function(){
            var li_index=$(this).closest("li").index();
            $(this).closest("li").insertAfter($(this).closest("ul").find("li").eq(Number(li_index)+1));
        });

        // 添加属性值
        var addAttrNum = 0;
        $(document).on("click", ".add-prop-btn", function () {
            var _html = '<div class="attribute-wrap layui-input-inline" style="display:block;">' +
                '<input class="layui-input" placeholder="属性名" name="attr_name[]" />' +
                '<input class="layui-input" placeholder="属性值" name="attr_value[]" />' +
                '<span class="layui-input-inline layui-btn layui-btn-primary del-btn-attr"><i class="am-icon-trash"></i> 删除</span>' +
                '</div>';
            addAttrNum++;
            $(this).before(_html);
        });

        // 删除商品属性
        $(document).on("click", ".attribute-wrap .del-btn-attr", function () {
            var obj = $(this);
            layer.confirm('确定要删除商品类目属性?', {
                time: 0 ,//不自动关闭
                title: '删除类目属性',
                btn: ['确定', '取消'],
                yes: function (index) {
                    layer.msg('删除成功', {
                        skin: 'saveFrame-success',
                        icon: 1
                    });
                    layer.close(index);
                    obj.parents(".attribute-wrap").remove();
                }
            });
        });
    </script>
</html>
