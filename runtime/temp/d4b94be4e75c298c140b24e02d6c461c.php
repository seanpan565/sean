<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\web\moban\thinkphp\tplay-master\public/../app/moblie\view\index\index.html";i:1571807703;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>高灯兼职网 - 兼职招聘,网上兼职,兼职网</title>
<meta http-equiv="keywords" content="全国兼职,兼职招聘,网上兼职,兼职网,wap" />
<meta http-equiv="description" content="高灯兼职网是中国最专业的人才招聘平台，提供网上兼职、等全国各地求职应聘信息的发布平台，免费为企业提供兼职招聘服务。" />
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="apple-touch-icon-precomposed" href="/data/logo/20190306/33.png" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
<link rel="stylesheet" href="/static/moblie/css/mui.min.css" type="text/css"/>
<link rel="stylesheet" href="/static/moblie/css/css.css" type="text/css"/>
<link rel="stylesheet" href="/static/moblie/css/job.css" type="text/css"/>
<link rel="stylesheet" href="/static/moblie/css/style.css" type="text/css"/>
<link rel="stylesheet" href="/static/moblie/css/yun_wap_member.css" type="text/css" />
<script src="/static/moblie/js/jquery-1.8.0.min.js" language="javascript"></script>
<style>
   * { touch-action: none; }
</style>
</head>
<body>


<div id="app" class="mui-views">
	<div class="mui-view">
		<div class="mui-navbar"></div>
		<div class="mui-pages"></div>
	</div>
</div>

<div id="main" class="mui-page">
    <div class="mui-navbar-inner mui-bar mui-bar-nav">
        <header class="header_h">
          <div class="header_fixed">
            <div class="header_bg" >

            <div class="logo"><img src="/static/moblie/picture/15683347022.png"></div>
            </div>
           </div>

        </header>
    </div>
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
                <section>
                    <div class="swiper_banner" style="background:#3366cc; ">
                        <div class="swiper-container" id="imgswiper">
                            <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                    <a href="<?php echo url('index/index'); ?>">
                                        <img src="/static/moblie/picture/t0106a54c3db49e83a7.jpg" width='100%' height="160" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="clear"></div>
                 <div class="  mt10">
    <div class="mui-content" style="background:none;">
        <div id="slider" class="mui-slider">
            <div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted index_jobtit">
                <a class="mui-control-item mui-active" href="#urgentjoblist" style="height:45px; line-height:45px;">紧急招聘</a>
                <a class="mui-control-item" href="#recjoblist" style="height:45px; line-height:45px;">兼职职位</a>
                <a class="mui-control-item" href="#newjoblist" style="height:45px; line-height:45px;">最新职位</a>
            </div>

            <div class="mui-slider-group">
                <div id="urgentjoblist" class="mui-slider-item mui-control-content mui-active" style="border:none; background:none;">
                    <ul class="index_tj_job">
                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="index_job_list">
							<a href="<?php echo url('index/item',array('id'=>$vo['id'])); ?>">
                            <div class="index_tj_jobname"><?php echo $vo['title']; ?><span class="index_tj_jobtime"><?php echo $vo['create_time']; ?></span>
                            </div>
                            <div class="index_tj_jobinfo">
                                <span class="index_tj_jobinfo_zx"><?php echo $vo['salary']; ?>元</span> <!--江西-吉安-->全国均可
                                <span class="index_line">|</span>不限 <span class="index_line">|</span>不限
                            </div>
                            <div class="index_tj_jobcom">
                                <div class="index_tj_jobcom_logo">
                                    <img src="/static/moblie/picture/14906489056.png" width="35" height="35">
                                </div>
                                工作地点
                                <div class="index_tj_hy"><?php echo $vo['site']; ?></div>
                            </div>
							</a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <!-- <div id="recjoblist" class="mui-slider-item mui-control-content" style="border:none; background:none;">
                    <ul class="index_tj_job">
                        <li class="index_job_list">
                            <div class="index_tj_jobname">
                                <a href="http://www.gaodengkeji.com/wap/c_job-a_view-id_30874.html">全新兼职会用玩手机你就来！<span class="index_tj_jobtime">2019-09-28</span></div>
                            <div class="index_tj_jobinfo"><span class="index_tj_jobinfo_zx">￥40以上 </span>
						    	全国均可
                            	<span class="index_line">|</span>不限
                                <span class="index_line">|</span>不限
                            </div>
                            <div class="index_tj_jobcom">
                                <div class="index_tj_jobcom_logo"><img src="/static/moblie/picture/14906489056.png" width="35" height="35"></div>
                                项城市金象木制品有限公司
                                <div class="index_tj_hy">计算机/互联网</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="newjoblist" class="mui-slider-item mui-control-content" style="border:none; background:none;">
                    <ul class="index_tj_job">
                        <li class="index_job_list">
                            <div class="index_tj_jobname">
                                <a href="http://www.gaodengkeji.com/wap/c_job-a_view-id_31032.html">直招钟点工导购员兼职<span class="index_tj_jobtime">2019-09-28</span></div>
                            <div class="index_tj_jobinfo"><span class="index_tj_jobinfo_zx">￥35以上 </span> 全国均可
                            	<span class="index_line">|</span>不限                            	<span class="index_line">|</span>不限                             </div>
                            <div class="index_tj_jobcom">
                                <div class="index_tj_jobcom_logo"><img src="/static/moblie/picture/14906489056.png" width="35" height="35"></div>
                                北京启扬时代网络科技有限公司定西分公司
                                <div class="index_tj_hy">计算机/互联网</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>
			</div>
		</div>
	</div>
