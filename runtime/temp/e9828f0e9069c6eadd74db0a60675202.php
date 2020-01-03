<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\web\moban\thinkphp\tplay-master\public/../app/index\view\index\item.html";i:1571810490;}*/ ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $web_config['name']; ?></title>
<meta name="keywords" content="<?php echo $web_config['keywords']; ?>"/>
<meta name="description" content="<?php echo $web_config['desc']; ?>"/>
<link rel="stylesheet" href="/static/index/static/item/css/css.css" type="text/css"/>
<link rel="stylesheet" href="/static/index/static/item/css/part.css" type="text/css"/>

  <link rel="stylesheet" href="/static/index/static/item/css/comapply.css" type="text/css"/>
</head>
<body  class="body_bg">
<div class="yun_new_top">
</div>
 <div class="hp_head hp_head_box">
<div class="w1200">
     <div class="hp_head_ft fl">
          <div class="hp_head_ft_logo fl"><a href="<?php echo url('index/index'); ?>" title="高灯兼职网最新招聘求职信息"><img  src="/static/index/static/item/picture/15685938476.png" alt="高灯兼职网"/></a></div>

     </div>
     <div class="yun_header_nav_box">
     <ul>
                <li class=""> <a href="<?php echo url('index/index'); ?>"  class="png"> 首页 </a>
                          <i class="yun_new_headernav_list_line"></i>
          </li>
                    <li class="nav_list_hover"> <a href="<?php echo url('index/index'); ?>"  target="_blank" class="png"> 兼职 </a>
                         <div class="nav_icon nav_icon_new">  <img src="/static/index/static/item/picture/new.gif"> </div>
                           <i class="yun_new_headernav_list_line"></i>
          </li>
                    <li class="nav_list_hover"> <a href="<?php echo url('index/index'); ?>"  class="png"> 紧急招聘 </a>
                         <div class="nav_icon nav_icon_new">  <img src="/static/index/static/item/picture/new.gif"> </div>
                           <i class="yun_new_headernav_list_line"></i>
          </li>
                    <li class=""> <a href="<?php echo url('index/index'); ?>"  class="png"> 热门职位 </a>
                         <div class="nav_icon nav_icon_new">  <img src="/static/index/static/item/picture/new.gif"> </div>
                           <i class="yun_new_headernav_list_line"></i>
          </li>
                    <li class=""> <a href="#"  class="png"> 职场资讯 </a>
                          <i class="yun_new_headernav_list_line"></i>
          </li>
               </ul>
</div>  </div>
</div>


 <div class="header_fixed yun_bg_color none" id="header_fix">
  <div class="header_fixed_cont">
    <ul class="header_fixed_list">
            <li class=""><a href="<?php echo url('index/index'); ?>" >首页</a></li>
            <li class="header_fixed_list_cur"><a href="<?php echo url('index/index'); ?>"  target="_blank">兼职</a></li>
            <li class="header_fixed_list_cur"><a href="<?php echo url('index/index'); ?>" >紧急招聘</a></li>
            <li class=""><a href="<?php echo url('index/index'); ?>" >热门职位</a></li>
            <li class=""><a href="#/" >职场资讯</a></li>
          </ul>
    <script language='JavaScript' src='/static/index/static/item/js/index.js'></script>

    <div class="header_fixed_close"><a href="javascript:;" onclick="$('#header_fix').remove();" rel="nofollow">关闭</a></div>
  </div>
</div>

<div class="clear"></div >
<div class="wapper">
  <div class="current_Location icon">当前位置：<a href="#">首页</a>><a href="<?php echo url('index/index'); ?>">兼职</a>><em><?php echo $article['title']; ?></em></div>
  <div class="clear"></div >
  <div class="yun_part_left">
   <div class="partjob_tip">提示：刷信誉、淘宝刷钻、收取费用或押金都可能有欺诈嫌疑，请警惕！</div>

   <div class="yun_part_show_jobbox">
  <div class="yun_part_show_jobname"><h1><?php echo $article['title']; ?></h1></div>
  <div class="yun_part_show_jobxz"><!--<span class="yun_part_show_jobxz_n">190-->不限地区</span><!--元/天--></div>
 <div class="yun_part_show_jobxx"><?php echo $article['site']; ?>
    	 <span class="yun_part_show_jobxx_yl"><?php echo $article['create_time']; ?> 更新</span> <span class="yun_part_show_jobxx_yl"><?php echo $article['how']; ?>次浏览</span> </div>

  <div class="yun_part_show_jobinfo">

   <div class="yun_part_show_jobinfo_p">
   <span class="yun_part_show_jobinfo_p_s">工作类型：</span>
   <span class="con_require_con"><?php echo $article['tag']; ?></span></div>
        <div class="yun_part_show_jobinfo_p"><span class="yun_part_show_jobinfo_p_s">招聘人数：</span><span class="con_require_con"><?php echo $article['howmany']; ?>人</span></div>
        <div class="partjob_infolist_p"><span class="yun_part_show_jobinfo_p_s">性别要求：</span></span><span class="con_require_con">不限</span></div>
        <div class="yun_part_show_jobinfo_p"><span class="yun_part_show_jobinfo_p_s">结算周期：</span><span class="con_require_con"><?php echo $article['outtime']; ?></span></div>
        <div class="yun_part_show_jobinfo_p"><span class="yun_part_show_jobinfo_p_s">有效期至：</span><span class="con_require_con">长期招聘 </span></div>
        <div class="yun_part_show_jobinfo_p"><span class="yun_part_show_jobinfo_p_s">工资：</span><span class="con_require_con"><?php echo $article['salary']; ?></span></div>
        <div class="yun_part_show_jobinfo_p"><span class="yun_part_show_jobinfo_p_s">联&nbsp;系&nbsp; 人：</span><?php echo $article['relation']; ?></div>
		<div class="yun_part_show_jobinfo_p"><span class="yun_part_show_jobinfo_p_s">微信：  <span class=""><?php echo $article['weixin']; ?></span></div>
      </div>
      <div class="partjob_cz">
        <a class="partjob_bmbth" onclick="showlogin('1');" href="javascript:;">申请报名</a>
        <div class="con_apply_share fl"></div>
  </div>
  </div>
    <div class="yun_part_show_jobbox mt20">
