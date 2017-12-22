<?php if (!defined('THINK_PATH')) exit();?>        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" type="text/css" href="/stell/Public/head.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/footer.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/chushihua.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/layui/css/layui.css">
<!-- 客服 -->
	<link rel="stylesheet" type="text/css" href="/stell/Public/qq/css/style.css">
	<script type="text/javascript" src="/stell/Public/qq/js/jquery-1.8.3.min"></script>




        <link rel="stylesheet" href="/stell/Public/logistics/css/index.css">
        </head>
        <body>
        <div id="content">
        	<div class="header">
                <div class="header-left">
                    <img src="/stell/Public/image/qwdfbnmjytr7.jpg">
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
                <div class="main-img">
                  <img src="/stell/Public/image/qwdfbnmjytr4.jpg">
                </div>
                <div class="main-cent">
                    <div class="main-cent-one">
                      <span class="one-pic"></span>
                      <div class="cent-word">
                           <h1>免费找车</h1>
                            <p>物流路线 一键搜索，快速响应</p>
                      </div>

                     </div>
                    <div class="main-cent-one">
                      <span class="one-pic"></span>
                      <div class="cent-word">
                           <h1>全面覆盖</h1>
                            <p>近百个城市已支持物流查询</p>
                      </div>
                    </div>
                    <div class="main-cent-one">
                      <span class="one-pic"></span>
                      <div class="cent-word">
                           <h1>方便快捷</h1>
                            <p>7*24小时专业客服人员为您服务</p>
                      </div>
                    </div>
                </div>
                <div>
                  <div class="lxwm">联系我们</div>
                  <div class="mian-buttom">
                    <div class="word buttom">
                      <h2 class="qgfwrx"><em></em>全国服务热线</h2>
                      <p class="fwrx">服务热线：<?php echo ($conData["phone"]); ?></p>
                      <p class="fwsj">（服务时间：8：00-17：30）</p>
                    </div>
                    <div class="picture buttom">
                        <h2 class="qgfwrx"><em></em>QQ客服</h2>
                        <img src="/stell/Public/image/qwdfbnmjytr5.jpg">
                    </div>
                    <div class="picture buttom">
                        <h2 class="qgfwrx"><em></em>微信客服</h2>
                        <img src="/stell/Public/image/qwdfbnmjytr6.jpg">
                    </div>
                  </div>
                </div>
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


        <script src="/stell/Public/layui/layui.js" charset="utf-8"></script>
		<script>
		layui.use(['form', 'layedit', 'laydate'], function(){
		  var form = layui.form
		  ,layer = layui.layer
		  ,layedit = layui.layedit
		  ,laydate = layui.laydate;

		  //日期
		  laydate.render({
		    elem: '#date'
		  });
		  laydate.render({
		    elem: '#date1'
		  });

		  //创建一个编辑器
		  var editIndex = layedit.build('LAY_demo_editor');

		  //自定义验证规则
		  form.verify({
		    title: function(value){
		      if(value.length < 5){
		        return '标题至少得5个字符啊';
		      }
		    }
		    ,pass: [/(.+){6,12}$/, '密码必须6到12位']
		    ,content: function(value){
		      layedit.sync(editIndex);
		    }
		  });

		  //监听指定开关
		  form.on('switch(switchTest)', function(data){
		    layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
		      offset: '6px'
		    });
		    layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
		  });

		  //监听提交
		  form.on('submit(demo1)', function(data){
		    layer.alert(JSON.stringify(data.field), {
		      title: '最终的提交信息'
		    })
		    return false;
		  });


		});
		</script>

</body>
</html>