</div>


<script src="/static/moblie/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="/static/moblie/js/layer.m.js" language="javascript"></script>
<script src="/static/moblie/js/public.js" language="javascript"></script>
<link rel="stylesheet" href="/static/moblie/css/swiper.min.css" type="text/css" />
<script src="/static/moblie/js/swiper.min.js"></script>
<script src="/static/moblie/js/mui.min.js" language="javascript"></script>
<script src="/static/moblie/js/mui.view.js" language="javascript"></script>
<script type="text/javascript">
mui.init();
	var viewApi = mui('#app').view({
		defaultPage: '#main'
	});

	var view = viewApi.view;
	(function($) {

		mui('.mui-scroll-wrapper').scroll({
			scrollY: true,
			scrollX: false,
			startX: 0,
			startY: 0,
			indicators: false,
			deceleration: 0.0006,

		});

		var oldBack = $.back;
		$.back = function() {
			if(viewApi.canBack()) {
				viewApi.back();
			} else {
				oldBack();
			}
		};
	})(mui);
    $(function() {
    	if(document.getElementById('main')){
			document.getElementById('main').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
        var myimgswiper = new Swiper('#imgswiper', {
            direction: 'horizontal',
            autoplay: true,
            loop: true
        });
        var mySwiper = new Swiper('#navswiper', {
            direction: 'horizontal',
            pagination: {
                el: '.swiper-pagination',
            }
        });
    });
    marquee("2000", ".sxl .sxlist");
    $(".indexmq_box").each(function(i, arr) {
        arr.addEventListener('tap', function() {
            mui.openWindow({
                url: arr.dataset.href
            });
        }, false)
    }, false);

    $(function() {
        var myimgswiper = new Swiper('#imgswiper_x', {
            direction: 'horizontal',
            autoplay: true,
            loop: true
        });
    });
</script>


<div class="yun_footer">
    <div class="yun_footer_fix">
        <ul class="yun_footer_nav">
            <li class="yun_footer_nav_cur" ><a href="http://www.gaodengkeji.com/wap/" id="indexclick"><i class="yun_footer_nav_icon yun_footer_nav_home_cur"></i>首页</a></li>
            <li ><a href="http://www.gaodengkeji.com/wap/c_part.html"><i class="yun_footer_nav_icon yun_footer_nav_msg"></i>兼职</a></li>
            <li ><a href="http://www.gaodengkeji.com/wap/c_job.html"><i class="yun_footer_nav_icon yun_footer_nav_msg"></i>职位</a></li>
            <li ><a href="http://www.gaodengkeji.com/wap/c_login.html"><i class="yun_footer_nav_icon yun_footer_nav_user"></i>我的</a></li>
        </ul>
    </div>
</div>

</body>
</html>
