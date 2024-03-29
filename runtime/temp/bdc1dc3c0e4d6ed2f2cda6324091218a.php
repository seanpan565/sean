<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:86:"D:\web\moban\thinkphp\tplay-master\public/../app/index\view\shopdateil\shopdateil.html";i:1557380342;s:66:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\link.html";i:1572937817;s:68:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\mobile.html";i:1557288639;s:74:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\head-message.html";i:1557293645;s:66:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\head.html";i:1557382176;s:69:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\sidebar.html";i:1557380351;s:68:"D:\web\moban\thinkphp\tplay-master\app\index\view\common\footer.html";i:1557287946;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>Shop Detail</title>

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



<link rel='stylesheet' href='/static/index/css/slick.css' type='text/css' media='all'>
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
						<h2 class="page-title text-center">Shop Detail</h2>
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
							<li>Shop Detail</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-7 pb-7">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-push-3">
						<div class="single-product">
							<div class="col-md-6">
								<div class="image-gallery">
									<div class="image-gallery-inner">
										<div>
											<div class="image-thumb">
												<a href="images/shop/large/shop_1.jpg" data-rel="prettyPhoto[gallery]">
													<img src="/static/index/images/shop/shop_1.jpg" alt="" />
												</a>
											</div>
										</div>
										<div>
											<div class="image-thumb">
												<a href="images/shop/large/shop_2.jpg" data-rel="prettyPhoto[gallery]">
													<img src="/static/index/images/shop/shop_3.jpg" alt="" />
												</a>
											</div>
										</div>
										<div>
											<div class="image-thumb">
												<a href="images/shop/large/shop_3.jpg" data-rel="prettyPhoto[gallery]">
													<img src="/static/index/images/shop/shop_4.jpg" alt="" />
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="image-gallery-nav">
									<div class="image-nav-item">
										<div class="image-thumb">
											<img src="/static/index/images/shop/thumb/shop_1.jpg" alt="" />
										</div>
									</div>
									<div class="image-nav-item">
										<div class="image-thumb">
											<img src="/static/index/images/shop/thumb/shop_3.jpg" alt="" />
										</div>
									</div>
									<div class="image-nav-item">
										<div class="image-thumb">
											<img src="/static/index/images/shop/thumb/shop_4.jpg" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="summary">
									<h1 class="product-title">Orange Juice</h1>
									<div class="product-rating">
										<div class="star-rating">
											<span style="width:100%"></span>
										</div>
										<i>(2 customer reviews)</i>
									</div>
									<div class="product-price">
										<del>$15.00</del>
										<ins>$12.00</ins>
									</div>
									<div class="mb-3">
										<p>Relish the goodness of hand-picked oranges from the finest orchards. Foster a healthy lifestyle with the benefits of oranges. 100 percent orange juice with no added sugar for a healthy you.</p>
									</div>
									<form class="cart">
										<div class="quantity-chooser">
											<div class="quantity">
												<span class="qty-minus" data-min="1"><i class="ion-ios-minus-outline"></i></span>
												<input type="text" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
												<span class="qty-plus" data-max=""><i class="ion-ios-plus-outline"></i></span>
											</div>
										</div>
										<button type="submit" class="single-add-to-cart">ADD TO CART</button>
									</form>
									<div class="product-tool">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"> Browse Wishlist </a>
										<a class="compare" href="#" data-toggle="tooltip" data-placement="top" title="Add to compare"> Compare </a>
									</div>
									<div class="product-meta">
										<table>
											<tbody>
												<tr>
													<td class="label">Category</td>
													<td><a href="#">Juice</a></td>
												</tr>
												<tr>
													<td class="label">Share</td>
													<td class="share">
														<a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
														<a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
														<a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="commerce-tabs tabs classic">
									<ul class="nav nav-tabs tabs">
										<li class="active">
											<a data-toggle="tab" href="#tab-description" aria-expanded="true">Description</a>
										</li>
										<li class="">
											<a data-toggle="tab" href="#tab-reviews" aria-expanded="false">Reviews</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade active in" id="tab-description">
											<p>
												Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
											</p>
										</div>
										<div id="tab-reviews" class="tab-pane fade">
											<div class="single-comments-list mt-0">
												<div class="mb-2">
													<h2 class="comment-title">2 reviews for Orange Juice</h2>
												</div>
												<ul class="comment-list">
													<li>
														<div class="comment-container">
															<div class="comment-author-vcard">
																<img alt="" src="/static/index/images/avatar/avatar.png" />
															</div>
															<div class="comment-author-info">
																<span class="comment-author-name">admin</span>
																<a href="#" class="comment-date">July 27, 2016</a>
																<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
															</div>
															<div class="reply">
																<a class="comment-reply-link" href="#">Reply</a>
															</div>
														</div>
														<ul class="children">
															<li>
																<div class="comment-container">
																	<div class="comment-author-vcard">
																		<img alt="" src="/static/index/images/avatar/avatar.png" />
																	</div>
																	<div class="comment-author-info">
																		<span class="comment-author-name">admin</span>
																		<a href="#" class="comment-date">July 27, 2016</a>
																		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
																	</div>
																	<div class="reply">
																		<a class="comment-reply-link" href="#">Reply</a>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li>
														<div class="comment-container">
															<div class="comment-author-vcard">
																<img alt="" src="/static/index/images/avatar/avatar.png" />
															</div>
															<div class="comment-author-info">
																<span class="comment-author-name">admin</span>
																<a href="#" class="comment-date">July 27, 2016</a>
																<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
															</div>
															<div class="reply">
																<a class="comment-reply-link" href="#">Reply</a>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<div class="single-comment-form mt-0">
												<div class="mb-2">
													<h2 class="comment-title">LEAVE A REPLY</h2>
												</div>
												<form class="comment-form">
													<div class="row">
														<div class="col-md-12">
															<textarea id="comment" name="comment" cols="45" rows="5" placeholder="Message *"></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<input id="author" name="author" type="text" value="" size="30" placeholder="Name *" class="mb-2">
														</div>
														<div class="col-md-4">
															<input id="email" name="email" type="email" value="" size="30" placeholder="Email *" class="mb-2">
														</div>
														<div class="col-md-4">
															<input id="url" name="url" type="text" value="" placeholder="Website">
														</div>
													</div>
													<div class="row">
														<div class="col-md-2">
															<input name="submit" type="submit" id="submit" class="btn btn-alt btn-border" value="Submit">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="related">
									<div class="related-title">
										<div class="text-center mb-1 section-pretitle fz-34">Related</div>
										<h2 class="text-center section-title mtn-2 fz-24">Products</h2>
									</div>
									<div class="product-carousel p-0" data-auto-play="true" data-desktop="3" data-laptop="2" data-tablet="2" data-mobile="1">
										<div class="product-item text-center">
											<div class="product-thumb">
												<a href="shop-detail.html">
													<div class="badges">
														<span class="hot">Hot</span>
													</div>
													<img src="/static/index/images/shop/shop_5.jpg" alt="" />
												</a>
												<div class="product-action">
													<span class="add-to-cart">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
													</span>
													<span class="wishlist">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
													</span>
													<span class="quickview">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
													</span>
													<span class="compare">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
													</span>
												</div>
											</div>
											<div class="product-info">
												<a href="shop-detail.html">
													<h2 class="title">Carrot</h2>
													<span class="price">$12.00</span>
												</a>
											</div>
										</div>
										<div class="product-item text-center">
											<div class="product-thumb">
												<a href="shop-detail.html">
													<span class="outofstock"><span>Out</span>of stock</span>
													<img src="/static/index/images/shop/shop_6.jpg" alt="" />
												</a>
												<div class="product-action">
													<span class="add-to-cart">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
													</span>
													<span class="wishlist">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
													</span>
													<span class="quickview">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
													</span>
													<span class="compare">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
													</span>
												</div>
											</div>
											<div class="product-info">
												<a href="shop-detail.html">
													<h2 class="title">Sprouting Broccoli</h2>
													<span class="price">$6.00</span>
												</a>
											</div>
										</div>
										<div class="product-item text-center">
											<div class="product-thumb">
												<a href="shop-detail.html">
													<img src="/static/index/images/shop/shop_7.jpg" alt="" />
												</a>
												<div class="product-action">
													<span class="add-to-cart">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
													</span>
													<span class="wishlist">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
													</span>
													<span class="quickview">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
													</span>
													<span class="compare">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
													</span>
												</div>
											</div>
											<div class="product-info">
												<a href="shop-detail.html">
													<h2 class="title">Chinese Cabbage</h2>
													<span class="price">$9.00</span>
												</a>
											</div>
										</div>
										<div class="product-item text-center">
											<div class="product-thumb">
												<a href="shop-detail.html">
													<div class="badges">
														<span class="hot">Hot</span>
													</div>
													<img src="/static/index/images/shop/shop_8.jpg" alt="" />
												</a>
												<div class="product-action">
													<span class="add-to-cart">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
													</span>
													<span class="wishlist">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
													</span>
													<span class="quickview">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
													</span>
													<span class="compare">
														<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
													</span>
												</div>
											</div>
											<div class="product-info">
												<a href="shop-detail.html">
													<h2 class="title">Tieton Cherry</h2>
													<span class="price">$9.00</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-pull-9">
						<div class="sidebar">
    <div class="widget widget-product-search">
        <form class="form-search">
            <input type="text" class="search-field" placeholder="Search products…" value="" name="s" />
            <input type="submit" value="Search" />
        </form>
    </div>
    <div class="widget widget-product-categories">
        <h3 class="widget-title">产品类别</h3>
        <ul class="product-categories">
            <li><a href="#">果干</a> <span class="count">6</span></li>
            <li><a href="#">水果</a> <span class="count">5</span></li>
            <li><a href="#">果汁</a> <span class="count">6</span></li>
            <li><a href="#">蔬菜</a> <span class="count">6</span></li>
        </ul>
    </div>
    <!-- <div class="widget widget_price_filter">
        <h3 class="widget-title">按价格过滤</h3>
        <div class="price_slider_wrapper">
            <div class="price_slider" style="display:none;"></div>
            <div class="price_slider_amount">
                <input type="text" id="min_price" name="min_price" value="" data-min="0" placeholder="Min price">
                <input type="text" id="max_price" name="max_price" value="" data-max="150" placeholder="Max price">
                <button type="submit" class="button">过滤</button>
                <div class="price_label" style="display:none;">
                    Price: <span class="from"></span> &mdash; <span class="to"></span>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div> -->
    <div class="widget widget-products">
        <h3 class="widget-title">制品</h3>
        <ul class="product-list-widget">
            <li>
                <a href="shop-detail.html">
                    <img src="/static/index/images/shop/thumb/shop_1.jpg" alt="" />
                    <span class="product-title">橙汁</span>
                </a>
                <del>$15.00</del>
                <ins>$12.00</ins>
            </li>
            <li>
                <a href="shop-detail.html">
                    <img src="/static/index/images/shop/thumb/shop_2.jpg" alt="" />
                    <span class="product-title">Aurore Grape</span>
                </a>
                <ins>$9.00</ins>
            </li>
            <li>
                <a href="shop-detail.html">
                    <img src="/static/index/images/shop/thumb/shop_3.jpg" alt="" />
                    <span class="product-title">Blueberry Jam</span>
                </a>
                <ins>$15.00</ins>
            </li>
            <li>
                <a href="shop-detail.html">
                    <img src="/static/index/images/shop/thumb/shop_4.jpg" alt="" />
                    <span class="product-title">Passionfruit</span>
                </a>
                <ins>$35.00</ins>
            </li>
            <li>
                <a href="shop-detail.html">
                    <img src="/static/index/images/shop/thumb/shop_5.jpg" alt="" />
                    <span class="product-title">Carrot</span>
                </a>
                <ins>$12.00</ins>
            </li>
        </ul>
    </div>
    <div class="widget widget-tags">
        <h3 class="widget-title">产品标签</h3>
        <div class="tagcloud">
            <a href="#">bread</a> <a href="#">food</a> <a href="#">fruits</a> <a href="#">green</a> <a href="#">healthy</a> <a href="#">natural</a> <a href="#">organic store</a> <a href="#">vegatable</a>
        </div>
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

<script type='text/javascript' src='/static/index/js/slick.min.js'></script>
</body>
</html>
