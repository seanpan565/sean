<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:58:"D:\web\phpweb\sean\public/../app/index\view\order\buy.html";i:1576146723;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1576206405;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1574596376;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1576824908;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>确认订单</title>

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
						<h2 class="page-title text-center">buy</h2>
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
							<li>确认订单</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-7 pb-7">
			<div class="container">
				<div class="row">
					<form action="<?php echo url('order/buyDo'); ?>" method="post">
						<div class="col-md-8">
							<table class="table shop-cart">
								<tbody>
	                            <?php if(is_array($data['0']) || $data['0'] instanceof \think\Collection || $data['0'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['0'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<tr class="cart_item">
										<td class="product-thumbnail">
											<a href="<?php echo url('Shopdateil/index',array('id'=>$vo['goods_id'])); ?>">
												<img src="<?php echo $vo['goods_thumb']; ?>" alt="<?php echo $vo['goods_name']; ?>">
											</a>
										</td>
										<td class="product-info">
											<a href="<?php echo url('Shopdateil/index',array('id'=>$vo['goods_id'])); ?>"><?php echo $vo['goods_name']; ?></a>
											<span class="sub-title">关键词：<?php echo $vo['goods_keyword']; ?></span>
											<span class="sub-title" style="text-decoration: line-through;">原价：￥<?php echo $vo['goods_price']; ?></span>
										</td>
										<td class="product-quantity">
											<span class="sub-title">数量：x<?php echo $vo['goods_count']; ?></span>
										</td>
										<td class="product-subtotal">
											<span class="sub-title">会员价：￥<?php echo $vo['goods_vip']; ?></span>
										</td>
	                                    <td class="product-subtotal">
											<span class="sub-title">合计:￥<?php echo $vo['total_price']; ?></span>
										</td>
									</tr>
	                            <?php endforeach; endif; else: echo "" ;endif; ?>
									<tr>
										<td colspan="5" class="actions">
											<a class="continue-shopping" href="<?php echo url('cart/index'); ?>"> 返回购物车</a>
	                                        <span class="update-cart" style="border:0;">小计:￥<?php echo $data['1']; ?></span>
										</td>
									</tr>
								</tbody>
							</table>
							<div style="margin-right: 20px;color: #5fbd74;text-transform: uppercase;">
								<label>买家留言：</label>
								<input type="text" title="选填,对本次交易的说明（建议填写已经和卖家达成一致的说明）" placeholder="选填,建议填写和卖家达成一致的说明" name="order_msg">
								<!-- <p class="error">最多输入500个字符</p> -->
							</div>
						</div>
						<div class="col-md-4">

	                        <div class="cart-totals">
	                            <table>
	                                <tbody>
	                                    <tr class="cart-subtotal">
	                                        <th>运费</th>
	                                        <td>免费送货</td>
	                                    </tr>
	                                    <tr class="shipping">
	                                        <th>姓名</th>
	                                        <td><?php echo $default['address_name']; ?></td>
	                                    </tr>
	                                    <tr class="order-total">
	                                        <th>电话</th>
	                                        <td><?php echo $default['address_phone']; ?></td>
	                                    </tr>
	                                    <tr class="cart-subtotal">
	                                        <th>地址</th>
	                                        <td style="height:150px;width:200px;padding:1px 1px;"><?php echo $default['address_site']; ?></td>
	                                    </tr>
	                                    <tr class="order-total">
	                                        <th>总价</th>
	                                        <td>￥<?php echo $data['1']; ?></td>
	                                    </tr>
	                                </tbody>
	                            </table>
								<input type="hidden" name="address_id" value="<?php echo $default['id']; ?>">
								<input type="hidden" name="goods_id" value="<?php echo $goods_id; ?>">
								<input type="hidden" name="goods_count" value="<?php echo $goods_count; ?>">
	                            <div class="proceed-to-checkout">
									<button type="submit"
									style="width: 100%;
									    display: inline-block;
									    font-size: 13px;
									    letter-spacing: 3px;
									    font-weight: 400;
									    height: 48px;
									    line-height: 46px;
									    padding: 0 30px;
									    color: #fff;
									    display: block;
									    margin-left: 0;
									    background-color: #5fbd74;
									    text-align: center;
									    text-transform: uppercase;">确认订单
									</button>
	                            </div>
	                        </div>

						</div>
					</form>
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
