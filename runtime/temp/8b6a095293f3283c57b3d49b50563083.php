<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:67:"D:\web\phpweb\sean\public/../app/index\view\user_message\index.html";i:1578040750;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1576206405;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1577867210;s:58:"D:\web\phpweb\sean\app\index\view\common\user-sidebar.html";i:1577869481;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1577863894;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>水果鲜生-会员安全</title>
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
        <li class="layui-nav-item"><a href="<?php echo url('UserMessage/index'); ?>" title="安全设置">安全设置</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('user/addresslist'); ?>" title="收货地址">收货地址</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('user/collect'); ?>" title="我的收藏">我的收藏</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('UserOrder/index'); ?>" title="订单管理">订单管理</a></li>
        <li class="layui-nav-item"><a href="javascript:;" title="退货售后">退货售后</a></li>
        <!-- <li class="layui-nav-item"><a href="javascript:;" title="商品评价">商品评价</a></li>
        <li class="layui-nav-item"><a href="javascript:;" title="账单明细">账单明细</a></li> -->
        <span class="layui-nav-bar" style="top: 272.5px; height: 0px; opacity: 0;"></span>
    </ul>
</div>


					<div class="col-md-9">
                        <div class="layui-form-item">
						    <label class="layui-form-label" style="width:120px;">登录密码</label>
							<div class="layui-form-mid layui-word-aux">为保证您购物安全，建议您定期更改密码以保护账户安全。</div>
						    <div class="layui-form-mid layui-word-aux" style="float:right;"><button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><a href="<?php echo url('UserMessage/password'); ?>">修改密码</a></button></div>
						</div>

						<div class="layui-form-item">
						    <label class="layui-form-label" style="width:120px;">手机验证</label>
							<?php if($user['user_mobile'] == ''): ?>
							<div class="layui-form-mid layui-word-aux">绑定手机号码，为您资产账户安全加把锁</div>
							<div class="layui-form-mid layui-word-aux" style="float:right;"><button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><a href="<?php echo url('UserMessage/bindMobile'); ?>">绑定手机</a></button></div>
							<?php else: ?>
							<div class="layui-form-mid layui-word-aux">您验证的手机<?php echo $user['user_mobile']; ?>，若已丢失或停用，请立即更换</div>
							<div class="layui-form-mid layui-word-aux" style="float:right;"><button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><a href="<?php echo url('UserMessage/upMobile'); ?>">立即更换</a></button></div>
							<?php endif; ?>
						</div>

						<div class="layui-form-item">
						    <label class="layui-form-label" style="width:120px;">邮箱验证</label>
							<?php if($user['user_email'] == ''): ?>
							<div class="layui-form-mid layui-word-aux">绑定邮箱，为您资产账户安全加把锁</div>
							<div class="layui-form-mid layui-word-aux" style="float:right;"><button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><a href="<?php echo url('UserMessage/bindEmail'); ?>">绑定邮箱</a></button></div>
							<?php else: ?>
							<div class="layui-form-mid layui-word-aux">您验证的邮箱<?php echo $user['user_email']; ?>，若已丢失或停用，请立即更换</div>
							<div class="layui-form-mid layui-word-aux" style="float:right;"><button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><a href="<?php echo url('UserMessage/upEmail'); ?>">立即更换</a></button></div>
							<?php endif; ?>
						</div>

						<div class="layui-form-item">
							<label class="layui-form-label" style="width:120px;">安全问题(未做)</label>
							<div class="layui-form-mid layui-word-aux">保护账户安全，验证您身份的工具之一</div>
							<div class="layui-form-mid layui-word-aux" style="float:right;"><button type="button" class="layui-btn layui-btn-primary layui-btn-sm">设置问题</button></div>
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
<script>
	//layer弹窗组件
	layui.use(['form', 'layer'],
	function() {
		$ = layui.jquery;
		var form = layui.form,
		layer = layui.layer;
	});

	//删除地址
	function del_submit (obj,id) {
		var data = {
			id:id,
			type:'del',
		}
		ajax_reg(data);
		return false;
	}

	//设为默认地址
	function default_submit (obj,id) {
		var data = {
			id:id,
			type:'default',
		}
		ajax_reg(data);
		return false;
	}

	/**
	 * 发送ajax请求
	 * @param data
	 */
	function ajax_reg (data) {
		$.ajax({
			url:"",
			async: false,
			type: "POST",
			data: data,
			dataType: "json",
			success: function (data) {
				if (data.status == 0) {
					layer.msg(data.msg, {icon: 2});
				} else {
					layer.msg(data.msg, {icon: 1});
				}
			}
		});
	}


</script>
</html>
