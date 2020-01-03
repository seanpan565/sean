<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:70:"D:\web\phpweb\sean\public/../app/index\view\shopdateil\shopdateil.html";i:1578048375;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1576206405;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1577867210;s:53:"D:\web\phpweb\sean\app\index\view\common\sidebar.html";i:1574068966;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1577863894;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<title><?php echo $web_tdk['name']; ?>|<?php echo $goods['goods_name']; ?></title>
<meta name="keywords" content="<?php echo $web_tdk['keywords']; ?>" />
<meta name="description" content="<?php echo $web_tdk['desc']; ?>" />
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
						<h2 class="page-title text-center">product us</h2>
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
							<li>商品详情</li>
							<li><?php echo $goods['goods_name']; ?></li>
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

										<!-- 图集开始 -->
										<?php if($goods_atlas == ''): ?>
										<div>
											<div class="image-thumb">
												<a href="images/shop/large/shop_1.jpg" data-rel="prettyPhoto[gallery]">
													<img src="/static/index/images/shop/shop_1.jpg" alt="" />
												</a>
											</div>
										</div>
										<?php else: if(is_array($goods_atlas) || $goods_atlas instanceof \think\Collection || $goods_atlas instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_atlas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$src): $mod = ($i % 2 );++$i;?>
											<div>
												<div class="image-thumb">
													<a href="images/shop/large/shop_1.jpg" data-rel="prettyPhoto[gallery]">
														<img src="/uploads/admin/goods_thumb<?php echo $src['goods_atlas_url']; ?>" alt="" />
													</a>
												</div>
											</div>
											<?php endforeach; endif; else: echo "" ;endif; endif; ?>
										<!-- 图集结束 -->

									</div>
								</div>
								<div class="image-gallery-nav">
									<!-- 图集开始 -->
									<?php if($goods_atlas == ''): ?>
									<div class="image-nav-item">
										<div class="image-thumb">
											<img src="/static/index/images/shop/thumb/shop_1.jpg" alt="" />
										</div>
									</div>
									<?php else: if(is_array($goods_atlas) || $goods_atlas instanceof \think\Collection || $goods_atlas instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_atlas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$src): $mod = ($i % 2 );++$i;?>
										<div class="image-nav-item">
											<div class="image-thumb">
												<img src="/uploads/admin/goods_thumb<?php echo $src['goods_atlas_url']; ?>" alt="" />
											</div>
										</div>
										<?php endforeach; endif; else: echo "" ;endif; endif; ?>
									<!-- 图集结束 -->

								</div>
							</div>
							<div class="col-md-6">
								<div class="summary">
									<h1 class="product-title"><?php echo $goods['goods_name']; ?></h1>
									<!-- <div class="product-rating">
										<div class="star-rating">
											<span style="width:100%"></span>
										</div>
										<i>(2 用户评价)</i>
									</div> -->
									<div class="product-price">
										<del>￥<?php echo $goods['goods_price']; ?></del>
										<ins>￥<?php echo $goods['goods_vip']; ?></ins>
									</div>
									<div class="mb-3">
										<p><?php echo $goods['goods_title']; ?></p>
									</div>
									<form class="cart">
										<div class="quantity-chooser">
											<div class="quantity">
												<input type="number" id="qty-1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" min="1" max="<?php echo $goods_content['goods_inventory']; ?>">
												<!-- <span class="qty-minus" data-min="1"><i class="ion-ios-minus-outline"></i></span>
												<input type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" min="1" max="5">
												<span class="qty-plus" data-max=""><i class="ion-ios-plus-outline"></i></span> -->
											</div>
										</div>
										<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
										<button type="button" class="single-add-to-cart addcart" style="height: 40px;padding:5px;" data-id="<?php echo $goods['id']; ?>">加入购物车</button>
										<button type="button" class="single-add-to-cart goods-buy" style="height: 40px;padding:5px;" data-id="<?php echo $goods['id']; ?>">立即购买</button>
									</form>
									<div class="product-tool">
										<?php if($collect == ''): ?>
											<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="加入收藏夹" class="collect" data-id="<?php echo $goods['id']; ?>">加入收藏</a>
										<?php else: ?>
									    	<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="已收藏" class="collect" data-id="<?php echo $goods['id']; ?>">已收藏</a>
										<?php endif; ?>
										<!-- <a href="javascript:;" data-toggle="tooltip" data-placement="top" title="加入收藏夹" class="collect" data-id="<?php echo $goods['id']; ?>">加入收藏 </a> -->
										<a class="compare" href="javascript:;" data-toggle="tooltip" data-placement="top" title="库存">库存： <?php echo $goods_content['goods_inventory']; ?> </a>
                                        <input type="hidden" value="<?php echo $goods_content['goods_inventory']; ?>" class="inventory">
									</div>
									<div class="product-meta">
										<table>
											<tbody>
												<tr>
													<td class="label">商品分类</td>
													<?php if(is_array($goodsCate) || $goodsCate instanceof \think\Collection || $goodsCate instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
													<td><a href="<?php echo url('shop/shopList',array('id'=>$vo["id"])); ?>"><?php if($goods['goods_cate_id'] == $vo['id']): ?> <?php echo $vo['name']; endif; ?></a></td>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
												</tr>
												<tr>
													<td class="label">销量</td>
													<td class="share">
														<span><?php echo $goods_content['goods_sales']; ?></span>
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
											<a data-toggle="tab" href="#tab-description" aria-expanded="true">描述</a>
										</li>
										<li class="">
											<a data-toggle="tab" href="#tab-reviews" aria-expanded="false">评论</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade active in" id="tab-description">
											<p>
												<?php echo $goods_content['goods_contents']; ?>
											</p>
										</div>
										<div id="tab-reviews" class="tab-pane fade">
											<div class="single-comments-list mt-0">
												<div class="mb-2">
													<h2 class="comment-title"><?php echo $goods['goods_name']; ?>评论数(<?php echo $goods_comment_count; ?>)</h2>
												</div>
												<ul class="comment-list">
													<?php if(is_array($goods_comment) || $goods_comment instanceof \think\Collection || $goods_comment instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
													<li>
														<div class="comment-container">
															<div class="comment-author-vcard">
																<img alt="" src="<?php echo $vo['thumb']; ?>" />
															</div>
															<div class="comment-author-info">
																<span class="comment-author-name">评论人：<?php echo $vo['user_name']; ?></span>
																<a href="javascript:;" class="comment-date">评论时间：<?php echo date("Y-m-d",$vo['comment_create_time']); ?></a>
																<p><?php echo $vo['goods_comment']; ?></p>
															</div>
														</div>
															<ul class="children">
																<li>
																	<div class="comment-container">
																		<?php if($vo['reply_content'] != ''): ?>
																		<div class="comment-author-vcard">
																			<img alt="" src="/static/index/images/avatar/avatar.png" />
																		</div>
																		<?php else: endif; ?>
																		<div class="comment-author-info">
																			<?php if($vo['reply_content'] != ''): ?>
																			<span class="comment-author-name">回复</span>
																			<?php else: endif; ?>
																			<p><?php echo $vo['reply_content']; ?></p>
																		</div>
																	</div>
																</li>
															</ul>
													</li>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
												</ul>
											</div>
											<!-- <div class="single-comment-form mt-0">
												<div class="mb-2">
													<h2 class="comment-title">发表评论</h2>
												</div>
												<form class="comment-form">
													<div class="row">
														<div class="col-md-12">
															<textarea id="comment" name="comment" cols="45" rows="5" placeholder="评价内容 *"></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<input id="author" name="author" type="text" value="" size="30" placeholder="姓名 *" class="mb-2">
														</div>
														<div class="col-md-4">
															<input id="email" name="email" type="email" value="" size="30" placeholder="邮箱 *" class="mb-2">
														</div>
													</div>
													<div class="row">
														<div class="col-md-2">
															<input name="submit" type="submit" id="submit" class="btn btn-alt btn-border" value="提交评价">
														</div>
													</div>
												</form>
											</div> -->
										</div>
									</div>
								</div>
								<div class="related">
									<div class="related-title">
										<div class="text-center mb-1 section-pretitle fz-34">相关推荐</div>
									</div>
									<div class="product-carousel p-0" data-auto-play="true" data-desktop="3" data-laptop="2" data-tablet="2" data-mobile="1">

										<!-- 相关推荐开始 -->
										<div class="product-item text-center">
											<div class="product-thumb">
												<a href="shop-detail.html">
													<div class="badges">
														<span class="hot">热卖</span>
													</div>
													<img src="/static/index/images/shop/shop_5.jpg" alt="" />
												</a>
												<div class="product-action">
													<span class="add-to-cart">
														<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
													</span>
													<span class="wishlist">
														<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
													</span>
													<span class="quickview">
														<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
													</span>
													<span class="compare">
														<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Compare"></a>
													</span>
												</div>
											</div>
											<div class="product-info">
												<a href="javascript:;">
													<h2 class="title">胡萝卜</h2>
													<span class="price">￥12.00</span>
												</a>
											</div>
										</div>
										<!-- 相关推荐结束 -->

									</div>
								</div>
							</div>
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
		//商品id
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
		var count = $('.qty').val();
		//商品库存
		var inventory = $('.inventory').val();

		if (parseInt(count) > parseInt(inventory)) {
			layer.msg('库存商品不足');
			return false;
		}
		//商品数量小于1
		if (parseInt(count) < 1) {
			layer.msg('至少需要选择一件商品', {icon: 2});
			return false;
		}
		//判断用户有没有登录
	    if ($("[name = user_id]").val() == 0) {
	        layer.msg('请先登录网站', {icon: 2});
	        return false;
	    }
		$.ajax({
			url:"<?php echo url('cart/add_cart'); ?>",
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


	//立即购买
	$('.goods-buy').click(function (){
		//商品id
		var id = $(this).attr('data-id');
		//商品数量
		var count = $('.qty').val();
		//商品库存
		var inventory = $('.inventory').val();

		if (parseInt(count) > parseInt(inventory)) {
			layer.msg('库存商品不足');
			return false;
		}
		//商品数量小于1
		if (parseInt(count) < 1) {
			layer.msg('至少需要购买一件商品', {icon: 2});
			return false;
		}
		//判断用户有没有登录
	    if ($("[name = user_id]").val() == 0) {
	        layer.msg('请先登录网站', {icon: 2});
	        return false;
	    }
		$.ajax({
			url:"<?php echo url('shopdateil/checkStock'); ?>",
			type:'post',
			dataType:'json',
			data:{goods_id:id,goods_count:count},
			success:function (data){
				if (data.status == 1) {
					window.location.href = "/index/Order/buy" + '/goods_id/' + id + '/goods_count/' + count;
				} else {
					layer.msg(data.msg);
				}
			}
		},'json');
		return false;
	});


</script>
<script type='text/javascript' src='/static/index/js/slick.min.js'></script>
</body>
</html>
