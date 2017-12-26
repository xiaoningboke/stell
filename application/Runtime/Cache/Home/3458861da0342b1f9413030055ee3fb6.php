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




        <link rel="stylesheet" href="/Public/product/css/index.css">
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
            <div class="main-img"><img src="/Public/image/qwdfbnmjytr3.png"></div>
            <div class="main-big">
            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="main-pro">
                <input type="hidden" value="<?php echo ($vo["id"]); ?>">
                      <a href="<?php echo U('Home/product/pro',array('id'=>$vo['id']));?>"><h2><?php echo ($vo["title"]); ?> </h2></a>
                      <p><span>材质:</span><?php echo ($vo["caizhi"]); ?></p>
                      <p><span>规格:</span><?php echo ($vo["guige"]); ?></p>
                      <p><span>钢厂:</span><?php echo ($vo["gangchang"]); ?></p>
                      <p><span>发布时间:</span><?php echo ($vo["time"]); ?></p>
                      <p><span>联系人:</span><?php echo ($vo["caizhi"]); ?></p>
                      <p><span>联系电话:</span><?php echo ($vo["caizhi"]); ?></p>
                      <a href="<?php echo U('Home/product/pro',array('id'=>$vo['id']));?>"><c>产看详情</c></a>
                </div><?php endforeach; endif; ?>
              </div>
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