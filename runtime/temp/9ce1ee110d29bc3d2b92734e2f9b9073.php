<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\web\moban\thinkphp\tplay-master\public/../app/moblie\view\index\item.html";i:1571808620;}*/ ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <title>高灯兼职网-手机兼职闲时做日结</title>
        <meta http-equiv="keywords" content="高灯兼职网-手机兼职闲时做日结,wap" />
        <meta http-equiv="description" content="高灯兼职网-手机兼职闲时做日结" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width" initial-scale="1" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="format-detection" content="telephone=no,email=no" />
        <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" />
        <link rel="stylesheet" href="/static/moblie/css/mui.min.css" type="text/css" />
        <link rel="stylesheet" href="/static/moblie/css/mui.picker.min.css" type="text/css"/>
        <link rel="stylesheet" href="/static/moblie/css/mui.poppicker.css" type="text/css" />
        <link rel="stylesheet" href="/static/moblie/css/job.css" type="text/css" />
        <link rel="stylesheet" href="/static/moblie/css/style.css" type="text/css" />
        <link rel="stylesheet" href="/static/moblie/css/css.css" type="text/css" />
    </head>
    <body>
		<div class="body_wap">
            <header class="header_h">
                <div class="header_fixed">
                    <div class="header">
                        <div class="header_bg">
                            <a class="hd-lbtn mui-action-back" href="<?php echo url('index/index'); ?>"><i class="header_top_l"></i></a>
                            <div class="header_h1">
                                <div class="header_p_z"> 兼职</div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

<div class="header_navlist">
    <a href="javascript:void(0);" id="jobclick"><i class="naviconfont"></i></a>
</div>
<div style="padding:10px 10px;">
    <section>
     <div class="">
   <div class="user_contnet_box ">
    <div class="com_show_t1">
     <h2><?php echo $article['title']; ?></h2>
				</div>

				<div class="Part-time_job_js">

     <span class="Part-time_job_js_span"><i class="Part-time_job_js_city iconfont_parteye"></i><?php echo $article['how']; ?>次</span>
     <span class="Part-time_job_js_span"><i class="Part-time_job_js_city iconfont_partdate"></i><?php echo $article['create_time']; ?></span>
    </div>
    <div class="Part-time_job_js">
     <span class="Part-time_job_js_span "><i class="Part-time_job_js_s_doc ">￥</i><em class="Part-time_job_js_span_jg"><?php echo $article['salary']; ?></em></span>
    </div>

   </div>
     </div>
    </section>

    <section>
     <div class="mt10">
        <div class="user_contnet_box ">
            <div class="wap_title"><span class="">基本信息</span></div>
            <ul class="user_contnet_ul user_contnet_ul_jz">
                 <li><span class="user_contnet_info_n">工作类型：</span><?php echo $article['tag']; ?></li>
                 <li><span class="user_contnet_info_n"> 发&nbsp;布 &nbsp;者：</span>中山市古镇鑫望灯饰厂</li>
                 <li><span class="user_contnet_info_n">招聘人数： </span><?php echo $article['howmany']; ?>人</li>
                 <li><span class="user_contnet_info_n">性别要求： </span>不限</li>     <li><span class="user_contnet_info_n">有效期至： </span>长期招聘</li>
                 <li><span class="user_contnet_info_n">结算周期：</span><?php echo $article['outtime']; ?></li>
                 <li style="display: none;"><span class="user_contnet_info_n">工作地址： </span><?php echo $article['site']; ?></li>
            </ul>
        </div>
     </div>
    </section>

    <section>
     <div class="mt10" id="con_link_per">
   <div class="user_contnet_box ">

    <div class="">
         <div class="wap_title"><span class="">联系方式</span></div>

            <ul class="com_post_msg com_post_msg_touch">
                <li><i class="com_post_msg_touch_icon iconfont_jobshow_teluser"></i>联&nbsp;系 &nbsp;人：<?php echo $article['relation']; ?></li>
                <li class="com_post_msg_tel" style="display: none;"><i class="com_post_msg_touch_icon iconfont_jobshow_telip_______qq"></i>Q&nbsp;&nbsp;Q：   <span  style="color: #FF0000"> <a id="set_qq____hao_update" href="http://wpa.qq.com/msgrd?v=3site=qqmenu=yesuin=" style="color: #FF0000"> 正在获取...  </a>  </span>  </li>
                <li class="com_post_msg_tel"><i class="com_post_msg_touch_icon iconfont_jobshow_telip_______wx"></i>微信：
                    <i  style="color: #FF0000 ; border: 0px solid #ccc0; padding: 0px 0px;" class="btn_clipb" style="color: #FF0000">
                        <span id="set_weixinhao_update" class="btn_clipb" style="color: #FF0000"><font id="copyMy"><?php echo $article['weixin']; ?></font></span>

                    </i>
                    <button style="color: #FF0000 ; border: 0px solid #ccc0; padding: 0px 0px;" class="btn_clipb" onClick="copyFn()">
                     【点击复制微信号 】
                    </button>
                </li>
            </ul>

    </div>
    <div class="wap_title"><span class="">具体要求</span></div>
    <div class="part_show_cont muipreview" id="partcontent">
         <p>工作要求：<?php echo $article['content']; ?></p>
    </div>
    <div class="job_jz_tips">提示：刷信誉、淘宝刷钻、加YY联系的职位都是骗子！收取费用或押金的都有欺诈嫌疑，请警惕！</div>
    <div class="job_jz_tips_sq"><a class="job_jz_tips_sq_bth" onclick="layermsg('请添加页面上的联系方式!', 2);" href="javascript:;">我要报名</a></div>
   </div>
     </div>
		</section>
		</div>
    <!-- 微信复制成功弹窗 -->
    <div id="shadowhide" style="display: none;">
        <div class="tankuang"><p align="center"><img src="/static/moblie/picture/b73cf1e9dc6341c6b17a88f13d124252.gif" alt="" class="close" onclick="hidetext2()"></p><p class="tankuang_title" align="center">恭喜您</p><p class="copytxt" align="center">微信号复制成功，请打开微信，粘贴微信号添加好友。</p><div class="copylink"><p align="center"><a href="#" onclick="hidetext()"><span class="quer_a">打开微信</span></a></p></div></div>
    </div>

