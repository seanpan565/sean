<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:58:"D:\web\phpweb\sean\public/../app/index\view\cart\cart.html";i:1576143529;s:50:"D:\web\phpweb\sean\app\index\view\common\link.html";i:1576206405;s:57:"D:\web\phpweb\sean\app\index\view\common\mobile-part.html";i:1574418883;s:58:"D:\web\phpweb\sean\app\index\view\common\head-message.html";i:1574574104;s:57:"D:\web\phpweb\sean\app\index\view\common\header-part.html";i:1577791609;s:52:"D:\web\phpweb\sean\app\index\view\common\footer.html";i:1576824908;}*/ ?>
﻿<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link rel="stylesheet" href="/static/index/css/cart.css" type="text/css" media="all">

<title>水果鲜生-购物车</title>
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
						<h2 class="page-title text-center">cart us</h2>
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
							<li>购物车</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-7 pb-7">
			<div class="container">
				<div class="row">

					<?php if(empty($cart)): ?>
						<div class="text-center mb-1 section-pretitle fz-34">购物车暂无商品</div>
					<?php else: ?>
                    <!-- 购物车列表开始 -->
					<div class="shopping-car-container">
						<div class="car-headers-menu">
							<div class="row">
								<div class="col-md-1 car-menu">
									<label><input type="checkbox" id="check-goods-all" /><span id="checkAll">全选</span></label>
								</div>
								<div class="col-md-3 car-menu">商品信息</div>
								<div class="col-md-2 car-menu">商品参数</div>
								<div class="col-md-1 car-menu">单价</div>
								<div class="col-md-2 car-menu">数量</div>
								<div class="col-md-1 car-menu">金额</div>
								<div class="col-md-2 car-menu">操作</div>
							</div>
						</div>
						<div class="goods-content">
							<?php if(is_array($cart) || $cart instanceof \think\Collection || $cart instanceof \think\Paginator): $i = 0; $__LIST__ = $cart;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	                            <!-- 商品列表开始 -->
								<div class="goods-item">
									<div class="panel panel-default">
										<div class="panel-body">
											<div class="col-md-1 car-goods-info">
												<label><input type="checkbox" <?php if($vo['cart_status'] == '1'): ?> checked="checked" <?php endif; ?> class="goods-list-item layui-unselect cartstatus" value="<?php echo $vo['id']; ?>" cart_id="<?php echo $vo['id']; ?>" goods_id="<?php echo $vo['goods_id']; ?>" name="cart_goods_standard_id[]"></label>
											</div>
											<div class="col-md-3 car-goods-info goods-image-column">
												<a href="<?php echo url('Shopdateil/index',array('id'=>$vo['goods_id'])); ?>"><img src="<?php echo $vo['goods_thumb']; ?>" alt="<?php echo $vo['goods_name']; ?>" class="goods-image" style="width: 50px; height: 50px;"></a>
												<span id="goods-info" style="float:left;"><?php echo $vo['goods_name']; ?></span>
											</div>
											<div class="col-md-2 car-goods-info goods-params"><?php echo $vo['goods_keyword']; ?></div>
											<div class="col-md-1 car-goods-info goods-price">
												<span>￥</span><span class="single-price"><?php echo $vo['goods_vip']; ?></span>
											</div>
											<div class="col-md-2 car-goods-info goods-counts">
												<div class="input-group">
													<div class="input-group-btn"><button type="button" class="btn btn-default car-decrease" id="<?php echo $vo['id']; ?>" goods-id="<?php echo $vo['goods_id']; ?>">-</button></div>
													<input type="text" readonly="readonly" class="form-control goods-count" value="<?php echo $vo['goods_count']; ?>" min="1" max="<?php echo $vo['goods_inventory']; ?>" id="<?php echo $vo['id']; ?>" goods-id="<?php echo $vo['goods_id']; ?>">
													<div class="input-group-btn"><button type="button" class="btn btn-default car-add" id="<?php echo $vo['id']; ?>" goods-id="<?php echo $vo['goods_id']; ?>">+</button></div>
												</div>
											</div>
											<div class="col-md-1 car-goods-info goods-money-count"><span>￥</span><span class="single-total">1</span></div>
											<div class="col-md-2 car-goods-info goods-operate">
												<button type="button" class="btn btn-danger item-delete" data-id="<?php echo $vo['id']; ?>">删除</button>
											</div>
										</div>
									</div>
								</div>
								<!-- 商品列表结束 -->
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="panel panel-default">
							<div class="panel-body bottom-menu-include">
								<div class="col-md-1 check-all-bottom bottom-menu">
									<label>
										<input type="checkbox" id="checked-all-bottom" />
										<span id="checkAllBottom">全选</span>
									</label>
								</div>
								<div class="col-md-1 bottom-menu">
									<button type="button" class="btn btn-danger item-delete" id="deleteMulty">删除</button>
								</div>
								<div class="col-md-6 bottom-menu">
								</div>
								<div class="col-md-2 bottom-menu">
									<span>已选商品 <span id="selectGoodsCount">0</span> 件</span>
								</div>
								<div class="col-md-1 bottom-menu">
									<span>合计：<span id="selectGoodsMoney">0.00</span></span>
								</div>
								<div class="col-md-1 bottom-menu submitData submitDis" id="cart-end" type="button"><a href="<?php echo url('Order/cart'); ?>" style="color:white;">结算</a></div>
							</div>
						</div>
					</div>
                    <!-- 购物车列表结束 -->
					<?php endif; ?>

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
<!-- BUG: 数量输入修改会自增1，总价也会自增1件商品价格，商品默认数量相加价格不正确，批量删除功能未完成 ,放弃了，太多js 了-->