<div class="yun_part_show_tit">联系方式</div>
<div class="Company_Basic_information_list" style="display: none;"><i class="Company_Basic_information_icon Company_Basic_information_icon_____yilufa_qq"></i><div class="Company_Basic_information_r"><span class="Company_Basic_information_tel"><?php echo $article['weixin']; ?></span></div></div>
    <div class="Company_Basic_information_list">
        <div class="Company_Basic_information_r"> <i class="Company_Basic_information_icon Company_Basic_information_icon_____yilufa_wx"></i> <span class="Company_Basic_information_tel"><?php echo $article['weixin']; ?></span></div>
    </div>
</div>

    <div class="yun_part_show_jobbox mt20">
<div class="yun_part_show_tit">职位详情</div>

   <div class="partjob_content_tit">职位描述</div>
             <div class="partjob_content_p"> <p>工作要求：<br/></p><p>1.手机，电脑均可（任何地方，任何地点不限）</p><p>2.我们不会索要任何押金等费用，请放心来应聘（全职也可）</p><p>3.工作内容简单易学、上手快！不收任何费用, &nbsp; 工作地点不限！。</p><p>4.自由安排工作时间，和您现有的工作不冲突，自由的第二职业</p><p>5.需严格按操作教程来操作；</p><p>6.现做现结 &nbsp; 绝不拖欠有意应聘请联系在线微信</p><p><br/></p></div>

                <div>
                <span id="set_weixinhao_update_erwm" >
		<img id="set_weixinhao_update_erwm_img" src="/static/index/static/item/picture/15718708522.png" width="140" height="140"  >
		</span>
      </div>

              <div class="complay_h1_share">
          <span class="Company_post_s_fl">分享到：</span>
          <span >

			<div class="pyshare bdsharebuttonbox bdshare-button-style0-16" data-tag="share_1">
				<a class="li s1 bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
				<a class="li s2 bds_renren" data-cmd="renren" title="分享到人人网"></a>
				<a class="li s3 bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
				<a class="li s4 bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
				<a class="li s5 bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
				<a class="li s6 bds_weixin" data-cmd="weixin" title="分享到微信"></a>
				<div class="clear"></div>
			</div>

        </span>
       </div>
</div>

   </div>
    <div class="job_right fr">
     <div class="yun_partshow_com">
      <div class="yun_part_tjbox_h1"><i class="yun_part_tjbox_h1_n"></i><span class="yun_part_tjbox_h1_s">兼职发布者</span></div>
      <div class="clear"></div>
        <div class="yun_partshow_comlogo"> <img src="/static/index/static/item/picture/14906489056.png" width="100" height="100" onerror="showImgDelay(this,'#',2);" alt="中山市古镇鑫望灯饰厂" /> </div>
      <div class="yun_partshow_comname"><a href="#" target="_blank">中山市古镇鑫望灯饰厂</a></div>
        <ul class="yun_partshow_cominfo">
