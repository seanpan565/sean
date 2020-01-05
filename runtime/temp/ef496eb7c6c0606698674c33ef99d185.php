<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:63:"D:\web\phpweb\sean\public/../app/index\view\register\login.html";i:1578048330;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1576206405;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1577867210;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1577863894;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

	<title><?php echo $web_tdk['name']; ?>|会员登录</title>
	<meta name="keywords" content="<?php echo $web_tdk['keywords']; ?>" />
	<meta name="description" content="<?php echo $web_tdk['desc']; ?>" />
	<link rel="stylesheet" href="/static/index/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" href="/static/index/css/font-awesome.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="/static/index/css/ionicons.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="/static/index/css/owl.carousel.css" type="text/css" media="all">
<link rel="stylesheet" href="/static/index/css/owl.theme.css" type="text/css" media="all">
<link rel='stylesheet' href='/static/index/css/prettyPhoto.css' type='text/css' media='all'>
<link rel="stylesheet" href="/static/index/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="/static/index/css/custom.css" type="text/css" media="all">
<link href="/static/index/css/fonts.css" rel="stylesheet">


<script type="text/javascript" src="/static/index/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/index/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/static/index/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/index/js/modernizr-2.7.1.min.js"></script>
<script type="text/javascript" src="/static/index/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/static/index/js/jquery.countdown.min.js"></script>
<script type='text/javascript' src='/static/index/js/jquery.prettyPhoto.js'></script>
<script type='text/javascript' src='/static/index/js/jquery.prettyPhoto.init.min.js'></script>
<script type="text/javascript" src="/static/index/js/script.js"></script>
<!-- layui弹窗 -->
<link rel="stylesheet" href="/static/public/layui/css/layui.css">
<script type="text/javascript" src="/static/public/layui/layui.js" charset="utf-8"></script>

	<link href="/static/index/css/login.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="/static/index/js/register.js" charset="utf-8"></script>
</head>
<body>

	<div class="noo-spinner">
		<div class="spinner">
			<div class="cube1"></div>
			<div class="cube2"></div>
		</div>
	</div>
	<!-- 移动端导航开始 -->
	<div id="menu-slideout" class="slideout-menu hidden-md-up">
    <div class="mobile-menu">
        <ul id="mobile-menu" class="menu">
            <li><a href="<?php echo url('index/index'); ?>" <?php if($controller == 'Index'): ?> style="color:#5fbd74;" <?php endif; ?> >首页</a></li>
            <li><a href="<?php echo url('Shop/index'); ?>" <?php if($controller == 'Shop'): ?> style="color:#5fbd74;" <?php endif; ?>>商品列表</a></li>
            <li><a href="<?php echo url('About/index'); ?>" <?php if($controller == 'About'): ?> style="color:#5fbd74;" <?php endif; ?>>关于我们</a></li>
            <li><a href="<?php echo url('Contact/index'); ?>" <?php if($controller == 'Contact'): ?> style="color:#5fbd74;" <?php endif; ?>>联系我们</a></li>
            <li><a href="<?php echo url('User/index'); ?>" <?php if($controller == 'User'): ?> style="color:#5fbd74;" <?php endif; ?>>会员中心</a></li>
        </ul>
    </div>
