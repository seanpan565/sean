<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:66:"D:\web\phpweb\sean\public/../app/index\view\User_order\refund.html";i:1577786080;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1576206405;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1574596376;s:58:"D:\web\phpweb\sean\app\index\view\common\user-sidebar.html";i:1576577744;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1576824908;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<title>水果鲜生-订单列表</title>
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
						<h2 class="page-title text-center">order us</h2>
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
							<li>订单列表</li>
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
        <li class="layui-nav-item"><a href="<?php echo url('user/user_message'); ?>" title="安全设置">安全设置</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('user/addresslist'); ?>" title="收货地址">收货地址</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('user/collect'); ?>" title="我的收藏">我的收藏</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('UserOrder/index'); ?>" title="订单管理">订单管理</a></li>
        <li class="layui-nav-item"><a href="javascript:;" title="退货售后">退货售后</a></li>
        <li class="layui-nav-item"><a href="javascript:;" title="商品评价">商品评价</a></li>
        <li class="layui-nav-item"><a href="javascript:;" title="账单明细">账单明细</a></li>
        <span class="layui-nav-bar" style="top: 272.5px; height: 0px; opacity: 0;"></span>
    </ul>
</div>


					<div class="col-md-9" style="padding: 20px; background-color: #F2F2F2;min-height:400px;">
						<div class="layui-tab layui-tab-brief" lay-filter="demoTitle">
						    <ul class="layui-tab-title site-demo-title">
						        <li>申请退货退款</li>
						    </ul>
						</div>

						<!-- 模态框开始 -->
						<div class="modal fade modleDailog" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form action="" class="layui-form">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h4>申请原因：</h4>
											<textarea name="return_desc" placeholder="请输入申请原因" class="layui-textarea" rows="5" cols="150"></textarea>
										</div>
										<input type="hidden" name="order_sn" value="" id="order_sn">
										<input type="hidden" name="goods_id" value="" id="order_goods">
										<input type="hidden" name="order_goods_id" value="" id="order_goods_id">
                                        <input type="hidden" name="refund_type" value="" id="refund_type">
                                        <div class="modal-body">
                                            <div class="am-form-group">
                                                <label class="am-form-label">退款原因</label>
                                                <div class="am-form-content">
                                                    <select lay-ignore class="return_cause" name="return_cause">
                                                        <option value="1">不想要了</option>
                                                        <option value="2">买错了</option>
                                                        <option value="3">没收到货</option>
                                                        <option value="4">与说明不符</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
											<button type="button" class="btn btn-primary layui-btn" lay-filter="add" lay-submit="">提交申请</button>
										</div>
									</div><!-- /.modal-content -->
								</form>
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- 模态框结束 -->

                        <div class="layui-card">
                            <table class="table shop-cart" style="margin:0;">
  								<tbody>
									<?php if(is_array($order_goods) || $order_goods instanceof \think\Collection || $order_goods instanceof \think\Paginator): $i = 0; $__LIST__ = $order_goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
  	                            	<tr class="cart_item" style="border:0;">
  										<td class="product-thumbnail">
  											<a href="<?php echo url('Shopdateil/index',array('id'=>$vo['goods_id'])); ?>">
  												<img src="<?php echo $vo['goods_thumb']; ?>" alt="<?php echo $vo['goods_name']; ?>">
  											</a>
  										</td>
  										<td class="product-info">
  											<a href="<?php echo url('Shopdateil/index',array('id'=>$vo['goods_id'])); ?>"><?php echo $vo['goods_name']; ?></a>
  											<span class="sub-title" style="text-decoration: line-through;">原价：￥<?php echo $vo['goods_price']; ?></span>
  										</td>
  										<td class="product-quantity">
  											<span class="sub-title">数量：x<?php echo $vo['goods_count']; ?></span>
  										</td>
  										<td class="product-subtotal">
  											<span class="sub-title">会员价：￥<?php echo $vo['goods_vip']; ?></span>
  										</td>
                                        <td class="product-subtotal">
                                            <span class="sub-title">小计：￥<?php echo $vo['total_price']; ?></span>
                                        </td>
  	                                    <td class="product-subtotal">
                                            <?php switch($vo['return_status']): case "0": ?> <span class="sub-title">未申请</span><?php break; case "1": ?>
													<span class="sub-title">申请退款中</span>
												<?php break; case "2": ?><span class="sub-title">退款成功</span><?php break; case "3": ?><span class="sub-title">申请不通过</span><?php break; default: endswitch; ?>
  										</td>
										<td class="product-subtotal" style="min-width:210px;">
                                            <?php switch($vo['return_status']): case "0": ?>
                                                    <button type="button" class="layui-btn layui-btn-sm layui-btn-warm" data-toggle="modal" data-target="#myModal" data-target=".modleDailog" onclick="values('<?php echo $vo['order_sn']; ?>', '<?php echo $vo['goods_id']; ?>', '<?php echo $vo['order_goods_id']; ?>', '1')">申请退款</button>
                                                    <button type="button" style="float:right;" class="layui-btn layui-btn-sm layui-btn-normal" data-toggle="modal" data-target="#myModal" data-target=".modleDailog" onclick="values('<?php echo $vo['order_sn']; ?>', '<?php echo $vo['goods_id']; ?>', '<?php echo $vo['order_goods_id']; ?>', '2')">申请退货退款</button>
                                                <?php break; case "1": ?>
													<button type="button" class="layui-btn layui-btn-sm layui-btn-normal">
														<a href="<?php echo url('UserOrder/refund_detail',array('order_sn'=>$vo['order_sn'], 'order_goods_id'=>$vo['order_goods_id'], 'goods_id'=>$vo['goods_id'])); ?>" style="color:white;">查看退款详情</a>
													</button>
												<?php break; case "2": ?><span class="sub-title">退款成功</span><?php break; case "3": ?><span class="sub-title">申请不通过</span><?php break; default: endswitch; ?>
										</td>
  									</tr>
									<?php endforeach; endif; else: echo "" ;endif; ?>

  								</tbody>
  							</table>
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
<style>
	.modal-backdrop.in{
		display: none;
	}
	.modal.in .modal-dialog{
	    margin-top: 200px;
	}

    .modal-body{
    	min-height: 70px;
    }
	.modal-body h4{
		margin-left:5px;
	}
	.modal-body ul{
		float:left;
		margin-top: 5px;
	}
	.modal-body ul li{
		list-style: none;
		width:32px;
		height:21px;
		float:left;
		background:url(/static/index/images/stark2.png) no-repeat;

	}
	.modal-body ul li.on{
		background:url(/static/index/images/stars2.png) no-repeat;
	}
	.modal-body ul span{
		display:inline;
		float:left;
		padding-left:10px;
		height:21px;
		line-height:21px;
	}
</style>

<script>

//模态框传值
$('#myModal').modal("hide");
function values(ORDER_SN,ID,ORDER_GOODS_ID,REFUND_TYPE){
	$('#order_sn').val(ORDER_SN);
	$('#order_goods').val(ID);
	$('#order_goods_id').val(ORDER_GOODS_ID);
    $('#refund_type').val(REFUND_TYPE);
}


layui.use(['layer', 'form'], function() {
	var layer = layui.layer,
	$ = layui.jquery,
	form = layui.form;

	//监听提交
	form.on('submit(add)',
	function(data) {
		//获取表单数据
		var dataadd = data.field;
		$.ajax({
			type:"post",
			dataType:"json",
			data:{data:dataadd},
			url:"<?php echo url('UserOrder/order_refund'); ?>",
			success:function(data){
				if (data.status == 1) {
					layer.alert(data.msg, {
						title: '提示框',
						icon: 1,
					});
				} else {
					layer.alert(data.msg, {
						title: '提示框',
						icon: 0,
					});
				}
			}
		},'json');
		return false;
	});



});
</script>
</body>
</html>