<li><span class="yun_partshow_cominfo_s">行业</span> 计算机/互联网</li><li><span class="yun_partshow_cominfo_s">性质</span> 股份制企业</li> <li><span class="yun_partshow_cominfo_s">地区</span>  广东</li></ul>
     </div>

        <div class="yun_part_tjbox">
      <div class="yun_part_tjbox_h1"><i class="yun_part_tjbox_h1_n"></i><span class="yun_part_tjbox_h1_s">优选兼职</span></div>
      <div class="yun_part_tjbox_list">
        <ul>
          <li>
            <div class="yun_part_tjbox_jobname"><a href="#">诚聘兼职现结薪资</a></div>
            <div class="yun_part_tjbox_jobxz"><!--<em class="yun_part_tjbox_jobxz_n">180</em>元/次--></div>
            <div class="yun_part_tjbox_jobinfo"> <em class=""><!--上海--->全国</em> <span class="yun_part_tjbox_jobtime">2019-09-28更新</span> </div>
          </li>
        </ul>
      </div>
    </div>

    </div>
  </div>
</div>
<script src="/static/index/static/item/js/jquery-1.8.0.min.js" language="javascript"></script>
<link href="/static/index/static/item/css/layui.css" rel="stylesheet" type="text/css" /><script src="/static/index/static/item/js/layui.js"></script><script src="/static/index/static/item/js/phpyun_layer.js"></script>
<script src="/static/index/static/item/js/public.js" language="javascript"></script>
<script src="/static/index/static/item/js/part.js" language="javascript"></script>

<script type="text/javascript" src="/static/index/static/item/js/9f8d1a0a9e094efcbc31459f19713d63.js" charset="utf-8"></script>
<script src="/static/index/static/item/js/map.js" language="javascript"></script>
<script>
$(function(){
   getmapnoshowcont_diffDomains('maps_container', "113.416595", "22.53651", "map_x", "map_y",'company_baidu_map');
});
</script>

<link rel="stylesheet" href="/static/index/static/item/css/tck_logoin.css" type="text/css" />

<script src="/static/index/static/item/js/reg_ajax.js" type="text/javascript"></script>


<div class="hp_foot fl">
<div class="w1000">
     <div class="hp_foot_wt fl">
          <div class="hp_foot_pho fl">
          <dl>
              <dt></dt>
              <dd>客服服务热线</dd>
              <dd class="hp_foot_pho_nmb">13066890503</dd>
              <dd></dd>
          </dl>
     </div>
     <div class="hp_foot_wh fl">
     <i class="hp_foot_wh_lline"></i>
     <i class="hp_foot_wh_rline"></i>
                    <dl>
              <dt>关于我们</dt>
              <dd>
                  <ul>
                    <li><a href="#">关于我们</a></li>
                    <li><a href="#">注册协议</a></li>
                    <li><a href="#">法律声明</a></li>
                    <li><a href="#">联系我们</a></li>
                </ul>
              </dd>
          </dl>
                    <dl>
              <dt>产品与服务</dt>
              <dd>
                  <ul>
                                        </ul>
              </dd>
          </dl>
                    <dl>
              <dt>收费与推广</dt>
              <dd>
                  <ul>
                                            <li><a href="#">品牌推广</a></li>
                                        </ul>
              </dd>
          </dl>
                    <dl>
              <dt>网站特色</dt>
              <dd>
                  <ul>
                                            <li><a href="/evaluate/">求职测评</a></li>
                                            <li><a href="/map/">地图搜索</a></li>
                                        </ul>
              </dd>
          </dl>
                    <dl>
              <dt>咨询反馈</dt>
              <dd>
                  <ul>
                                            <li><a href="#">客服中心</a></li>
                                        </ul>
              </dd>
          </dl>
               </div>
     </div>

</div>
<div class="clear"></div>
     <div class="hp_foot_bt">
     <div class="hp_foot_bt_c">
          <p>Copyright © 2005-2019 高灯兼职招聘网 ，深圳市高灯科技有限公司  版权所有 <i class="hp_foot_bt_cr"><a href='#' target='_blank'> 粤ICP备19086894号-1</a></i></p>
          <p>地址：深圳市龙岗区平湖街道平湖社区平安大道1号华南城铁东物流区13栋3A13 EMAIL：server@gaodengkeji.com</p>

     </div> </div>
</div>

<div class="clear"></div>
<div id="uclogin"></div>
<script>
$(function(){
	$(window).on('scroll',function(){
		var st = $(document).scrollTop();
		if( st>0 ){
			if( $('#main-container').length != 0  ){
				var w = $(window).width(),mw = $('#main-container').width();
				if( (w-mw)/2 > 70 )
					$('#go-top').css({'left':(w-mw)/2+mw+20});
				else{
					$('#go-top').css({'left':'auto'});
				}
			}
			$('#go-top').fadeIn(function(){
				$(this).removeClass('dn');
			});
		}else{
			$('#go-top').fadeOut(function(){
				$(this).addClass('dn');
			});
		}
	});
	$('#go-top .go').on('click',function(){
		$('html,body').animate({'scrollTop':0},500);
	});

	$('#go-top .uc-2vm').hover(function(){
		$('#go-top .uc-2vm-pop').removeClass('dn');
	},function(){
		$('#go-top .uc-2vm-pop').addClass('dn');
	});
});
</script>

</body>
</html>