</div>

	<!-- 移动端导航结束 -->


	<div class="site">
		<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="topbar-text">
                    <span>工作时间：周一至周五：上午8点至下午6点 </span>
                    <span>周六至周日：上午10点至下午6点</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="topbar-menu">
                    <ul class="topbar-menu">
                        <!-- <li class="dropdown">
                            <a href="#">语言</a>
                            <ul class="sub-menu">
                                <li><a href="#">中文</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </li> -->
                        <?php if($user['id'] == '0'): ?>
                            <li><a href="<?php echo url('register/login'); ?>">登录</a></li>
                            <li><a href="<?php echo url('Register/index'); ?>">注册</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo url('Register/logout'); ?>">退出登录</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

		<header id="header" class="header header-desktop header-2">
    <div class="top-search">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form action="<?php echo url('common/search'); ?>" class="layui-form" method="get">
                        <input type="search" class="top-search-input" name="goods_name" placeholder="搜索商品..." />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="javascript:;" id="logo">
                    <img class="logo-image" src="/static/index/images/logo.png" alt="Organik Logo" />
                </a>
            </div>
            <div class="col-md-9">
                <div class="header-right">
                    <nav class="menu">
                        <ul class="main-menu">
                            <li><a href="<?php echo url('index/index'); ?>" <?php if($controller == 'Index'): ?> style="color:#5fbd74;" <?php endif; ?> >首页</a></li>
                            <li><a href="<?php echo url('Shop/index'); ?>" <?php if($controller == 'Shop'): ?> style="color:#5fbd74;" <?php endif; ?>>商品列表</a></li>
                            <li><a href="<?php echo url('About/index'); ?>" <?php if($controller == 'About'): ?> style="color:#5fbd74;" <?php endif; ?>>关于我们</a></li>
                            <li><a href="<?php echo url('Contact/index'); ?>" <?php if($controller == 'Contact'): ?> style="color:#5fbd74;" <?php endif; ?>>联系我们</a></li>
                            <li><a href="<?php echo url('Article/index'); ?>" <?php if($controller == 'Article'): ?> style="color:#5fbd74;" <?php endif; ?>>文章列表</a></li>
                            <li><a href="<?php echo url('User/index'); ?>" <?php if($controller == 'User'): ?> style="color:#5fbd74;" <?php endif; ?>>会员中心</a></li>
                        </ul>
                    </nav>
                    <div class="btn-wrap">
                        <div class="mini-cart-wrap">
                            <div class="mini-cart">
                                <div class="mini-cart-icon" data-count="<?php echo $cartCount; ?>">
                                    <i class="ion-bag"></i>
                                </div>
                            </div>
                            <div class="widget-shopping-cart-content">
                                    <ul class="cart-list">
                                        <?php if(is_array($cart_head['0']) || $cart_head['0'] instanceof \think\Collection || $cart_head['0'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cart_head['0'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <li>
                                                <a href="javascript:;" onclick="cart_del(this,<?php echo $vo['id']; ?>)" class="remove">×</a>
                                                <a href="<?php echo url('Shopdateil/index',array('id'=>$vo['goods_id'])); ?>"><img src="<?php echo $vo['goods_thumb']; ?>" alt="<?php echo $vo['goods_name']; ?>"><?php echo $vo['goods_name']; ?></a>
                                                <span class="quantity" style="margin-top: 15px;">vip：<?php echo $vo['goods_count']; ?> × ￥<?php echo $vo['goods_vip']; ?></span>
                                                <span class="quantity" style="float:right;">小计：￥<?php echo $vo['total_price']; ?></span>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                <p class="total">
                                    <strong>总价:</strong>
                                    <span class="amount">￥<?php echo $cart_head['1']; ?></span>
                                </p>
                                <p class="buttons">
                                    <a href="<?php echo url('Cart/index'); ?>" class="view-cart">查看购物车</a>
                                    <a href="<?php echo url('Order/cart'); ?>" class="checkout">结账</a>
                                </p>
                            </div>
                        </div>
                        <div class="top-search-btn-wrap">
                            <div class="top-search-btn">
                                <a href="javascript:void(0);">
                                    <i class="ion-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript">
    //layer弹窗组件
    layui.use(['form', 'layer'],
    function() {
        $ = layui.jquery;
        var form = layui.form,
        layer = layui.layer;
    });

    //删除单件商品
    function cart_del(obj,id){
        $.ajax({
            type:"post",
            dataType:"json",
            data:{cart_id:id},
            url:"<?php echo url('cart/del_cart'); ?>",
            success:function(data){
                if (data.status == 1) {
                    layer.msg(data.msg);
                    $(obj).parents("li").remove();
                } else {
                    layer.msg(data.msg);
                }
            }
        },'json');
        return false;
    }



</script>


		<header class="header header-mobile">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div class="header-left">
							<div id="open-left"><i class="ion-navicon"></i></div>
						</div>
					</div>
					<div class="col-xs-8">
						<div class="header-center">
							<a href="javascript:;" id="logo-2">
								<img class="logo-image" src="/static/index/images/logo.png" alt="Organik Logo" />
							</a>
						</div>
					</div>
					<div class="col-xs-2">
						<div class="header-right">
							<div class="mini-cart-wrap">
								<a href="cart.html">
									<div class="mini-cart">
										<div class="mini-cart-icon" data-count="2">
											<i class="ion-bag"></i>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="main">

			<div class="section border-bottom pt-2 pb-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ul class="breadcrumbs">
								<li><a href="<?php echo url('index/index'); ?>">首页</a></li>
								<li>注册</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<p style="height:10px;"></p>

						<div class="organik-seperator mb-6 center">
							<span class="sep-holder"><span class="sep-line"></span></span>
							<div class="sep-icon"><i class="organik-flower"></i></div>
							<span class="sep-holder"><span class="sep-line"></span></span>
						</div>
						<div class="contact-form-wrapper">
							<div class="agile_info">
							    <div class="w3l_form">
							        <div class="left_grid_info">
							            <h3>欢迎光临 !</h3>
							            <p>王小波的黑铁时代有一句是这么说的，人的一切痛苦，本质上都是因为自己的无能的愤怒，世界很大，请多吃点水果</p>
							            <ul class="social_section_1info">
							                <li><a href="javascript:;" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
							                <li><a href="javascript:;" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
							                <li><a href="javascript:;" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
							                <li><a href="javascript:;" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
							                <li><a href="javascript:;" class="w3_pinterest"><i class="fa fa-pinterest"></i></a></li>
							                <li><a href="javascript:;" class="w3_vimeo"><i class="fa fa-vimeo"></i></a></li>
							            </ul>
							        </div>
							    </div>
							    <div class="w3_info">
							        <h2>会员登录</h2>
							        <p>欢迎您再次回来</p>
							        <form action="javascript:;" method="post">
										<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" id="token"/>
							            <div class="input-group">
							                <span><i class="fa fa-user" aria-hidden="true"></i></span>
							                <input type="text" placeholder="用户名/邮箱/手机号" id="user_name" name="user_name" required="" value="<?php echo $log_username; ?>">
							            </div>
							            <div class="input-group">
							                <span><i class="fa fa-lock" aria-hidden="true"></i></span>
							                <input type="Password" placeholder="密码" name="user_password" required="" id="login_password" value="<?php echo $log_password; ?>">
							            </div>
							            <div class="input-group" style="padding-right:0px;">
							                <span><i class="fa fa-user" aria-hidden="true"></i></span>
							                <input type="text" placeholder="图形验证码" required="" style="width:50%;" id="login_captcha" name="captcha">
							                <img class="form-control" style="width:40%;height:40px;float:right;padding: 0;" src="<?php echo captcha_src(); ?>" alt="图形验证码">
							            </div>
							            <div class="input-group" style="width:50%;border:0;">
							                <input id="remember" type="checkbox" name="remember" value="1" checked='checked'>记住密码
							            </div>
							            <button class="btn btn-danger btn-block" type="submit" lay-submit lay-filter="login" id="login">立即登录</button >
							        </form>
							    </div>
							</div>
						</div>
						<p style="height:50px;"></p>
					</div>
				</div>
	     	</div>
		</div>
	    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="/static/index/images/footer_logo.png" class="footer-logo" alt="" />
                <p>
                    欢迎来到水果鲜生。我们的产品是新鲜收获，洗好准备装箱，最后从我们的农场送货上门。
                </p>
                <div class="footer-social">
                    <a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="widget">
                    <h3 class="widget-title">信息来源</h3>
                    <ul>
                        <li><a href="<?php echo url('Shop/index'); ?>">新产品</a></li>
                        <li><a href="<?php echo url('Article/index'); ?>">我们的博客</a></li>
                        <li><a href="<?php echo url('About/index'); ?>">关于我们</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="widget">
                    <h3 class="widget-title">友情链接</h3>
                    <ul>
                        <li><a href="javascript:;">博客园</a></li>
                        <li><a href="https://m.kuaidi100.com/" target="_blank">快递查询</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h3 class="widget-title">订阅</h3>
                    <p>
                        输入您的邮件列表，以便我们自动更新。
                    </p>
                    <form class="newsletter">
                        <input type="email" name="EMAIL" placeholder="你的电子邮件地址" required="" />
                        <button><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                版权所有©2019。保留所有权利
                <!-- <script type="text/javascript" src="https://v1.cnzz.com/z_stat.php?id=1278289424&web_id=1278289424"></script> -->
            </div>
            <div class="col-md-4">
                <img src="/static/index/images/footer_payment.png" alt="" />
            </div>
        </div>
    </div>
    <div class="backtotop" id="backtotop"></div>
</div>

	</div>
</body>
<script type="text/javascript">
	//点击验证码切换
	$(".form-control").click(function (){
		var src = "<?php echo url('register/verify'); ?>";
		$(this).attr('src', src + "?" + Math.round(Math.random() * 1000));
	});


	$(function () {
		layui.use('form', function(){
			var form = layui.form;
			//监听提交
			form.on('submit(login)', function(data){

				//请填写用户名/邮箱/手机号
				var name = $("#user_name").val().trim();
				if (name.length == 0) {
					layer.msg('请填写用户名/邮箱/手机号', {icon: 2});
					return false;
				}
				//请填写密码
				var password = $("#login_password").val().trim();
				if (password.length == 0) {
					layer.msg('密码不能为空', {icon: 2});
					return false;
				}
				//判断密码长度
				if ((password.length < 6) || (password.length > 32)) {
					layer.msg('密码不能小于6位或者大于32位', {icon: 2});
					return false;
				}
				//请填写验证码
				var captcha = $("#login_captcha").val().trim();
				if (captcha.length == 0) {
					layer.msg('验证码不能为空', {icon: 2});
					return false;
				}
				//判断是否勾选记住密码
				var remember = $("#remember:checked").val();
				//表单令牌
				var token = $("#token").val();

				var data = {
					user_name:name,
					user_password:password,
					captcha:captcha,
					remember: remember,
					__token__:token,
				}

				//获取表单数据
				$.ajax({
					type:"post",
					dataType:"json",
					data:{data:data},
					url:"<?php echo url('Register/loginRes'); ?>",
					success:function(data){
						if (data.status == 1) {
							layer.alert(data.msg, {
								title: '提示框',
								icon: 1,
							});
							setTimeout(function () {
								location.href="<?php echo url('user/index'); ?>";
							},1000);
						} else {
							layer.alert(data.msg, {
								title: '提示框',
								icon: 0,
							});
						}
					}
				},'json');
				return false;
			});
		});
	})

</script>
</html>
