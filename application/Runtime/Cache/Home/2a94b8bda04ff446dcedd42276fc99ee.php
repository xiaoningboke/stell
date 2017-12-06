<?php if (!defined('THINK_PATH')) exit();?>        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" type="text/css" href="/stell/Public/head.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/footer.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/chushihua.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/layui/css/layui.css">





        <link rel="stylesheet" href="/stell/Public/index/css/index.css">
        <link rel="stylesheet" href="/stell/Public/layui/css/layui.css">
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
            	<a href="#"><div class="main-top"></div></a>
            	<div class="main-sousuo">
            		<!-- <div class="main-sousuo-top">
            			<button class="layui-btn layui-btn-warm" style="">找现货</button>
            		</div> -->
            		<div>
            			<form class="layui-form">
	            			<div class="main-sousuo-bottom">
	            				<span>材质</span>
								<div class="layui-input-inline">
							        <select name="modules" lay-verify="required" lay-search="">
							          <option value="">请输入或选择材质</option>
							          <option value="1">layer</option>
							          <option value="2">form</option>
							          <option value="3">layim</option>
							          <option value="4">element</option>
							          <option value="5">laytpl</option>
							          <option value="6">upload</option>
							          <option value="7">laydate</option>
							          <option value="8">laypage</option>
							          <option value="9">flow</option>
							          <option value="10">util</option>
							          <option value="11">code</option>
							          <option value="12">tree</option>
							          <option value="13">layedit</option>
							          <option value="14">nav</option>
							          <option value="15">tab</option>
							          <option value="16">table</option>
							          <option value="17">select</option>
							          <option value="18">checkbox</option>
							          <option value="19">switch</option>
							          <option value="20">radio</option>
							        </select>
							      </div>
							      <span>规格</span>
							        <div class="layui-input-inline">
                                    <input type="text" name="title" required  lay-verify="required" placeholder="请输入外径" autocomplete="off" class="layui-input">
                                </div>
							       <span>X</span>
							        <div class="layui-input-inline" style="margin-right: 20px">
                                    <input type="text" name="title" required  lay-verify="required" placeholder="请输入壁厚" autocomplete="off" class="layui-input">
                                </div>
                                 <button class="layui-btn layui-btn-danger">立即搜索</button>
	            			</div>
	            		</form>
            		</div>
            	</div>
            	<div class="main-center">
            	<div class="main-xianhuo">
            		<div class="main-xianhuo-top">
            			<img src="/stell/Public/index/img/jrtitle.png">
            			<ul>
            				<li><a href="#">读万卷书不如行万里路读万卷书不如行万里路读万卷书不如行万里路</a></li>
            				<li><a href="#">读万卷书不如行万里路</a></li>
            			</ul>
            		</div>
            		<div class="main-xianhuo-buttm">
            			<div class="main-xb-left">
            				<div class="main-xb-left-top">
            					<span>现货库存</span>
            					<div class="main-gdxhkc"><a href="#">更多现货库存<i class="layui-icon">&#xe602;</i> </a> </div>
            				</div>
            				<div>
            					 <table class="layui-table" style="font-size: 14px;">
							      <colgroup>
							        <col width="150">
							        <col>
							      </colgroup>
							      <thead>
							        <tr style="color: #000000">
							          <th>品种</th>
							          <th>材质</th>
							          <th>规格</th>
							          <th>重量</th>
							          <th>价格</th>
							          <th>联系方式</th>
							          <th>仓库区</th>
							          <th>更新时间</th>
							        </tr>
							      </thead>
							      <tbody class="biaoge">
							        <tr>
							          <td>流体管</td>
							          <td>20#</td>
							          <td>4×1</td>
							          <td>1.5</td>
							          <td>15</td>
							          <td>17866666666</td>
							          <td>聊城金昊</td>
							          <td>2016-11-28</td>

							        </tr>
							        <tr>
							          <td>流体管</td>
							          <td>20#</td>
							          <td>4×1</td>
							          <td>1.5</td>
							          <td>15</td>
							          <td>17866666666</td>
							          <td>聊城金昊</td>
							          <td>2016-11-28</td>

							        </tr>
							        <tr>
							          <td>流体管</td>
							          <td>20#</td>
							          <td>4×1</td>
							          <td>1.5</td>
							          <td>15</td>
							          <td>17866666666</td>
							          <td>聊城金昊</td>
							          <td>2016-11-28</td>

							        </tr>
							        <tr>
							          <td>流体管</td>
							          <td>20#</td>
							          <td>4×1</td>
							          <td>1.5</td>
							          <td>15</td>
							          <td>17866666666</td>
							          <td>聊城金昊</td>
							          <td>2016-11-28</td>

							        </tr>
							        <tr>
							          <td>流体管</td>
							          <td>20#</td>
							          <td>4×1</td>
							          <td>1.5</td>
							          <td>15</td>
							          <td>17866666666</td>
							          <td>聊城金昊</td>
							          <td>2016-11-28</td>

							        </tr>
							      </tbody>
							    </table>

            				</div>
            			</div>
            			<div></div>
            		</div>
            	</div>
            	<div class="main-lxfs">
            		<div class="main-lxfs-title">联系方式</div>
            		<div class="main-lxfs-con">
            			<div class="main-lxfs-ct">
            				<div class="main-lxfs-b">手机：</div>18888888888
            			</div>
            			<div class="main-lxfs-ct">
            				<div class="main-lxfs-b">QQ:</div>8888888888
            			</div>
            			<div class="main-lxfs-ct">
            				<div class="main-lxfs-b">微信：</div>18888888888
            			</div>
            			<div class="main-lxfs-ct">
            				<div class="main-lxfs-b">地址：</div>聊城市东昌府区
            			</div>
            		</div>
            	</div>
            </div>
            	<div class="main-cpzh">
            		<div class="main-cpzh-title">
            			产品展示
            		</div>
            		<!--无缝滚动-->
            		<div id="demo" class="hdo gd_img">
			            <table>
			              <tr>
			                <td id="demo1" valign="top">
			                  <table>
			                    <tr>
			                      <td align="left">
			                        <a class="a1" href="#">
			                          <img src="/stell/Public/index/img/cpzh/1.jpg">
			                          <br>45#无缝钢管28-89mm <br>
			                          电话：0635-8887256<br>
			                      		手机：18888888888</a></td>
			                      <td align="left">
			                        <a class="a1" href="#">
			                          <img src="/stell/Public/index/img/cpzh/2.jpg">
			                          <br>45#无缝钢管28-89mm <br>
			                          电话：0635-8887256<br>
			                      		手机：18888888888</a></td>
			                      <td align="left">
			                        <a class="a1" href="#">
			                          <img src="/stell/Public/index/img/cpzh/3.jpg">
			                          <br>45#无缝钢管28-89mm <br>
			                          电话：0635-8887256<br>
			                      		手机：18888888888</a></td>
			                      <td align="left">
			                        <a class="a1" href="#">
			                          <img src="/stell/Public/index/img/cpzh/4.jpg">
			                          <br>45#无缝钢管28-89mm <br>
			                          电话：0635-8887256<br>
			                      		手机：18888888888</a></td>
			                          <td align="left">
			                        <a class="a1" href="#">
			                          <img src="/stell/Public/index/img/cpzh/4.jpg">
			                          <br>45#无缝钢管28-89mm <br>
			                          电话：0635-8887256<br>
			                      		手机：18888888888</a></td>
			                          <td align="left">
			                        <a class="a1" href="#">
			                          <img src="/stell/Public/index/img/cpzh/4.jpg">
			                          <br>45#无缝钢管28-89mm <br>
			                          电话：0635-8887256<br>
			                      		手机：18888888888</a></td>

			                    </tr>
			                  </table>
			                </td>
			                <td id="demo2" valign="top"></td>
			              </tr>
			            </table>
			          </div>
			          <script type="text/javascript" src="/stell/Public/index/js/seamless.js"></script>
            		<!--无缝滚动-->
            	</div>
            </div>
            <script type="text/javascript"></script>
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
        </div>
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