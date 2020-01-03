<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:60:"D:\web\phpweb\sean\public/../app/index\view\index\index.html";i:1578048182;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1577867210;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1577863894;}*/ ?>
﻿<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title><?php echo $web_tdk['name']; ?>|首页</title>
<meta name="keywords" content="<?php echo $web_tdk['keywords']; ?>" />
<meta name="description" content="<?php echo $web_tdk['desc']; ?>" />
<link rel="stylesheet" href="/static/index/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" href="/static/index/css/font-awesome.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="/static/index/css/ionicons.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="/static/index/css/owl.carousel.css" type="text/css" media="all">
<link rel="stylesheet" href="/static/index/css/owl.theme.css" type="text/css" media="all">
<link rel="stylesheet" href="/static/index/css/settings.css" type="text/css" media="all">
<link rel="stylesheet" href="/static/index/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="/static/index/css/custom.css" type="text/css" media="all">
<link href="/static/index/css/fonts.css" rel="stylesheet">

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
    		<div class="section">
    			<div class="container-fluid">
    				<div class="row">
    					<div class="col-sm-12 p-0">
    						<div id="rev_slider" class="rev_slider fullscreenbanner">
    							<ul>
    								<li data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
    									<img src="/static/index/images/slider/slide_bg_4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" />
    									<div class="tp-caption rs-parallaxlevel-2"
    										 data-x="center" data-hoffset=""
    										 data-y="center" data-voffset="-80"
    										 data-width="['none','none','none','none']"
    										 data-height="['none','none','none','none']"
    										 data-type="image" data-responsive_offset="on"
    										 data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
    										 data-textAlign="['inherit','inherit','inherit','inherit']"
    										 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
    										 data-paddingbottom="[0,0,0,0]"
    										 data-paddingleft="[0,0,0,0]">
    											<img src="/static/index/images/slider/slide_6.png" alt="" />
    									</div>
    									<div class="tp-caption rs-parallaxlevel-1"
    										 data-x="center" data-hoffset=""
    										 data-y="center" data-voffset="-80"
    										 data-width="['none','none','none','none']"
    										 data-height="['none','none','none','none']"
    										 data-type="image" data-responsive_offset="on"
    										 data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
    										 data-textAlign="['inherit','inherit','inherit','inherit']"
    										 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
    										 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
    											<img src="/static/index/images/slider/slide_7.png" alt="" />
    									</div>
    									<a class="tp-caption btn-2 hidden-xs" href="<?php echo url('Shop/index'); ?>"
    										 data-x="['center','center','center','center']"
    										 data-y="['center','center','center','center']" data-voffset="['260','260','260','260']"
    										 data-width="['auto']" data-height="['auto']"
    										 data-type="button" data-responsive_offset="on"
    										 data-responsive="off"
    										 data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(95,189,116);bg:rgba(51, 51, 51, 0);"}]'
    										 data-textAlign="['inherit','inherit','inherit','inherit']"
    										 data-paddingtop="[16,16,16,16]" data-paddingright="[30,30,30,30]"
    										 data-paddingbottom="[16,16,16,16]" data-paddingleft="[30,30,30,30]">查看更多商品
    									</a>
    								</li>
    								<li data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
    									<img src="/static/index/images/slider/slide_bg_5.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" />
    									<div class="tp-caption rs-parallaxlevel-1"
    										 data-x="center" data-hoffset=""
    										 data-y="center" data-voffset="-120"
    										 data-width="['none','none','none','none']"
    										 data-height="['none','none','none','none']"
    										 data-type="image" data-responsive_offset="on"
    										 data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
    										 data-textAlign="['inherit','inherit','inherit','inherit']"
    										 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
    										 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
    											<img src="/static/index/images/slider/slide_8.png" alt="" />
    									</div>
    								</li>
    							</ul>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="section section-bg-1 section-cover pt-17 pb-3">
    			<div class="container">
    				<div class="row">
    					<div class="col-sm-6">
    						<div class="mt-3 mb-3">
    							<img src="/static/index/images/oranges.png" alt="" />
    						</div>
    					</div>
    					<div class="col-sm-6">
    						<div class="mb-1 section-pretitle default-left">水果鲜生</div>
    						<h2 class="section-title mtn-2 mb-3">有机商店</h2>
    						<p class="mb-4">
    							“一个昨天还在新疆库尔勒树上晒太阳的香梨，今天就在顾客的手里”。水果鲜生在全球拥有近200个水果种植基地，超10000亩合作果园，并与20余家物流公司保持着长期合作。所以水果鲜生对于果品质量，用自己花费13年时间打造的专属的鲜果供应链为前提保证。在果品运输到店后进行再次精细筛选才上架销售，真正的让每位消费者能尝到世界各地最优质的鲜果。
    						</p>
    						<a class="organik-btn arrow" href="<?php echo url('Shop/index'); ?>">我们的产品</a>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="section section-bg-2 section-cover pt-14">
    			<div class="container">
    				<div class="row">
    					<div class="col-sm-6">
    						<div class="text-center">
    							<div class="mb-1 section-pretitle white">热卖</div>
    							<h2 class="section-title mtn-2 mb-3">天然鲜榨果汁</h2>
    							<p class="white mb-4">
    								在水果鲜生水果店，消费者不仅能购买到新鲜的全球水果，还能够买到世界各地优选的特色干果零食。在您想立即享用购买的水果时，门店提供免费的果切打包服务，让您立即尝鲜。在您口渴想要喝果饮时，门店还有免费榨汁服务，让您新鲜畅饮。
    							</p>
    							<div class="countdown-wrap mb-4">
    								<div class="countdown-content">
    									<div class="pl-clock countdown-bar" data-time="2017/10/10"></div>
    								</div>
    							</div>
    							<a class="organik-btn brown" href="javascript:;">现在抢购</a>
    						</div>
    					</div>
    					<div class="col-sm-6">
    						<div class="text-center floating">
    							<img src="/static/index/images/can.png" alt="" />
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

    		<div class="section pt-12 pb-9">
    			<div class="container">
    				<div class="row">
    					<div class="col-sm-12">
    						<div class="text-center mb-1 section-pretitle">Offical</div>
    						<h2 class="text-center section-title mtn-2">官方精选</h2>
    						<div class="organik-seperator center">
    							<span class="sep-holder"><span class="sep-line"></span></span>
    							<div class="sep-icon"><i class="organik-flower"></i></div>
    							<span class="sep-holder"><span class="sep-line"></span></span>
    						</div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="product-grid masonry-grid-post">
                            <?php if(is_array($goodsList) || $goodsList instanceof \think\Collection || $goodsList instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    						<div class="col-md-3 col-sm-6 product-item masonry-item text-center juice">
                                <!-- 热卖4 -->
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
    							</div>
    							<div class="product-info">
                                    <a href="<?php echo url('Shopdateil/index',array('id'=>$vo['id'])); ?>">
                                        <h2 class="title"><?php echo $vo['goods_name']; ?></h2>
                                        <span class="price">
                                            <del>￥<?php echo $vo['goods_price']; ?></del>
                                            <ins>￥<?php echo $vo['goods_vip']; ?></ins>
                                        </span>
                                    </a>
    							</div>
                                <!-- 热卖 -->
    						</div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
    					</div>
    				</div>
    			</div>
    		</div>

    		<div class="section section-bg-3 pt-6 pb-6">
    			<div class="container">
    				<div class="row">
    					<div class="col-sm-12">
    						<div class="text-center mb-1 section-pretitle">水果鲜生</div>
    						<h2 class="text-center section-title mtn-2">有机商店</h2>
    						<div class="organik-seperator mb-9 center">
    							<span class="sep-holder"><span class="sep-line"></span></span>
    							<div class="sep-icon"><i class="organik-flower"></i></div>
    							<span class="sep-holder"><span class="sep-line"></span></span>
    						</div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col-md-4">
    						<div class="organik-special-title">
    							<div class="number">01</div>
    							<div class="title">基础</div>
    						</div>
    						<p>奇果鲜生在自身拥有着近200个水果种植基地，超10000亩合作果园，20余家物流长期合作伙伴的前提下，从基础上保证了水果的供应品质。让奇果鲜生水果店的水果品种能长期保持多样性和新鲜度</p>
    						<div class="mb-8"></div>
    						<div class="organik-special-title">
    							<div class="number">02</div>
    							<div class="title">铺垫</div>
    						</div>
    						<p>奇果鲜生打造了一站式果购体验，将门店经营产品扩展为集进口水果、国产水果、特色干果、果饮、果茶、果捞为一体的综合性果品购物门店</p>
    					</div>
    					<div class="col-md-4">
    						<div class="mb-8"></div>
    					</div>
    					<div class="col-md-4">
    						<div class="organik-special-title align-right">
    							<div class="number">03</div>
    							<div class="title">创新</div>
    						</div>
    						<p>奇果鲜生专属研发的果品导购新科技，以每位消费者为服务对象，根据消费者“喜好、当季、价格、减肥等不同属性的关键词”定制化推荐出最适合的水果</p>
    						<div class="mb-8"></div>
    						<div class="organik-special-title align-right">
    							<div class="number">04</div>
    							<div class="title">优化</div>
    						</div>
    						<p>奇果鲜生水果店有着自己独有的智能门店管理系统，为每位消费者进行着数据积累、分析，表现为消费者会接收到专属定制化的果品、活动推荐，也会根据消费者定制节日关怀和健康数据</p>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="section border-bottom mt-6 mb-5">
    			<div class="container">
    				<div class="row">
    					<div class="organik-process">
    						<div class="col-md-3 col-sm-6 organik-process-small-icon-step">
    							<div class="icon">
    								<i class="organik-delivery"></i>
    							</div>
    							<div class="content">
    								<div class="title">免运费</div>
    								<div class="text">订单金额满 ￥200</div>
    							</div>
    						</div>
    						<div class="col-md-3 col-sm-6 organik-process-small-icon-step">
    							<div class="icon">
    								<i class="organik-hours-support"></i>
    							</div>
    							<div class="content">
    								<div class="title">用户支持</div>
    								<div class="text">时间 24/7</div>
    							</div>
    						</div>
    						<div class="col-md-3 col-sm-6 organik-process-small-icon-step">
    							<div class="icon">
    								<i class="organik-credit-card"></i>
    							</div>
    							<div class="content">
    								<div class="title">安全支付</div>
    								<div class="text">支持支付宝/微信</div>
    							</div>
    						</div>
    						<div class="col-md-3 col-sm-6 organik-process-small-icon-step">
    							<div class="icon">
    								<i class="organik-lettuce"></i>
    							</div>
    							<div class="content">
    								<div class="title">优质的售后</div>
    								<div class="text">提供最贴心的服务</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

    		<!-- <div class="section pt-12 pb-9">
    			<div class="container">
    				<div class="row">
    					<div class="col-sm-12">
    						<div class="text-center mb-1 section-pretitle">Discover</div>
    						<h2 class="text-center section-title mtn-2">我们的产品</h2>
    						<div class="organik-seperator center">
    							<span class="sep-holder"><span class="sep-line"></span></span>
    							<div class="sep-icon"><i class="organik-flower"></i></div>
    							<span class="sep-holder"><span class="sep-line"></span></span>
    						</div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col-sm-12 p-0">
    						<div class="text-center">
    							<ul class="masonry-filter">
    								<li><a href="javascript:;" data-filter="" class="active">所有</a></li>
    								<li><a href="javascript:;" data-filter=".dried">蜜饯</a></li>
    								<li><a href="javascript:;" data-filter=".fruits">水果</a></li>
    								<li><a href="javascript:;" data-filter=".vegetables">蔬菜</a></li>
    								<li><a href="javascript:;" data-filter=".juice">果汁</a></li>
    							</ul>
    						</div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="product-grid masonry-grid-post">
    						<div class="col-md-3 col-sm-6 product-item masonry-item text-center fruits juice">
    							<div class="product-thumb">
    								<a href="shop-detail.html">
    									<div class="badges">
    										<span class="hot">Hot</span>
    									</div>
    									<img src="/static/index/images/shop/shop_2.jpg" alt="" />
    								</a>
    								<div class="product-action">
    									<span class="add-to-cart"><a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Add to cart"></a></span>
    									<span class="wishlist"><a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a></span>
    									<span class="quickview"><a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Quickview"></a></span>
    									<span class="compare"><a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Compare"></a></span>
    								</div>
    							</div>
    							<div class="product-info">
    								<a href="shop-detail.html">
    									<h2 class="title"> 山葡萄</h2>
    									<span class="price">￥9.00</span>
    								</a>
    							</div>
    						</div>

    					</div>
    					<div class="loadmore-contain">
    						<a class="organik-btn small" href="javascript:;"> 查看更多 </a>
    					</div>
    				</div>
    			</div>
    		</div> -->

    		<div class="section bg-light pt-10 pb-10">
    			<div class="container">
    				<div class="row">
    					<div class="col-sm-12">
    						<div class="text-center mb-1 section-pretitle">我们的优势</div>
    						<h2 class="text-center section-title mtn-2">有机产品</h2>
    						<div class="organik-seperator center mb-6">
    							<span class="sep-holder"><span class="sep-line"></span></span>
    							<div class="sep-icon"><i class="organik-flower"></i></div>
    							<span class="sep-holder"><span class="sep-line"></span></span>
    						</div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col-sm-6">
    						<div class="accordion icon-left" id="accordion1">
    							<div class="accordion-group toggle">
    								<div class="accordion-heading toggle_title active">
    									<a class="accordion-toggle" data-toggle="collapse" aria-expanded="true" aria-controls="collapse1" href="javascript:;">
    										从更多的营养中受益
    									</a>
    									<span class="icon"><i class="ion-heart"></i></span>
    								</div>
    								<div id="collapse1" class="accordion-body collapse in">
    									<div class="accordion-inner">
    										<p>
    											有机食品比商业食品含有更多的营养物质——维生素、矿物质、酶和微量营养素——因为土壤是通过负责任的标准进行可持续管理和营养的。有机农业支持生态生计，或与自然和谐相处的农业。
    										</p>
    									</div>
    								</div>
    							</div>
    							<div class="accordion-group toggle">
    								<div class="accordion-heading toggle_title">
    									<a class="accordion-toggle" data-toggle="collapse" data-parent="collapse2" href="javascript:;">
    										减少污染，保护水土
    									</a>
    									<span class="icon"><i class="ion-chatboxes"></i></span>
    								</div>
    								<div id="collapse2" class="accordion-body toggle_content collapse">
    									<div class="accordion-inner">
    										<p>
    											有机农业考虑农业干预对农业生态系统的中长期影响。它的目的是在生产粮食的同时建立一个生态平衡，以防止土壤肥力或害虫问题
    										</p>
    									</div>
    								</div>
    							</div>
    							<div class="accordion-group toggle">
    								<div class="accordion-heading toggle_title">
    									<a class="accordion-toggle" data-toggle="collapse" data-parent="collapse3" href="javascript:;">
    										保持农业多样性
    									</a>
    									<span class="icon"><i class="ion-lightbulb"></i></span>
    								</div>
    								<div id="collapse3" class="accordion-body toggle_content collapse">
    									<div class="accordion-inner">
    										<p>
    											有机农民是各级生物多样性的保管人和使用者。在基因水平上，传统的和适应的种子和品种因其更强的抗病性和对气候胁迫的适应能力而受到青睐。
    										</p>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    					<div class="col-sm-6">
    						<div class="text-center app-desc floating">
    							<img src="/static/index/images/app-desc.png" alt="" />
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>



    		<div class="section pt-12">
    			<div class="container">
    				<div class="row">
    					<div class="col-sm-12">
    						<div class="text-center mb-1 section-pretitle">最新的</div>
    						<h2 class="text-center section-title mtn-2">我们的文章</h2>
    						<div class="organik-seperator center mb-6">
    							<span class="sep-holder"><span class="sep-line"></span></span>
    							<div class="sep-icon"><i class="organik-flower"></i></div>
    							<span class="sep-holder"><span class="sep-line"></span></span>
    						</div>
    					</div>
    				</div>
    				<div class="row">

                        <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="col-md-4">
                            <div class="blog-grid-item">
                                <div class="post-thumbnail">
                                    <a href="<?php echo url('article/article',array('id'=>$vo['id'])); ?>">
                                        <img src="<?php echo geturl($vo['thumb']); ?>" alt="<?php echo $vo['title']; ?>" />
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <span class="posted-on"><i class="ion-calendar"></i><span><?php echo date("Y-m-d",$vo['create_time']); ?></span></span>
                                        <span class="comment"><i class="ion-chatbubble-working"></i><?php echo $vo['read_count']; ?></span>
                                    </div>
                                    <a href="<?php echo url('article/article',array('id'=>$vo['id'])); ?>">
                                        <h1 class="entry-title"><?php echo $vo['title']; ?></h1>
                                    </a>
                                    <div class="entry-content">
                                        <?php echo $vo['description']; ?>
                                    </div>
                                    <div class="entry-more">
                                        <a href="<?php echo url('article/article',array('id'=>$vo['id'])); ?>">阅读更多</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

    				</div>
    				<div class="row">
    					<div class="col-sm-12">
    						<hr class="mt-7 mb-3" />
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
    								<a href="javascript:;">
    									<img src="/static/index/images/client/client_1.png" alt="" />
    								</a>
    							</div>
    							<div class="client-item">
    								<a href="javascript:;">
    									<img src="/static/index/images/client/client_2.png" alt="" />
    								</a>
    							</div>
    							<div class="client-item">
    								<a href="javascript:;">
    									<img src="/static/index/images/client/client_3.png" alt="" />
    								</a>
    							</div>
    							<div class="client-item">
    								<a href="javascript:;">
    									<img src="/static/index/images/client/client_4.png" alt="" />
    								</a>
    							</div>
    							<div class="client-item">
    								<a href="javascript:;">
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

    <script type="text/javascript" src="/static/index/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="/static/index/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/index/js/modernizr-2.7.1.min.js"></script>
    <script type="text/javascript" src="/static/index/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="/static/index/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="/static/index/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery.isotope.init.js"></script>
    <script type="text/javascript" src="/static/index/js/script.js"></script>

    <script type="text/javascript" src="/static/index/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/static/index/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="/static/index/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/static/index/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/static/index/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/static/index/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/static/index/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/static/index/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/static/index/js/extensions/revolution.extension.parallax.min.js"></script>
</body>
</html>
