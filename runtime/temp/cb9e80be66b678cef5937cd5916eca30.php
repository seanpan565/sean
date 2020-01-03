<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:66:"D:\web\phpweb\sean\public/../app/index\view\checkout\checkout.html";i:1574596341;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1576206405;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1577791609;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1576824908;}*/ ?>
﻿<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>水果鲜生-订单</title>

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
<!-- 送货表单 -->
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
		<div class="section section-bg-10 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">checkout us</h2>
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
							<li>商品结算</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section section-checkout pt-7 pb-7">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3>Billing details</h3>
						<form>
							<div class="row">
								<div class="col-md-6">
									<label>First name <span class="required">*</span></label>
									<div class="form-wrap">
										<input type="text" name="your-firstname" value="" size="40" />
									</div>
								</div>
								<div class="col-md-6">
									<label>Last name <span class="required">*</span></label>
									<div class="form-wrap">
										<input type="text" name="your-lastname" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Company name</label>
									<div class="form-wrap">
										<input type="text" name="your-company-name" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Country <span class="required">*</span></label>
									<div class="form-wrap">
										<select name="country" id="country">
											<option value="">Australia</option>
											<option value="">Brazil</option>
											<option value="">England</option>
											<option value="">France</option>
											<option value="">United State</option>
											<option value="">Vietnam</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Address <span class="required">*</span></label>
									<div class="form-wrap">
										<input type="text" name="your-address" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Postcode / ZIP</label>
									<div class="form-wrap">
										<input type="text" name="your-postal" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Town/City <span class="required">*</span></label>
									<div class="form-wrap">
										<input type="text" name="your-postal" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Phone</label>
									<div class="form-wrap">
										<input type="text" name="your-phone" value="" size="40" />
									</div>
								</div>
								<div class="col-md-6">
									<label>Email <span class="required">*</span></label>
									<div class="form-wrap">
										<input type="email" name="your-email" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-wrap">
										<input name="createaccount" type="checkbox" id="createaccount" value="1" />
										<span>Create an account?</span>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<h3>Shipping details</h3>
						<form>
							<div class="row">
								<div class="col-md-6">
									<label>First name <span class="required">*</span></label>
									<div class="form-wrap">
										<input type="text" name="your-firstname" value="" size="40" />
									</div>
								</div>
								<div class="col-md-6">
									<label>Last name <span class="required">*</span></label>
									<div class="form-wrap">
										<input type="text" name="your-lastname" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Company name</label>
									<div class="form-wrap">
										<input type="text" name="your-company-name" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Country <span class="required">*</span></label>
									<div class="form-wrap">
										<select name="country" id="country2">
											<option value="">Australia</option>
											<option value="">Brazil</option>
											<option value="">England</option>
											<option value="">France</option>
											<option value="">United State</option>
											<option value="">Vietnam</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Address <span class="required">*</span></label>
									<div class="form-wrap">
										<input type="text" name="your-address" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Postcode / ZIP</label>
									<div class="form-wrap">
										<input type="text" name="your-postal" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Town/City <span class="required">*</span></label>
									<div class="form-wrap">
										<input type="text" name="your-postal" value="" size="40" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Order notes</label>
									<div class="form-wrap">
										<textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="mt-3">Your order</h3>
						<div class="order-review">
							<table class="checkout-review-order-table">
								<thead>
									<tr>
										<th class="product-name">Product</th>
										<th class="product-total">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="product-name">
											Orange Juice&nbsp;<strong class="product-quantity">× 1</strong>
										</td>
										<td class="product-total">
											$12.00
										</td>
									</tr>
									<tr>
										<td class="product-name">
											Aurore Grape&nbsp;<strong class="product-quantity">× 1</strong>
										</td>
										<td class="product-total">
											$9.00
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Subtotal</th>
										<td>$21.00</td>
									</tr>
									<tr>
										<th>Shipping</th>
										<td>
											<ul id="shipping_method">
												<li>
													<input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_free_shipping1" value="free_shipping:1" class="shipping_method" checked="checked">
													<span>Free shipping</span>
												</li>
												<li>
													<input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_local_pickup2" value="local_pickup:2" class="shipping_method">
													<span>Local pickup</span>
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Tax</th>
										<td>$2.10</td>
									</tr>
									<tr>
										<th>Service</th>
										<td>$1.16</td>
									</tr>
									<tr class="order-total">
										<th>Total</th>
										<td><strong>$24.26</strong></td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="checkout-payment">
							<ul class="payment-method">
								<li>
									<input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="">
									<span>货到付款</span>
									<div class="payment-box">
										<p>货到付款</p>
									</div>
								</li>
								<li>
									<input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
									在线支付 <img src="/static/index/images/payment.jpg" alt="">
								</li>
							</ul>
							<div class="text-right text-center-sm">
								<a class="organik-btn mt-6" href="javascript:;">下订单</a>
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