<script>
	//layer弹窗组件
	layui.use(['form', 'layer'],
	function() {
		$ = layui.jquery;
		var form = layui.form,
		layer = layui.layer;
	});

	//购物车商品状态cartstatus
    $('.cartstatus').on('click', function () {
		_cart_id = $(this).attr('cart_id');
		$.ajax({
			url:"<?php echo url('cart/cart_status'); ?>",
			type:'post',
			dataType:'json',
			data:{cart_id:_cart_id},
			success:function (data){
				if (data.status == 1) {
					layer.msg(data.msg);
				}else{
					layer.msg(data.msg);
				}
			}
		},'json');
		return false;
	});

    var deleteGoods = null
    function ShoppingCarObserver(elInput, isAdd) {
        this.elInput = elInput
        this.parents = this.elInput.parents('.goods-item');
        this.count = parseInt(this.elInput.val());
        this.isAdd = isAdd
        this.singlePrice = parseFloat(this.parents.find('.single-price').text());

		//item单件商品数量总价
        this.computeGoodsMoney = function () {
            var moneyCount = this.count * this.singlePrice
            var singleTotalEl = this.parents.find('.single-total');
            console.log(moneyCount);
            singleTotalEl.empty().append(moneyCount);//在所有 <p> 元素结尾插入内容
        }

		//全部商品加计算价格
        this.showCount = function () {
            var isChecked = this.parents.find('.goods-list-item')[0].checked
            var GoodsTotalMoney = parseFloat($('#selectGoodsMoney').text());
            var goodsTotalCount = parseInt($('#selectGoodsCount').text());
            if (this.elInput) {
                if (this.isAdd) {
                    ++this.count
                    if (isChecked) {
                        $('#selectGoodsMoney').empty().append(GoodsTotalMoney + this.singlePrice);
                        $('#selectGoodsCount').empty().append(goodsTotalCount + 1);
                    }
                } else {
                    if (parseInt(this.count) <= 1) {
                        return
                    } else {
                        --this.count
                        if (isChecked) {
                            $('#selectGoodsMoney').empty().append(GoodsTotalMoney - this.singlePrice)
                            $('#selectGoodsCount').empty().append(goodsTotalCount - 1)
                        }
                    }
                }
                this.elInput.val(this.count)
            }
        }

		//选定商品计算价格
        this.checkIsAll = function () {
            var checkLen = $('.goods-list-item:checked').length
            if (checkLen > 0) {
                $('.submitData').removeClass('submitDis');
            } else {
                $('.submitData').addClass('submitDis');
            }
            if ($('.goods-item').length === checkLen) {
                $('#checked-all-bottom, #check-goods-all').prop('checked', true);
            } else {
                $('#checked-all-bottom, #check-goods-all').prop('checked', false);
            }
        }

		//取消选定计算价格
        this.checkedChange = function (isChecked) {
            if (isChecked === undefined) {
                var isChecked = this.parents.find('.goods-list-item')[0].checked
            }
            var itemTotalMoney = parseFloat(this.parents.find('.single-total').text());
            var GoodsTotalMoney = parseFloat($('#selectGoodsMoney').text());
            var itemCount = parseInt(this.parents.find('.goods-count').val());
            var goodsTotalCount = parseInt($('#selectGoodsCount').text());
            if (isChecked) {
                $('#selectGoodsMoney').empty().append(itemTotalMoney + GoodsTotalMoney);
                $('#selectGoodsCount').empty().append(itemCount + goodsTotalCount);
            } else {
                if (GoodsTotalMoney - itemTotalMoney === 0) {
                    $('#selectGoodsMoney').empty().append('0.00');
                    if (!$('.submitData').hasClass('submitDis')) {
                        $('.submitData').addClass('submitDis');
                    }
                } else {
                    $('#selectGoodsMoney').empty().append(GoodsTotalMoney - itemTotalMoney);
                }
                $('#selectGoodsCount').empty().append(goodsTotalCount - itemCount);
            }
        }
        this.deleteGoods = function () {
            var isChecked = this.parents.find('.goods-list-item')[0].checked
            if (isChecked) {
                this.checkedChange(false);
            }
            this.parents.remove();
            this.checkOptions();
        }
        this.checkOptions = function () {
            if ($('#check-goods-all')[0].checked) {
                if ($('.goods-list-item').length <= 0) {
                    $('#checked-all-bottom, #check-goods-all').prop('checked', false);
                }
            }
        }
    }

	//全选价格统计
    function checkedAll(_this) {
        if ($('.goods-item').length <= 0) {
            $('.submitData').addClass('submitDis');
        } else {
            $('.submitData').removeClass('submitDis');
        }
        for (var i = 0; i < $('.goods-item').length; i++) {
            var elInput = $('.goods-item').eq(i).find('.goods-list-item');
            var isChecked = $('.goods-item').eq(i).find('.goods-list-item')[0].checked
            var checkAllEvent = new ShoppingCarObserver(elInput, null);
            if (_this.checked) {
                if (!isChecked) {
                    elInput.prop('checked', true);
                    checkAllEvent.checkedChange(true);
                }
            } else {
                if (!$('.submitData').hasClass('submitDis')) {
                    $('.submitData').addClass('submitDis');
                }
                if (isChecked) {
                    elInput.prop('checked', false);
                    checkAllEvent.checkedChange(false);
                }
            }
        }
    }

	//头部全选选定
    $('#check-goods-all').on('change', function () {
        if (this.checked) {
            $('#checked-all-bottom').prop('checked', true);
        } else {
            $('#checked-all-bottom').prop('checked', false);
        }
        checkedAll(this);
    });

	//底部全选选定
    $('#checked-all-bottom').on('change', function () {
        if (this.checked) {
            $('#check-goods-all').prop('checked', true);
        } else {
            $('#check-goods-all').prop('checked', false);
        }
        checkedAll(this)
    });

	//单选选定
    $('.goods-list-item').on('change', function () {
        var tmpCheckEl = $(this);
        var checkEvent = new ShoppingCarObserver(tmpCheckEl, null);
        checkEvent.checkedChange();
        checkEvent.checkIsAll();
    });

	//数量减
    $('.goods-content').on('click', '.car-decrease', function () {
        var goodsInput = $(this).parents('.input-group').find('.goods-count');
        var decreaseCount = new ShoppingCarObserver(goodsInput, false);
		var _id = $(this).attr('id');//购物车id
		var _goods_id = $(this).attr('goods-id');//商品id
		var coun = $(this).parents('.input-group').find('.goods-count').val();//商品数量
		if (parseInt(coun) == '1') {
		    layer.msg('商品数量最低为一件');
		    return false;
		}
		var _coun = parseInt(coun) - parseInt('1');
		$.ajax({
			url:"<?php echo url('cart/up_cart'); ?>",
			type:'post',
			dataType:'json',
			data:{id:_id,goods_count:_coun,goods_id:_goods_id},
			success:function (data){
				if (data.status == 1) {
					decreaseCount.showCount();
					decreaseCount.computeGoodsMoney();
				// 	layer.msg(data.msg);
				// } else {
				// 	layer.msg(data.msg);
				}
			}
		},'json');
		return false;
    });

	//数量加
    $('.goods-content').on('click', '.car-add', function () {
        var goodsInput = $(this).parents('.input-group').find('.goods-count');
		var addCount = new ShoppingCarObserver(goodsInput, true);
		var _id = $(this).attr('id');//购物车id
		var _goods_id = $(this).attr('goods-id');//商品id
		var coun = $(this).parents('.input-group').find('.goods-count').val();//商品数量
		var _coun = parseInt(coun) + parseInt('1');
		$.ajax({
			url:"<?php echo url('cart/up_cart'); ?>",
			type:'post',
			dataType:'json',
			data:{id:_id,goods_count:_coun,goods_id:_goods_id},
			success:function (data){
				if (data.status == 1) {
					addCount.showCount();
					addCount.computeGoodsMoney();
				}
			}
		},'json');
		return false;
    });



    // BUG: 数量输入修改会自增1，总价也会自增1件商品价格
	//直接修改商品数量
	// $('.goods-content').on('blur', '.goods-count', function () {
	// 	var goodsInput = $(this).parents('.input-group').find('.goods-count');
	// 	var upCount = new ShoppingCarObserver(goodsInput, true);
	// 	var _id = $(this).attr('id');//购物车id
	// 	var _goods_id = $(this).attr('goods-id');//商品id
	// 	var coun = $(this).val();//商品数量
	// 	//判断为正整数且大于0
	//     var reg=/^[1-9]\d*$/;
	// 	if(reg.test(coun)) {
	// 		if(parseInt(coun) < 0){
	// 			layer.msg('商品数量最低为一件');
	// 			return false;
	// 	    }else{
	// 			$.ajax({
	// 				url:"<?php echo url('cart/up_cart'); ?>",
	// 				type:'post',
	// 				dataType:'json',
	// 				data:{id:_id,goods_count:coun,goods_id:_goods_id},
	// 				success:function (data){
	// 					if (data.status == 1) {
	// 						upCount.showCount();
	// 						upCount.computeGoodsMoney();
	// 					}
	// 				}
	// 			},'json');
	// 			return false;
	// 	    }
	// 	}else{
	// 		layer.msg('商品数量为正整数');
	// 		return false;
	// 	}
	// });





    //删除单件商品
    $('.goods-content').on('click', '.item-delete', function () {
        var id = $(this).attr('data-id');//购物车id
        var goodsInput = $(this).parents('.goods-item').find('.goods-list-item');
        deleteGoods = new ShoppingCarObserver(goodsInput, null);
		layer.confirm('是否删除该商品?', {icon: 0, title:'提示'}, function(index){
		    $.ajax({
			    url:"del_cart",
			    type:'post',
			    dataType:'json',
			    data:{cart_id:id},
			    success:function (data){
				    if (data.status == 1) {
				  	    if (deleteGoods !== null) {
				  		    deleteGoods.deleteGoods();
				  	    }
				  	    layer.msg(data.msg);
				    } else {
				  	    layer.msg(data.msg);
				    }
			    }
		    },'json');
		    return false;
		    layer.close(index);
		});
    });


    //删除多件商品
    $('#deleteMulty').on('click', function () {
		//发送ajax请求
		var cart_id = new Array();
		var goods_id = new Array();
		$("input[name='cart_goods_standard_id[]']").each(function () {
			if (this.checked) {
				goods_id.push($(this).attr('goods_id'));
				cart_id.push($(this).attr('cart_id'));
			}
		});
        //获取被选中的id还是商品id
		console.log(cart_id);return false;

        if ($('.goods-list-item:checked').length = 0) {
			for (var i = 0; i < $('.goods-list-item:checked').length; i++) {
				var multyDelete = new ShoppingCarObserver($('.goods-list-item:checked').eq(i), null)
				// multyDelete.deleteGoods();
				i--
			}
			console.log(multyDelete);return false;
        } else {
            layer.msg('请选择要删除的商品');
        }
    });
	//点击确认后执行删除操作
    $('.deleteMultySure').on('click', function () {
        for (var i = 0; i < $('.goods-list-item:checked').length; i++) {
            var multyDelete = new ShoppingCarObserver($('.goods-list-item:checked').eq(i), null)
            multyDelete.deleteGoods();
            i--
        }
        multyDelete.checkOptions();
        $('#deleteMultyTip').modal('hide');
    });


	//购物车商品结算，后台处理完数据之后跳转立即购买页
	$('#cart-end').on('click', function () {
		_cart_id = $(this).attr('cart_id');
		if(_cart_id == ''){
			layer.msg('未选择要购买的商品');
			return false;
		}
		//发送ajax请求
		// var _cart_id = new Array();
		// var _goods_id = new Array();
		// $("input[name='cart_goods_standard_id[]']").each(function () {
		// 	if (this.checked) {
		// 		_goods_id.push($(this).attr('goods_id'));
		// 		_cart_id.push($(this).attr('cart_id'));
		// 	}
		// });
		// if(_cart_id == ''){
		// 	layer.msg('未选择要购买的商品');
		// 	return false;
		// }
		// $.ajax({
		// 	url:"<?php echo url('order/cart'); ?>",
		// 	type:'post',
		// 	dataType:'json',
		// 	data:{cart_id:_cart_id,goods_id:_goods_id},
		// 	success:function (data){
		// 		if (data.status == 1) {
		// 			window.location.href = "<?php echo url('Order/cart'); ?>";
		// 		}else{
		// 			layer.msg(data.msg);
		// 		}
		// 	}
		// },'json');
		// return false;
	});

</script>


</body>
</html>
