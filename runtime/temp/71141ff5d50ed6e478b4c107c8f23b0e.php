<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:74:"D:\web\moban\thinkphp\tplay-master\public/../app/index\view\cart\cart.html";i:1557294131;s:66:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\link.html";i:1572937817;s:68:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\mobile.html";i:1557288639;s:74:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\head-message.html";i:1557293645;s:66:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\head.html";i:1557382176;s:68:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\footer.html";i:1557287946;}*/ ?>
﻿<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>Empty Cart</title>

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
		<div class="section section-bg-10 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">Cart</h2>
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
							<li><a href="#">Shop</a></li>
							<li>Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-7 pb-7">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<table class="table shop-cart">
							<tbody>
								<tr class="cart_item">
									<td class="product-remove">
										<a href="#" class="remove">×</a>
									</td>
									<td class="product-thumbnail">
										<a href="shop-detail.html">
											<img src="/static/index/images/shop/thumb/shop_1.jpg" alt="">
										</a>
									</td>
									<td class="product-info">
										<a href="shop-detail.html">Black Hoodie</a>
										<span class="sub-title">Faucibus Tincidunt</span>
										<span class="amount">$2.00</span>
									</td>
									<td class="product-quantity">
										<div class="quantity">
											<input id="qty-1" type="number" min="0" name="number" value="1" class="input-text qty text" size="4">
										</div>
									</td>
									<td class="product-subtotal">
										<span class="amount">$2.00</span>
									</td>
								</tr>
								<tr class="cart_item">
									<td class="product-remove">
										<a href="#" class="remove">×</a>
									</td>
									<td class="product-thumbnail">
										<a href="shop-detail.html">
											<img src="/static/index/images/shop/thumb/shop_2.jpg" alt="">
										</a>
									</td>
									<td class="product-info">
										<a href="shop-detail.html">Redish Dress</a>
										<span class="sub-title">Consequat Quismassa</span>
										<span class="amount">$35.00</span>
									</td>
									<td class="product-quantity">
										<div class="quantity">
											<input id="qty-2" type="number" min="0" name="number" value="1" class="input-text qty text" size="4">
										</div>
									</td>
									<td class="product-subtotal">
										<span class="amount">$35.00</span>
									</td>
								</tr>
								<tr>
									<td colspan="5" class="actions">
										<a class="continue-shopping" href="#"> Continue Shopping</a>
										<input type="submit" class="update-cart" name="update_cart" value="Update Cart" />
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-4">
						<div class="cart-totals">
							<table>
								<tbody>
									<tr class="cart-subtotal">
										<th>Subtotal</th>
										<td>$116.00</td>
									</tr>
									<tr class="shipping">
										<th>Shipping</th>
										<td>Free Shipping</td>
									</tr>
									<tr class="order-total">
										<th>Total</th>
										<td><strong>$146.00</strong></td>
									</tr>
								</tbody>
							</table>
							<div class="proceed-to-checkout">
								<a href="#">Proceed to Checkout</a>
							</div>
						</div>
						<div class="coupon-shipping">
							<div class="coupon">
								<form>
									<input type="text" name="coupon_code" class="coupon-code" id="coupon_code" value="" placeholder="Coupon code" />
									<input type="submit" class="apply-coupon" name="apply_coupon" value="Apply Coupon" />
								</form>
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
