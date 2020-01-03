<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:60:"D:\web\phpweb\sean\public/../app/index\view\about\about.html";i:1574596314;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1576206405;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1577846677;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1577863894;}*/ ?>
﻿<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>水果鲜生-关于我们</title>
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
		<div class="section section-bg-9 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">about us</h2>
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
							<li>关于我们</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-10 pb-10">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center mb-2 section-pretitle">About Us</div>
						<h2 class="text-center section-title mtn-3">我们的小故事</h2>
						<div class="organik-seperator mb-9 center">
							<span class="sep-holder"><span class="sep-line"></span></span>
							<div class="sep-icon"><i class="organik-flower"></i></div>
							<span class="sep-holder"><span class="sep-line"></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="about-main-img col-lg-6">
						<img src="/static/index/images/about_1.jpg" alt="" />
					</div>
					<div class="about-content col-lg-6">
						<div class="about-content-title">
							<h4>家庭农场</h4>
							<div class="about-content-title-line"></div>
						</div>
						<div class="about-content-text">
							<p>我们的农场是第二代有机农场，提供最好和最健康的有机食品，促进社区健康，并带来一种发现感和冒险的食品购物。</p>
							<p>欢迎访问我们的网站<br></p>
						</div>
						<div class="about-carousel" data-auto-play="true" data-desktop="4" data-laptop="4" data-tablet="4" data-mobile="2">
							<a href="images/carousel/img_large_1.jpg" data-rel="prettyPhoto[gallery]">
								<img src="/static/index/images/carousel/img_1.jpg" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="images/carousel/img_large_2.jpg" data-rel="prettyPhoto[gallery]">
								<img src="/static/index/images/carousel/img_2.jpg" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="images/carousel/img_large_3.jpg" data-rel="prettyPhoto[gallery]">
								<img src="/static/index/images/carousel/img_3.jpg" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="images/carousel/img_large_4.jpg" data-rel="prettyPhoto[gallery]">
								<img src="/static/index/images/carousel/img_4.jpg" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="images/carousel/img_large_5.jpg" data-rel="prettyPhoto[gallery]">
								<img src="/static/index/images/carousel/img_5.jpg" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="images/carousel/img_large_6.jpg" data-rel="prettyPhoto[gallery]">
								<img src="/static/index/images/carousel/img_6.jpg" alt="" />
								<span class="ion-plus-round"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section bg-light pt-16 pb-6">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center mb-3 section-pretitle">为什么选择水果鲜生?</div>
						<div class="organik-seperator mb-9 center">
							<span class="sep-holder"><span class="sep-line"></span></span>
							<div class="sep-icon"><i class="organik-flower"></i></div>
							<span class="sep-holder"><span class="sep-line"></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="icon-boxes">
							<div class="icon-boxes-icon"><i class="ion-android-star-outline"></i></div>
							<div class="icon-boxes-inner">
								<h6 class="icon-boxes-title"> 吃得更健康</h6>
								<p>获得每日新鲜的水果和蔬菜</p>
							</div>
						</div>
						<div class="icon-boxes">
							<div class="icon-boxes-icon"><i class="organik-lemon"></i></div>
							<div class="icon-boxes-inner">
								<h6 class="icon-boxes-title"> 我们的实力</h6>
								<p>我们一直为客户种植有机农产品</p>
							</div>
						</div>
						<div class="icon-boxes">
							<div class="icon-boxes-icon"><i class="organik-cucumber"></i></div>
							<div class="icon-boxes-inner">
								<h6 class="icon-boxes-title"> 新鲜的,无农药</h6>
								<p>我们提供无农药有机农产品</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="text-center">
							<img src="/static/index/images/about_pic.png" alt="" />
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="icon-boxes right">
							<div class="icon-boxes-icon"><i class="organik-broccoli"></i></div>
							<div class="icon-boxes-inner">
								<h6 class="icon-boxes-title">无条件退款</h6>
								<p>我们提供七天无条件退款服务</p>
							</div>
						</div>
						<div class="icon-boxes right">
							<div class="icon-boxes-icon"><i class="organik-carrot"></i></div>
							<div class="icon-boxes-inner">
								<h6 class="icon-boxes-title"> 灵活的调配</h6>
								<p>选择最适合您需要的交付地址</p>
							</div>
						</div>
						<div class="icon-boxes right">
							<div class="icon-boxes-icon"><i class="organik-tomato"></i></div>
							<div class="icon-boxes-inner">
								<h6 class="icon-boxes-title">客制化服务</h6>
								<p>定制您的专属食品.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section border-bottom pt-11 pb-10">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center mb-1 section-pretitle">我们的工作者</div>
						<h2 class="text-center section-title mtn-2">辛勤劳作的朋友</h2>
						<div class="organik-seperator center mb-8">
							<span class="sep-holder"><span class="sep-line"></span></span>
							<div class="sep-icon"><i class="organik-flower"></i></div>
							<span class="sep-holder"><span class="sep-line"></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="team-member">
							<div class="image">
								<img src="/static/index/images/testimonial/picture_3.jpg" alt="孙悟空" />
							</div>
							<div class="team-info">
								<h5 class="name">孙悟空</h5>
								<p class="bio">孙悟空，又名孙行者，自封花果山美猴王、齐天大圣。曾任天官弼马温。玉帝后来为了招安孙悟空，承认了他自封的封号齐天大圣.</p>
								<ul class="social-list">
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="team-member">
							<div class="image">
								<img src="/static/index/images/testimonial/picture_4.jpg" alt="猪八戒" />
							</div>
							<div class="team-info">
								<h5 class="name">猪八戒</h5>
								<p class="bio">猪八戒，又名猪刚鬣，法号悟能（观音取），浑名八戒（唐僧取），是唐僧的二徒弟，会天罡数的三十六般变化.</p>
								<ul class="social-list">
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="team-member">
							<div class="image">
								<img src="/static/index/images/testimonial/picture_2.jpg" alt="沙和尚" />
							</div>
							<div class="team-info">
								<h5 class="name">沙和尚</h5>
								<p class="bio">原为天宫玉皇大帝的卷帘大将，因为失手不小心打破了琉璃盏，触犯天条，被贬出天界，在人间流沙河兴风作浪，危害一方，专吃过路人</p>
								<ul class="social-list">
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="javascript:;" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-2 pb-4">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="client-carousel" data-auto-play="true" data-desktop="5" data-laptop="3" data-tablet="3" data-mobile="2">
							<div class="client-item">
								<a href="javascript:;" target="_blank">
									<img src="/static/index/images/client/client_1.png" alt="" />
								</a>
							</div>
							<div class="client-item">
								<a href="javascript:;" target="_blank">
									<img src="/static/index/images/client/client_2.png" alt="" />
								</a>
							</div>
							<div class="client-item">
								<a href="javascript:;" target="_blank">
									<img src="/static/index/images/client/client_3.png" alt="" />
								</a>
							</div>
							<div class="client-item">
								<a href="javascript:;" target="_blank">
									<img src="/static/index/images/client/client_4.png" alt="" />
								</a>
							</div>
							<div class="client-item">
								<a href="javascript:;" target="_blank">
									<img src="/static/index/images/client/client_5.png" alt="" />
								</a>
							</div>
						</div>
					</div>
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
</html>
