<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:58:"D:\web\phpweb\sean\public/../app/index\view\shop\shop.html";i:1575602222;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1576206405;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1577867210;s:53:"D:\web\phpweb\sean\app\index\view\common\sidebar.html";i:1574068966;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1577863894;}*/ ?>
﻿<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>水果鲜生-商品列表</title>

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
		<div class="section section-bg-10 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">shop us</h2>
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
							<li>商品列表</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-7 pb-7">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-push-3">
						<div class="shop-filter">
							<div class="col-md-6">
								<!-- <p class="result-count">显示23项结果中的1-12</p> -->
							</div>
							<div class="col-md-6">
								<div class="shop-filter-right">
									<div class="switch-view">
										<a href="shop-list.html" class="switcher" data-toggle="tooltip" data-placement="top" title="" data-original-title="List"><i class="ion-navicon"></i></a>
										<!-- <a href="shop.html" class="switcher active" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid"><i class="ion-grid"></i></a> -->
									</div>
									<form class="commerce-ordering">
										<select name="orderby" class="orderby">
											<option value="" selected="selected">按人气排序</option>
											<option value="">按平均评级排序</option>
											<option value="">按价格排序:从低到高</option>
											<option value="">按价格排序:从高到低</option>
										</select>
									</form>
								</div>
							</div>
						</div>
						<div class="category-carousel-2 mb-3" data-auto-play="true" data-desktop="3" data-laptop="3" data-tablet="2" data-mobile="1">
                            <!-- 显示六件开始 -->
							<!-- <div class="cat-item">
								<div class="cats-wrap" data-bg-color="#f8c9c2">
									<a href="#">
										<img src="/static/index/images/category/cate_7.png" alt="" />
										<h2 class="category-title">
											萝卜干 <mark class="count">(6)</mark>
										</h2>
									</a>
								</div>
							</div> -->
                            <!-- 显示六件结束 -->
						</div>
						<div class="product-grid">
                            <?php if(is_array($goodsList) || $goodsList instanceof \think\Collection || $goodsList instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<div class="col-md-4 col-sm-6 product-item text-center mb-3">
								<div class="product-thumb">
									<a href="<?php echo url('Shopdateil/index',array('id'=>$vo['id'])); ?>">
										<div class="badges">
                                            <?php if($vo['goods_sales'] > '17'): ?>
											<span class="hot">热卖</span>
											<?php endif; if($vo['goods_recommend'] == '1'): ?>
											<span class="onsale">推荐!</span>
											<?php endif; ?>
										</div>
										<img src="<?php echo $vo['goods_thumb']; ?>" alt="<?php echo $vo['goods_name']; ?>" />
									</a>
									<div class="product-action">
										<span class="add-to-cart">
											<a href="javascript:;" data-toggle="tooltip" class="addcart" data-placement="top" title="加入购物车" data-id="<?php echo $vo['id']; ?>"></a>
										</span>
										<span class="wishlist">
											<?php if(in_array($vo['id'],$collect)): ?>
												<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="已收藏" class="collect" data-id="<?php echo $vo['id']; ?>"></a>
											<?php else: ?>
										    	<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="加入收藏夹" class="collect" data-id="<?php echo $vo['id']; ?>"></a>
											<?php endif; ?>
										</span>
										<span class="compare">
											<a href="javascript:;" data-toggle="tooltip" class="" data-placement="top" title="库存"></a>
										</span>
									</div>
								</div>
								<div class="product-info">
									<a href="<?php echo url('Shopdateil/index'); ?>">
										<h2 class="title"><?php echo $vo['goods_name']; ?></h2>
										<span class="price">
											<del>￥<?php echo $vo['goods_price']; ?></del>
											<ins>￥<?php echo $vo['goods_vip']; ?></ins>
										</span>
									</a>
								</div>
							</div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="pagination">

						</div>
					</div>
					<div class="col-md-3 col-md-pull-9">
						<div class="sidebar">
    <div class="widget widget-product-search">
        <form class="form-search">
            <input type="text" class="search-field" placeholder="搜索产品…" value="" name="s" />
            <input type="submit" value="Search" />
        </form>
    </div>
    <div class="widget widget-product-categories">
        <h3 class="widget-title">产品类别</h3>
        <ul class="product-categories">
            <?php if(is_array($goodsCate) || $goodsCate instanceof \think\Collection || $goodsCate instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo url('shop/shopList',array('id'=>$vo['id'])); ?>"><?php echo $vo['name']; ?></a> </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
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
            <?php if(is_array($goodsVice) || $goodsVice instanceof \think\Collection || $goodsVice instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsVice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <a href="<?php echo url('Shopdateil/index',array('id'=>$vo['id'])); ?>">
                    <img src="<?php echo $vo['goods_thumb']; ?>" alt="<?php echo $vo['goods_name']; ?>" />
                    <span class="product-title"><?php echo $vo['goods_name']; ?></span>
                </a>
                <del>￥<?php echo $vo['goods_price']; ?></del>
                <ins>￥<?php echo $vo['goods_vip']; ?></ins>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <!-- <div class="widget widget-tags">
        <h3 class="widget-title">产品标签</h3>
        <div class="tagcloud">
            <a href="#">果干</a>
            <a href="#">蔬菜</a>
        </div>
    </div> -->
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
<script>
	//layer弹窗组件
	layui.use(['form', 'layer'],
	function() {
		$ = layui.jquery;
		var form = layui.form,
		layer = layui.layer;
	});

    //加入收藏
	$('.collect').click(function (){
        var id = $(this).attr('data-id');
		$.ajax({
            url:"<?php echo url('shopdateil/collect'); ?>",
			type:'post',
			dataType:'json',
			data:{id:id},
			success:function (data){
				if (data.status == 1) {
					layer.msg(data.msg);
				} else {
					layer.msg(data.msg);
				}
			}
		},'json');
		return false;
	});

	//加入购物车
	$('.addcart').click(function (){
		//商品id
		var id = $(this).attr('data-id');
		//商品数量
		var count = '1';

		$.ajax({
			url:"<?php echo url('shop/add_cart'); ?>",
			type:'post',
			dataType:'json',
			data:{goods_id:id,goods_count:count},
			success:function (data){
				if (data.status == 1) {
					layer.msg(data.msg);
				} else {
					layer.msg(data.msg);
				}
			}
		},'json');
		return false;
	});

</script>

<script type="text/javascript" src="/static/index/js/core.min.js"></script>
<script type="text/javascript" src="/static/index/js/widget.min.js"></script>
<script type="text/javascript" src="/static/index/js/mouse.min.js"></script>
<script type="text/javascript" src="/static/index/js/slider.min.js"></script>
<script type="text/javascript" src="/static/index/js/jquery.ui.touch-punch.js"></script>
<script type="text/javascript" src="/static/index/js/price-slider.js"></script>
</body>
</html>
