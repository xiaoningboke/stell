<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?>-<?php echo ($seoData["gsname"]); ?></title>
    <link rel="stylesheet" type="text/css" href="/Public/head.css">
    <link rel="stylesheet" type="text/css" href="/Public/footer.css">
    <link rel="stylesheet" type="text/css" href="/Public/chushihua.css">
    <link rel="stylesheet" type="text/css" href="/Public/layui/css/layui.css">
<!-- 客服 -->
	<link rel="stylesheet" type="text/css" href="/Public/qq/css/style.css">
	<script type="text/javascript" src="/Public/qq/js/jquery-1.8.3.min"></script>
	<!-- SEO -->
	<meta name="description" content="<?php echo ($seoData["description"]); ?>" />
	<meta name="keywords" content="<?php echo ($seoData["keywords"]); ?>" />
	<meta name="generator" content="千行创想网络" />
	<meta name="template" content="Zero" />




<link rel="stylesheet" type="text/css" href="/Public/information/css/nprogress.css">
<link rel="stylesheet" type="text/css" href="/Public/information/css/style.css">
<link rel="stylesheet" type="text/css" href="/Public/information/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="/Public/information/images/icon.png">
<link rel="shortcut icon" href="/Public/information/images/favicon.ico">
<script src="/Public/information/js/jquery-2.1.4.min.js"></script>
<script src="/Public/information/js/nprogress.js"></script>
<script src="/Public/information/js/jquery.lazyload.min.js"></script>

</head>
<body class="user-select single">
<header class="header">
<div class="header">
                <div class="header-left">
                    <img src="/Public/image/qwdfbnmjytr7.png">
                </div>
                <div class="header-right">
                    <ul class="header-right-ul">
                        <li>
                            <a href="<?php echo U('Home/Index/index');?>">首页</a>
                            <i>/</i>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Stock/index');?>">现货查询</a>
                            <i>/</i>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Product/index');?>">产品中心</a>
                            <i>/</i>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Information/index');?>">资讯</a>
                            <i>/</i>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Knowledge/index');?>">钢管知识</a>
                            <i>/</i>
                        </li>
                         <li>
                            <a href="<?php echo U('Home/Logistics/index');?>">货运物流</a>
                            <i>/</i>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/About/index');?>">关于我们</a>
                        </li>
                    </ul>
                </div>
            </div>

</header>
<section class="container">
<div class="content-wrap">
<div class="content">
  <header class="article-header">
	<h1 class="article-title">关于我们</h1>
	<div class="article-meta"> <span class="item article-meta-time">
	  <time class="time" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="发表时间：<?php echo ($data["time"]); ?>"><i class="glyphicon glyphicon-time"></i> </time>
	  </span> <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="联系人：<?php echo ($data["lianxiren"]); ?>"><i class="glyphicon glyphicon-globe"></i> </span> </div>
  </header>
  <article class="article-content">
	<?php echo ($data["introduction"]); ?>
	<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div>

		  <script>                  window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "1", "bdSize": "32" }, "share": {} }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=0.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
  </article>

</div>
</div>
<aside class="sidebar">
<div class="fixed">
  <div class="widget widget-tabs" style="height: 500px;">
	<ul class="nav nav-tabs" role="tablist">
	  <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" draggable="false">联系方式</a></li>

	</ul>
	<div class="tab-content" style="height: 500px;">
	  <div role="tabpanel" class="tab-pane contact active" id="notice"  style="height: 500px;">
		<h2>联系人:
			  <?php echo ($data["name"]); ?>
		  </h2>
		  <h2>手机:
		  <span id="sitetime"> <?php echo ($data["phone"]); ?> </span></h2>
            <h2>电话:
          <span id="sitetime"> <?php echo ($data["qq"]); ?> </span></h2>
            <h2>传真:
          <span id="sitetime"> <?php echo ($data["wetch"]); ?> </span></h2>
            <h2>地址:
          <span id="sitetime"> <?php echo ($data["address"]); ?> </span></h2>
	  </div>

	</div>
  </div>

</div>



</aside>
</section>
 <div class="footer">
	<div class="footer-top">
		<ul class="w1180">
			<li>
				<i class="add1"></i>
				免费发布库存
			</li>
			<li>
				<i class="add2"></i>
				全国海量库存
			</li>
			<li>
				<i class="add3"></i>
				精准搜索现货
			</li>
			<li>
				<i class="add4"></i>
				中立开放共赢
			</li>
		</ul>
	</div>
	<hr>
	<div class="footer-buttom">
		<div class="footer-nav">
			<ul>
				<li><a href="<?php echo U('Home/Stock/index');?>">现货查询</a></li>
				<li><a href="<?php echo U('Home/Product/index');?>">产品中心</a></li>
				<li><a href="<?php echo U('Home/Information/index');?>">资讯</a></li>
				<li><a href="<?php echo U('Home/Knowledge/index');?>">钢管知识</a></li>
				<li><a href="<?php echo U('Home/Logistics/index');?>">货运物流</a></li>
				<li><a href="<?php echo U('Home/About/index');?>">关于我们</a></li>
			</ul>
		</div>
		<div class="footer-youlian">
			<b>友情链接：</b>
				<?php if(is_array($connectData)): foreach($connectData as $key=>$vo): ?><a href="<?php echo ($vo["connect"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; ?>

		</div>
		<div class="footer-lxfs">
			联系电话：<?php echo ($secphone["phone"]); ?>
		</div>
		<div class="footer-bq">
			Copyright2017 版权所有All Rights Reserved 鲁ICP备1600614
		</div>
	</div>
</div>
<!-- 客服 -->
<div class="izl-rmenu">
	<a  class="cart1" style="display: block; background-color: black;"><div class="pic1"></div></a>
    <a class="consult" target="_blank"><div class="phone" style="display:none;"><?php echo ($secphone["phone"]); ?></div></a>    
    <a class="cart"><div class="pic"></div></a>   
</div>

<!-- 客服 -->

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.ias.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>