<script src="/static/moblie/js/clipboard.min.js" language="javascript"></script>
<section>
    <div class="yun_job_footer">
        <div class="yun_job_footer_fixed">
            <div class="yun_job_footer_bg">
                <div class="yun_job_footer_fx_left">
                    <div class="yun_job_footer_fx">
                    <a href="#" class=""><i class="iconfont_sc"></i> <span class="yun_job_footer_s">收藏</span></a>
                    </div>
                    <div class="yun_job_footer_fx">
                    <a href="#"><i class="iconfont_tel"></i> <span class="yun_job_footer_s">拨号</span></a>
                    </div>
                    <div class="yun_job_footer_fx">
                        <a href="#" id="shareClick" class=""> <i class="iconfont_jobshare"></i> <span class="yun_job_footer_s">分享</span></a>
                    </div>
                </div>
				 <div class="yun_job_footer_fx_right">
                  	<button style="color: #ffffff ; border: 0px solid #ccc0; padding: 0px 0px;" class="btn_clipb yun_job_footer_fx_right_bth" onClick="copyFn()">添加微信</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="/static/moblie/js/prefixfree.min.js" language="javascript"></script>
<script src="/static/moblie/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="/static/moblie/js/layer.m.js" language="javascript"></script>
<script src="/static/moblie/js/public.js" language="javascript"></script>
<script src="/static/moblie/js/part.js" language="javascript"></script>
<script type="text/javascript" src="/static/moblie/js/f8e5a9c26d384963bbf6506c18787f25.js" charset="utf-8"></script>
<script src="/static/moblie/js/map.js" language="javascript"></script>
<link rel="stylesheet" href="/static/moblie/css/mui.previewimage.css" type="text/css" />
<script src="/static/moblie/js/mui.min.js" language="javascript"></script>
<script src="/static/moblie/js/mui.zoom.js" language="javascript"></script>
<script src="/static/moblie/js/mui.previewimage.js" language="javascript"></script>
<script>
    function copyFn(){
      var val = document.getElementById('copyMy');
      window.getSelection().selectAllChildren(val);
      document.execCommand ("Copy");
      alert("您已经复制微信号!");
    }
  </script>
<div id='uclogin' class='none'></div><div class='none'></div>
</body> </html>
