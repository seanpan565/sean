<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:76:"D:\web\moban\thinkphp\tplay-master\public/../app/index\view\about\about.html";i:1557294123;s:66:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\link.html";i:1572937817;s:68:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\mobile.html";i:1557288639;s:74:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\head-message.html";i:1557293645;s:66:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\head.html";i:1557382176;s:68:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\footer.html";i:1557287946;}*/ ?>
﻿<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>About Us</title>

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
            <li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About us</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="shop-list.html">Shop List</a></li>
            <li><a href="cart.html">Cart</a></li>
            <li><a href="checkout.html">Checkout</a></li>
            <li><a href="contact-us.html">Contact</a></li>
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
                        <li class="dropdown">
                            <a href="#">语言</a>
                            <ul class="sub-menu">
                                <li><a href="#">中文</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </li>
                        <li><a href="#">登录</a></li>
                        <li><a href="<?php echo url('Register/index'); ?>">注册</a></li>
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
                <a href="#" id="logo">
                    <img class="logo-image" src="/static/index/images/logo.png" alt="Organik Logo" />
                </a>
            </div>
            <div class="col-md-9">
                <div class="header-right">
                    <nav class="menu">
                        <ul class="main-menu">
                            <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
                            <li><a href="<?php echo url('About/index'); ?>">关于我们</a></li>
                            <li><a href="<?php echo url('Shop/index'); ?>">商品列表</a></li>
                            <li><a href="<?php echo url('Shopdateil/index'); ?>">商品详情</a></li>
                            <li><a href="<?php echo url('Cart/index'); ?>">购物车</a></li>
                            <li><a href="<?php echo url('basic/index'); ?>">个人中心</a></li>
                            <li><a href="<?php echo url('Contact/index'); ?>">联系我们</a></li>
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
                                        <a href="#" class="remove">×</a>
                                        <a href="shop-detail.html">
                                            <img src="/static/index/images/shop/thumb/shop_1.jpg" alt="" />
                                            Orange Juice&nbsp;
                                        </a>
                                        <span class="quantity">1 × $12.00</span>
                                    </li>
                                    <li>
                                        <a href="#" class="remove">×</a>
                                        <a href="shop-detail.html">
                                            <img src="/static/index/images/shop/thumb/shop_2.jpg" alt="" />
                                            Aurore Grape&nbsp;
                                        </a>
                                        <span class="quantity">1 × $9.00</span>
                                    </li>
                                </ul>
                                <p class="total">
                                    <strong>Subtotal:</strong>
                                    <span class="amount">$21.00</span>
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
						<a href="#" id="logo-2">
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
						<h2 class="page-title text-center">About Us</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="section border-bottom pt-2 pb-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<ul class="breadcrumbs">
							<li><a href="#">Home</a></li>
							<li>About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-10 pb-10">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center mb-1 section-pretitle">Welcome to Organik!</div>
						<h2 class="text-center section-title mtn-2">A little story about us</h2>
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
							<h4>A family owned farm</h4>
							<div class="about-content-title-line"></div>
						</div>
						<div class="about-content-text">
							<p>Our farm is a second-generation organic farm that was our parents, Mark &amp; Renée Elliott’s dream to offer the best and healthiest range of organic foods available, promote health in the community and bring a sense of discovery and adventure into food shopping.</p>
							<p>Visit our site for a complete list of fresh, organic fruit and vegetables we are offering.<br></p>
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
						<div class="text-center mb-1 section-pretitle">Why choose our healthy store?</div>
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
								<h6 class="icon-boxes-title"> Eat More Healthfully.</h6>
								<p>Obtaining the recommended daily fruits and vegetables.</p>
							</div>
						</div>
						<div class="icon-boxes">
							<div class="icon-boxes-icon"><i class="organik-lemon"></i></div>
							<div class="icon-boxes-inner">
								<h6 class="icon-boxes-title"> We Have Reputation.</h6>
								<p>We have been growing organic produce for customers since 1976.</p>
							</div>
						</div>
						<div class="icon-boxes">
							<div class="icon-boxes-icon"><i class="organik-cucumber"></i></div>
							<div class="icon-boxes-inner">
								<h6 class="icon-boxes-title"> Fresh &amp; Pesticide Free.</h6>
								<p>We deliver organic pesticide-free and sustainably-grown produce.</p>
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
								<h6 class="icon-boxes-title"> No Commitment Required.</h6>
								<p>We requires no commitment and allows you to cancel or suspend deliveries.</p>
							</div>
						</div>
						<div class="icon-boxes right">
							<div class="icon-boxes-icon"><i class="organik-carrot"></i></div>
							<div class="icon-boxes-inner">
								<h6 class="icon-boxes-title"> Flexibility.</h6>
								<p>Choose the delivery frequency that best fits your needs.</p>
							</div>
						</div>
						<div class="icon-boxes right">
							<div class="icon-boxes-icon"><i class="organik-tomato"></i></div>
							<div class="icon-boxes-inner">
								<h6 class="icon-boxes-title"> Customization.</h6>
								<p>Customize your standard delivery to exclude items you do not want.</p>
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
						<div class="text-center mb-1 section-pretitle">Our farmers</div>
						<h2 class="text-center section-title mtn-2">We are brilliant farmers</h2>
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
								<img src="/static/index/images/testimonial/picture_3.jpg" alt="Michael Andrews" />
							</div>
							<div class="team-info">
								<h5 class="name">Michael Andrews</h5>
								<p class="bio">Born on the farm in Capay, Michael showed an early proficiency in the machine shop and is responsible for designing tools used on the farm today.</p>
								<ul class="social-list">
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="team-member">
							<div class="image">
								<img src="/static/index/images/testimonial/picture_4.jpg" alt="Kathleen Barsotti" />
							</div>
							<div class="team-info">
								<h5 class="name">Kathleen Barsotti</h5>
								<p class="bio">Born in Belmont, CA, Kathleen attended UC Riverside where she earned her B.S. in Agriculture. She is sole proprietor and manager of the farm.</p>
								<ul class="social-list">
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="team-member">
							<div class="image">
								<img src="/static/index/images/testimonial/picture_2.jpg" alt="Mark Ronson" />
							</div>
							<div class="team-info">
								<h5 class="name">Mark Ronson</h5>
								<p class="bio">He has commitment to build a strong financial model for farmers to connect produce directly to consumers by strategically managing our current programs.</p>
								<ul class="social-list">
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
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
								<a href="#" target="_blank">
									<img src="/static/index/images/client/client_1.png" alt="" />
								</a>
							</div>
							<div class="client-item">
								<a href="#" target="_blank">
									<img src="/static/index/images/client/client_2.png" alt="" />
								</a>
							</div>
							<div class="client-item">
								<a href="#" target="_blank">
									<img src="/static/index/images/client/client_3.png" alt="" />
								</a>
							</div>
							<div class="client-item">
								<a href="#" target="_blank">
									<img src="/static/index/images/client/client_4.png" alt="" />
								</a>
							</div>
							<div class="client-item">
								<a href="#" target="_blank">
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
                <img src="images/footer_logo.png" class="footer-logo" alt="" />
                <p>
                    Welcome to Organik. Our products are freshly harvested, washed ready for box and finally delivered from our family farm right to your doorstep.
                </p>
                <div class="footer-social">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="widget">
                    <h3 class="widget-title">信息来源</h3>
                    <ul>
                        <li><a href="#">New Products</a></li>
                        <li><a href="#">Top Sellers</a></li>
                        <li><a href="#">Our Blog</a></li>
                        <li><a href="#">About Our Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="widget">
                    <h3 class="widget-title">有用的链接</h3>
                    <ul>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Our Blog</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Secure Shopping</a></li>
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
                        <input type="email" name="EMAIL" placeholder="Your email address" required="" />
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
                <img src="images/footer_payment.png" alt="" />
            </div>
        </div>
    </div>
    <div class="backtotop" id="backtotop"></div>
</div>

</div>


</body>
</html>
