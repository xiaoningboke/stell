<?php if (!defined('THINK_PATH')) exit();?>        <!DOCTYPE html>
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





        <link rel="stylesheet" type="text/css" href="/Public/product/css/nprogress.css">
        <link rel="stylesheet" type="text/css" href="/Public/product/css/style.css">
        <link rel="stylesheet" type="text/css" href="/Public/product/css/font-awesome.min.css">
        <link rel="apple-touch-icon-precomposed" href="/Public/product/images/icon.png">
        <link rel="shortcut icon" href="/Public/product/images/favicon.ico">
        <script src="/Public/product/js/jquery-2.1.4.min.js"></script>
        <script src="/Public/product/js/nprogress.js"></script>
        <script src="/Public/product/js/jquery.lazyload.min.js"></script>
        </head>
        <body>
        <div id="content">
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

            <div class="main">
            <section class="container">
                <div class="wzimg">
    <img src="/Public/image/qwdfbnmjytr8.png">
  </div>
<div class="content-wrap">
<div class="content">

  <div class="title">
  <h3 style="line-height: 1.3"></h3>
  </div>
  <?php if(is_array($list)): foreach($list as $key=>$vo): ?><article class="excerpt excerpt-1"><a class="focus" href="<?php echo U('Home/information/pro',array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>" target="_blank" ><img class="thumb" data-original="/Public/information/img/tp/<?php echo ($vo["image"]); ?>" src="/Public/information/img/tp/<?php echo ($vo["image"]); ?>" alt="<?php echo ($vo["title"]); ?>"  style="display: inline;"></a>
  <header><a class="cat" href="<?php echo U('Home/information/pro',array('id'=>$vo['id']));?>" title="资讯" >资讯<i></i></a>
    <h2><a href="<?php echo U('Home/information/pro',array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>" target="_blank" ><?php echo ($vo["title"]); ?></a></h2>
  </header>
  <p class="meta">
    <time class="time"><i class="glyphicon glyphicon-time"></i> <?php echo ($vo["time"]); ?></time>
    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> <?php echo ($vo["zuozhe"]); ?></span> <a class="comment" href="<?php echo U('Home/information/pro',array('id'=>$vo['id']));?>" title="资讯" target="_blank" ><i class="glyphicon glyphicon-comment"></i> **</a></p>
  <div class="note" style="height: 100px;overflow:hidden; "><?php echo ($vo["content"]); ?></div>
  </article><?php endforeach; endif; ?>

</div>
</div>
<aside class="sidebar">

<div class="widget widget_hot">
    <h3>最新资讯</h3>
    <ul>
 <?php if(is_array($randData)): foreach($randData as $key=>$vo): ?><li><a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/information/pro',array('id'=>$vo['id']));?>" ><span class="thumbnail">
<img class="thumb" data-original="images/201610181739277776.jpg" src="/Public/information/img/tp/<?php echo ($vo["image"]); ?>" alt="<?php echo ($vo["title"]); ?>"  style="display: block;">
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


        <script src="/Public/layui/layui.js" charset="utf-8"></script>


</body>
</html>