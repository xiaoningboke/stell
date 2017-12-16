<?php if (!defined('THINK_PATH')) exit();?>        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" type="text/css" href="/stell/Public/head.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/footer.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/chushihua.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/layui/css/layui.css">





        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="stylesheet" type="text/css" href="/stell/Public/product/css/nprogress.css">
        <link rel="stylesheet" type="text/css" href="/stell/Public/product/css/style.css">
        <link rel="stylesheet" type="text/css" href="/stell/Public/product/css/font-awesome.min.css">
        <link rel="apple-touch-icon-precomposed" href="/stell/Public/product/images/icon.png">
        <link rel="shortcut icon" href="/stell/Public/product/images/favicon.ico">
        <script src="/stell/Public/product/js/jquery-2.1.4.min.js"></script>
        <script src="/stell/Public/product/js/nprogress.js"></script>
        <script src="/stell/Public/product/js/jquery.lazyload.min.js"></script>
        </head>
        <body>
        <div id="content">
        	<div class="header">
                <div class="header-left">
                    <img src="/stell/Public/index/img/logo.jpg">
                </div>
                <div class="header-right">
                    <ul class="header-right-ul">
                        <li>
                            <a href="#">首页</a>
                            <i>/</i>
                        </li>
                        <li>
                            <a href="#">现货查询</a>
                            <i>/</i>
                        </li>
                        <li>
                            <a href="#">产品中心</a>
                            <i>/</i>
                        </li>
                        <li>
                            <a href="#">资讯</a>
                            <i>/</i>
                        </li>
                        <li>
                            <a href="#">钢管知识</a>
                            <i>/</i>
                        </li>
                        <li>
                            <a href="#">关于我们</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main">
            <section class="container">
<div class="content-wrap">
<div class="content">
  <div class="title">
  <h3 style="line-height: 1.3">新闻资讯</h3>
  </div>
  <?php if(is_array($list)): foreach($list as $key=>$vo): ?><article class="excerpt excerpt-1"><a class="focus" href="<?php echo U('Home/information/pro',array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>" target="_blank" ><img class="thumb" data-original="images/201610181739277776.jpg" src="/stell/Public/information/img/tp/<?php echo ($vo["image"]); ?>" alt="<?php echo ($vo["title"]); ?>"  style="display: inline;"></a>
  <header><a class="cat" href="<?php echo U('Home/information/pro',array('id'=>$vo['id']));?>" title="资讯" >资讯<i></i></a>
    <h2><a href="<?php echo U('Home/information/pro',array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>" target="_blank" ><?php echo ($vo["title"]); ?></a></h2>
  </header>
  <p class="meta">
    <time class="time"><i class="glyphicon glyphicon-time"></i> <?php echo ($vo["time"]); ?></time>
    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> <?php echo ($vo["zuozhe"]); ?></span> <a class="comment" href="<?php echo U('Home/information/pro',array('id'=>$vo['id']));?>" title="资讯" target="_blank" ><i class="glyphicon glyphicon-comment"></i> **</a></p>
  <p class="note" style="height: 100px;overflow:hidden; "><?php echo ($vo["content"]); ?></p>
  </article><?php endforeach; endif; ?>

</div>
</div>
<aside class="sidebar">

<div class="widget widget_hot">
    <h3>最新资讯</h3>
    <ul>
 <?php if(is_array($list)): foreach($list as $key=>$vo): ?><li><a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/information/pro',array('id'=>$vo['id']));?>" ><span class="thumbnail">
<img class="thumb" data-original="images/201610181739277776.jpg" src="/stell/Public/information/img/tp/<?php echo ($vo["image"]); ?>" alt="<?php echo ($vo["title"]); ?>"  style="display: block;">
</span><span class="text"><?php echo ($vo["title"]); ?></span><span class="muted"><i class="glyphicon glyphicon-time"></i>
<?php echo ($vo["time"]); ?></span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li><?php endforeach; endif; ?>
    </ul>
  </div>

</aside>
</section>


              <div class="result page"><?php echo ($page); ?></div>
        </div>
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
				<li>现货查询</li>
				<li>产品中心</li>
				<li>资讯</li>
				<li>钢管知识</li>
				<li>关于我们</li>
			</ul>
		</div>
		<div class="footer-youlian">
			<b>友情链接：</b>
			
				<a href="#">千行创想网络</a>
				<a href="#">千行创想网络</a>
				<a href="#">千行创想网络</a>
				<a href="#">千行创想网络</a>
				<a href="#">千行创想网络</a>
				<a href="#">千行创想网络</a>
				<a href="#">千行创想网络</a>
				<a href="#">千行创想网络</a>
			
		</div>
		<div class="footer-lxfs">
			联系电话：0635-8889265
		</div>
		<div class="footer-bq">
			Copyright2016 版权所有 www.maigang123.com 麦钢网 All Rights Reserved 鲁ICP备1600614
		</div>
	</div>
</div>

        <script src="/stell/Public/layui/layui.js" charset="utf-8"></script>


</body>
</html>