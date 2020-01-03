<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:63:"D:\web\phpweb\sean\public/../app/index\view\register\index.html";i:1578018178;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1576206405;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1577867210;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1577863894;}*/ ?>
﻿<!doctype html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>水果鲜生-会员注册</title>
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

								<div class="w3_info">
									<h2>手机注册新账号</h2>
									<p>欢迎您注册新的账号</p>
									<form action="javascript:;" method="post">
										<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" id="token"/>
										<div class="input-group">
											<span><i class="fa fa-user" aria-hidden="true"></i></span>
											<input type="text" placeholder="请输入您的手机号" required="" id="mobile">
										</div>
										<div class="input-group" style="padding-right:0px;">
											<span><i class="fa fa-user" aria-hidden="true"></i></span>
											<input type="text" placeholder="图形验证码" required="" style="width:50%;" id="mobile_verify">
											<img class="form-control" onclick="cache()" style="width:40%;height:40px;float:right;padding: 0;" src="<?php echo captcha_src(); ?>" alt="图形验证码">
										</div>
										<div class="input-group" style="padding-right:0px;">
											<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
											<input type="text" placeholder="验证码" required="" style="width:50%;" id="mobile_code" name="code">
											<button type="button" class="dyMobileButton" onclick="sendMobileCode(this);" style="width:40%;height:40px;float:right;padding: 0;">获取验证码</button>
										</div>
										<div class="input-group">
											<span><i class="fa fa-lock" aria-hidden="true"></i></span>
											<input type="Password" placeholder="密码" required="" id="mobile_password">
										</div>
										<div class="input-group">
											<span><i class="fa fa-lock" aria-hidden="true"></i></span>
											<input type="Password" placeholder="确认密码" required="" id="mobile_re_password">
										</div>
										<div class="input-group" style="width:50%;border:0;">
											<input id="reader_mobile" type="checkbox" name="reader_mobile" value="1">点击表示您同意商城《服务协议》
										</div>

										<input type="button" onclick="mobile_submit()" value="手机注册账号" />
									</form>
								</div>
								<div class="w3_info">
									<h2>邮箱注册新账号</h2>
									<p>欢迎您注册新的账号</p>
									<form action="javascript:;" method="post">
										<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" id="token"/>
										<div class="input-group">
											<span><i class="fa fa-user" aria-hidden="true"></i></span>
											<input type="text" placeholder="请输入邮箱账号" required="" id="email">
										</div>
										<div class="input-group" style="padding-right:0px;">
											<span><i class="fa fa-user" aria-hidden="true"></i></span>
											<input type="text" placeholder="图形验证码" required="" style="width:50%;" id="email_verify" name="code">
											<img class="form-control" onclick="cache()" style="width:40%;height:40px;float:right;padding: 0;" src="<?php echo captcha_src(); ?>" alt="图形验证码">
										</div>
										<div class="input-group" style="padding-right:0px;">
											<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
											<input type="text" placeholder="验证码" required="" style="width:50%;" id="email_code" name="code">
											<button type="button" class="dyEmailButton" onclick="sendEmailCode(this);" style="width:40%;height:40px;float:right;padding: 0;">获取验证码</button>
										</div>
										<div class="input-group">
											<span><i class="fa fa-lock" aria-hidden="true"></i></span>
											<input type="Password" placeholder="密码" required="" id="email_password">
										</div>
										<div class="input-group">
											<span><i class="fa fa-lock" aria-hidden="true"></i></span>
											<input type="Password" placeholder="确认密码" required="" id="email_re_password">
										</div>
										<div class="input-group" style="width:50%;border:0;">
											<input id="reader_email" type="checkbox" name="reader_email" value="1">点击表示您同意商城《服务协议》
										</div>
										<input type="button" onclick="email_submit()" value="邮箱注册账号" />
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
<script>

	//layer弹窗组件
	layui.use(['form', 'layer'],
	function() {
		$ = layui.jquery;
		var form = layui.form,
		layer = layui.layer;
	});

	//点击验证码切换
	function cache() {
		var src = "<?php echo url('register/verify'); ?>";
		$(this).attr('src', src + "?" + Math.round(Math.random() * 1000));
	};

	var phoneReg = /(^1[3|4|5|7|8]\d{9}$)|(^09\d{8}$)/; //手机号正则
	var emailReg = /(^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$)/; //手机号正则
	var count = 300; //间隔函数，1秒执行
	var InterValObj; //timer变量，控制时间
	var curCount; //当前剩余秒数

	/**
	 * 发送手机验证码
	 * @param obj
	 * @returns {boolean}
	 */
	function sendMobileCode (obj) {
		curCount = count;
		var mobile = $.trim($('#mobile').val());
		if (!phoneReg.test(mobile)) {
			layer.msg('请输入有效的手机号码', {icon: 2});
			return false;
		}
		//判断图像验证码是否必填
		var verify = $('#mobile_verify').val().trim();
		if (verify.length == 0) {
			layer.msg('请填写图形验证码', {icon: 2});
			return false;
		}
		//发送时手机号码
		$.ajax({
			url: "<?php echo url('register/sendCode'); ?>",
			async: false,
			type: "POST",
			data: {mobile: mobile, verify: verify, type: 'mobile'},
			dataType: "json",
			success: function (data) {
				if (data.status == 0) {
					layer.msg(data.msg, {icon: 2});
				} else {
					layer.msg(data.msg, {icon: 1});
					//设置button效果，开始计时
					$(obj).attr("disabled", "true");
					$(obj).val(+curCount + "秒再获取");
					InterValObj = window.setInterval(SetMobileRemainTime, 1000); //启动计时器，1秒执行一次
					//向后台发送处理数据
				}
			}
		})

	}
	/**
	* 手机倒计时
	* @constructor
	*/
	function SetMobileRemainTime () {
		if (curCount == 0) {
			window.clearInterval(InterValObj); //停止计时器
			$('.dyMobileButton').removeAttr("disabled"); //启用按钮
			$('.dyMobileButton').val("重新发送");
		} else {
			curCount--;
			$('.dyMobileButton').val(+curCount + "秒再获取");
		}
	}

	/**
	 * 发送邮箱验证码
	 * @param obj
	 * @returns {boolean}
	 */
	function sendEmailCode (obj) {
		curCount = count;
		var email = $.trim($('#email').val());
		if (!emailReg.test(email)) {
			layer.msg('请输入有效的邮箱');
			return false;
		}
		//判断图像验证码是否必填
		var verify = $('#email_verify').val();
		if (verify.length == 0) {
			layer.msg('请填写图形验证码', {icon: 2});
			return false;
		}
		//发送时邮箱
		$.ajax({
			url: "<?php echo url('register/sendCode'); ?>",
			async: false,
			type: "POST",
			data: {email: email, verify: verify, type: 'email'},
			dataType: "json",
			success: function (data) {
				if (data.status == 0) {
					layer.msg(data.msg, {icon: 2});
				} else {
					layer.msg(data.msg, {icon: 1});
					//设置button效果，开始计时
					$(obj).attr("disabled", "true");
					$(obj).val(+curCount + "秒再获取");
					InterValObj = window.setInterval(SetEmailRemainTime, 1000); //启动计时器，1秒执行一次
					//向后台发送处理数据
				}
			}
		});
	}

	/**
	 * 邮箱倒计时
	 * @constructor
	 */
	function SetEmailRemainTime () {
		if (curCount == 0) {
			window.clearInterval(InterValObj); //停止计时器
			$('.dyEmailButton').removeAttr("disabled"); //启用按钮
			$('.dyEmailButton').val("重新发送");
		} else {
			curCount--;
			$('.dyEmailButton').val(+curCount + "秒再获取");
		}
	}

	//手机注册提交
	function mobile_submit () {
		var mobile = $.trim($('#mobile').val());
		if (!phoneReg.test(mobile)) {
			layer.msg('请输入有效的手机号码', {icon: 2});
			return false;
		}
		//请填写手机验证码
		var mobile_code = $("#mobile_code").val().trim();
		if (mobile_code.length == 0) {
			layer.open({
				title: '提示'
				,content: '请填写手机验证码'
			});
		}
		//请填写密码
		var password = $("#mobile_password").val().trim();
		if (password.length == 0) {
			layer.msg('密码不能为空', {icon: 2});
			return false;
		}
		//判断密码长度
		if ((password.length < 6) || (password.length > 18)) {
			layer.msg('密码不能小于6位或者大于18位', {icon: 2});
			return false;
		}
		//判断两次输入的密码是否一致
		var re_password = $("#mobile_re_password").val().trim();
		if (password != re_password) {
			layer.msg('两次输入的密码不一致', {icon: 2});
			return false;
		}
		//判断当前的协议是否勾选
		var reader_mobile = $("#reader_mobile:checked").val();
		if (reader_mobile != 1) {
			layer.open({
				title: '提示',
				content: '请同意勾选商城协议',
				icon: 2,
			});
			return false;
		}
		//表单令牌
		var token = $("#token").val();
		var data = {
			__token__:token,
			type:'mobile',
			mobile:mobile,
			code:mobile_code,
			password:password
		}
		ajax_reg(data);
		return false;
	}
	//邮箱注册提交
	function email_submit () {
		var email = $.trim($('#email').val());
		if (!emailReg.test(email)) {
			layer.msg('请输入有效的邮箱', {icon: 2});
			return false;
		}
		//请填写email验证码
		var email_code = $("#email_code").val().trim();
		if (email_code.length == 0) {
			layer.msg('请填写邮箱验证码', {icon: 2});
			return false;
		}
		//请填写email密码
		var password = $("#email_password").val().trim();
		if (password.length == 0) {
			layer.msg('密码不能为空', {icon: 2});
			return false;
		}
		//判断密码长度
		if ((password.length < 6) || (password.length > 18)) {
			layer.msg('密码不能小于6位或者大于18位', {icon: 2});
			return false;
		}
		//判断两次输入的密码是否一致
		var re_password = $("#email_re_password").val().trim();
		if (password != re_password) {
			layer.msg('两次输入的密码不一致', {icon: 2});
			return false;
		}
		//判断当前的协议是否勾选
		var reader_email = $("#reader_email:checked").val();
		if (reader_email != 1) {
			layer.msg('请同意勾选商城协议', {icon: 2});
			return false;
		}
		//表单令牌
		var token = $("#token").val();
		var data = {
			__token__:token,
			type:'email',
			email:email,
			code:email_code,
			password:password
		}
		ajax_reg(data);
		return false;
	}

	/**
	 * 注册发送ajax请求
	 * @param data
	 */
	function ajax_reg (data) {
		$.ajax({
			url:"<?php echo url('register/register'); ?>",
			async: false,
			type: "POST",
			data: data,
			dataType: "json",
			success: function (data) {
				if (data.status == 0) {
					layer.msg(data.msg, {icon: 2});
				} else {
					layer.msg(data.msg, {icon: 1});
					setTimeout(function () {
						location.href="<?php echo url('User/index'); ?>";
					},1000)
				}
			}
		});
	}

</script>
</html>
