<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:61:"D:\web\phpweb\sean\public/../app/index\view\user\address.html";i:1574854183;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1574593823;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1574596376;s:58:"D:\web\phpweb\sean\app\index\view\common\user-sidebar.html";i:1574854622;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1574596358;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>水果鲜生-新增收货地址</title>
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
                    <form>
                        <input type="search" class="top-search-input" name="s" placeholder="你在找什么?" />
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
                            <li><a href="<?php echo url('User/index'); ?>" <?php if($controller == 'User'): ?> style="color:#5fbd74;" <?php endif; ?>>会员中心</a></li>
                        </ul>
                    </nav>
                    <div class="btn-wrap">
                        <div class="mini-cart-wrap">
                            <div class="mini-cart">
                                <div class="mini-cart-icon" data-count="2">
                                    <i class="ion-bag"></i>
                                </div>
                            </div>
                            <div class="widget-shopping-cart-content">
                                <ul class="cart-list">

                                    <li>
                                        <a href="javascript:;" class="remove">×</a>
                                        <a href="shop-detail.html"><img src="/static/index/images/shop/thumb/shop_2.jpg" alt="" />蓝莓酱</a>
                                        <span class="quantity">1 × ￥9.00</span>
                                    </li>

                                </ul>
                                <p class="total">
                                    <strong>总价:</strong>
                                    <span class="amount">￥21.00</span>
                                </p>
                                <p class="buttons">
                                    <a href="<?php echo url('Cart/index'); ?>" class="view-cart">查看购物车</a>
                                    <a href="<?php echo url('Checkout/index'); ?>" class="checkout">结账</a>
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
		<div class="section section-bg-10 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">user us</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="section border-bottom pt-2 pb-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<ul class="breadcrumbs">
							<li><a href="<?php echo url('index/index'); ?>">首页</a></li>
							<li>个人中心</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


        <!-- 详情页开始 -->
		<div class="section pt-7 pb-7">
			<div class="container">
				<div class="row">
                    <!-- 侧栏导航 -->
					<!-- 侧栏导航 -->
<div class="col-md-3">
    <ul class="layui-nav layui-nav-tree layui-inline" lay-filter="demo" style="margin-right: 10px;width: 100%;">
        <li class="layui-nav-item"><a href="<?php echo url('user/index'); ?>" title="个人信息">个人信息</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('user/userMessage'); ?>" title="安全设置">安全设置</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('user/addresslist'); ?>" title="收货地址">收货地址</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('user/collect'); ?>" title="我的收藏">我的收藏</a></li>
        <li class="layui-nav-item"><a href="javascript:;" title="订单管理">订单管理</a></li>
        <li class="layui-nav-item"><a href="javascript:;" title="退货售后">退货售后</a></li>
        <li class="layui-nav-item"><a href="javascript:;" title="商品评价">商品评价</a></li>
        <li class="layui-nav-item"><a href="javascript:;" title="账单明细">账单明细</a></li>
        <span class="layui-nav-bar" style="top: 272.5px; height: 0px; opacity: 0;"></span>
    </ul>
</div>


					<div class="col-md-9">
                        <div class="tplay-body-div">
                            <div class="layui-tab">
                              <ul class="layui-tab-title">
                                  <li><a href="<?php echo url('user/addresslist'); ?>" class="a_menu">新增收货列表</a></li>
                                <li class="layui-this">新增收货地址</li>
                              </ul>
                            </div>
                            <div class="tplay-body-div">
                                <form class="layui-form" id="admin">
                                    <div class="layui-form-item">
                                        <label class="layui-form-label" style="width:100px;">收货人</label>
                                        <div class="layui-input-inline" style="min-width:500px;">
                                            <input name="address_name" lay-verify="required" autocomplete="off" class="layui-input" type="text" placeholder="请输入收货人">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label" style="width:100px;">手机号码</label>
                                        <div class="layui-input-inline" style="min-width:500px;">
                                            <input name="address_phone" lay-verify="required" autocomplete="off" class="layui-input" type="text" placeholder="请输入手机号码">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label" style="width:100px;">详细地址</label>
                                        <div class="layui-input-inline" style="min-width:500px;">
                                            <textarea placeholder="详细地址" class="layui-textarea" name="address_site"></textarea>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                          <label class="layui-form-label" style="width:100px;">设为默认</label>
                                          <div class="layui-input-inline">
                                            <input type="radio" name="is_default" value="1" title="是" checked="checked"><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon layui-anim-scaleSpring"></i><div>是</div></div>
                                            <input type="radio" name="is_default" value="0" title="否" ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>否</div></div>
                                          </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="<?php echo $useraddress; ?>">
                                    <div class="layui-form-item">
                                         <label class="layui-form-label" style="width:100px;"></label>
                                        <button class="layui-btn" lay-submit="" lay-filter="admin">立即提交</button>
                                    </div>

                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- 详情页结束 -->
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
                        <li><a href="javascript:;">新产品</a></li>
                        <li><a href="javascript:;">我们的博客</a></li>
                        <li><a href="javascript:;">关于我们</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="widget">
                    <h3 class="widget-title">友情链接</h3>
                    <ul>
                        <li><a href="javascript:;">博客园</a></li>
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
    //表单提交
    layui.use(['layer', 'form'], function() {
        var layer = layui.layer,
        $ = layui.jquery,
        form = layui.form;
        $(window).on('load', function() {
            form.on('submit(admin)', function(data) {
                $.ajax({
                    url:"address",
                    data:$('#admin').serialize(),
                    type:'post',
                    async: false,
                    success:function(res) {
                        if(res.code == 1) {
                            layer.msg(res.msg);
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
</html>
