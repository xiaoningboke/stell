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




        <link rel="stylesheet" href="/stell/Public/index/css/index.css">
        <link rel="stylesheet" href="/stell/Public/layui/css/layui.css">
        <script type="text/javascript" src="/stell/Public/index/js/biaogegundong.js"></script>
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
                <button data-method="offset" data-type="auto" id="leftbox" class="leftbox" data-type="auto" onclick="OpenDiv()"><img src="/stell/Public/image/r-number.png" />
                <p>重量计算器</p>
                </button>
                 <div id="div1">
                
                <div class="title">重量计算器</div>
                <div class="con">
                    <script LANGUAGE="JavaScript"> 
                    function enfocus()
                    {
                        var t1 = document.forms[0].Data.value;
                        var t2 = document.forms[0].Data2.value;
                        var t3 = document.forms[0].Data3.value ;
                        var t4 = document.forms[0].copy.value ;

                    if(t1!="" && t2!=""&& t3!=""){

                    document.getElementById("copy").value =( parseInt(t1) - parseInt(t2)) * parseInt(t3)*0.02466;
                    }
                    else {document.getElementById("copy").value = "";}
                    }

                    </script>
                    <form>
                        <div class="layui-form-item">
                         <label class="layui-form-label">外径(mm)：</label>
                            <div class="layui-input-inline">
                              <input lay-verify="required" placeholder="请输入外径" autocomplete="off" class="layui-input" type="text" name="Data" onkeyup="enfocus()">
                            </div>
                          </div>
                        <div class="layui-form-item">
                         <label class="layui-form-label">壁厚(mm)：</label>
                            <div class="layui-input-inline">
                              <input lay-verify="required" placeholder="请输入壁厚" autocomplete="off" class="layui-input" type="text" NAME="Data2" onkeyup="enfocus()">
                            </div>
                          </div>
                           <div class="layui-form-item">
                         <label class="layui-form-label">长度(M)：</label>
                            <div class="layui-input-inline">
                              <input lay-verify="required" placeholder="请输入长度" autocomplete="off" class="layui-input" type="text" NAME="Data3" onkeyup="enfocus()">
                            </div>
                          </div>
                           <div class="layui-form-item">
                         <label class="layui-form-label">重量：</label>
                            <div class="layui-input-inline">
                              <input lay-verify="required" placeholder="请输入长度" autocomplete="off" class="layui-input" type="text" AME="Copy" id="copy">
                            </div>
                          </div>
                      </form>
                </div>
               <a href="javascript:CloseDiv();">关闭</a>
        </div>



                <a href="#"><div class="main-top"></div></a>
                <div class="main-sousuo">
                    <!-- <div class="main-sousuo-top">
                        <button class="layui-btn layui-btn-warm" style="">找现货</button>
                    </div> -->
                    <div>
                        <form class="layui-form" method="post" action="<?php echo U('Home/Stock/resgoods');?>">
                            <div class="main-sousuo-bottom">
                                <span>材质</span>
                                <div class="layui-input-inline">
                                    <select name="material" lay-verify="required" lay-search="">
                                      <option value="">请输入或选择材质</option>
                                                                                             <?php if(is_array($materData)): foreach($materData as $key=>$vo): ?><option value="<?php echo ($vo); ?>"><?php echo ($vo); ?></option><?php endforeach; endif; ?>
                                    </select>
                                  </div>
                                  <span>规格</span>
                                    <div class="layui-input-inline">
                                    <input type="text" name="specifications1"   lay-verify="required" placeholder="请输入外径" autocomplete="off" class="layui-input">
                                </div>
                                   <span>X</span>
                                    <div class="layui-input-inline" style="margin-right: 20px">
                                    <input type="text" name="specifications2"   lay-verify="required" placeholder="请输入壁厚" autocomplete="off" class="layui-input">
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
                                <table class="table" align="center">
                                                                    <thead class="fixedThead" align="center">
                                                                    <tr>
                                                                    <th>品种</th>
                                                                    <th>材质</th>
                                                                    <th>规格</th>
                                                                    <th>钢厂</th>
                                                                    <th>重量/数量</th>
                                                                    <th>供应商</th>
                                                                    <th>联系方式</th>
                                                                    <th>仓库区</th>

                                                                    </tr>
                                                                    </thead>

                                                                    <tbody  id="test" class="scrollTbody" align="center">
                                                                      <?php if(is_array($goodsDate)): foreach($goodsDate as $key=>$vo): ?><tr>
                                                                            <td><?php echo ($vo["varieties"]); ?></td>
                                                                            <td><?php echo ($vo["material"]); ?></td>
                                                                            <td><?php echo ($vo["specifications"]); ?></td>
                                                                            <td><?php echo ($vo["field"]); ?></td>
                                                                            <td><?php echo ($vo["weight"]); ?></td>
                                                                            <td><?php echo ($vo["price"]); ?></td>
                                                                            <td><?php echo ($vo["contact"]); ?></td>
                                                                            <td><?php echo ($vo["warehouse"]); ?></td>
                                                                        </tr><?php endforeach; endif; ?>
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
                            <div class="main-lxfs-b">手机：</div><?php echo ($contentDate["phone"]); ?>
                        </div>
                        <div class="main-lxfs-ct">
                            <div class="main-lxfs-b">QQ:</div><?php echo ($contentDate["qq"]); ?>
                        </div>
                        <div class="main-lxfs-ct">
                            <div class="main-lxfs-b">微信：</div><?php echo ($contentDate["wetch"]); ?>
                        </div>
                        <div class="main-lxfs-ct">
                            <div class="main-lxfs-b">地址：</div><?php echo ($contentDate["address"]); ?>
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
                                   <?php if(is_array($conDate)): foreach($conDate as $key=>$vo): ?><td align="left">
                                    <a class="a1" href="<?php echo U('Home/product/pro',array('id'=>$vo['id']));?>">
                                      <img src="/stell/Public/index/img/cpzh/<?php echo ($vo["img"]); ?>">
                                      <br><?php echo ($vo["title"]); ?> <br>
                                      联系人：<?php echo ($vo["lianxiren"]); ?><br>
                                      联系方式：<?php echo ($vo["lianxifangshi"]); ?></a></td><?php endforeach; endif; ?>
                                    
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

        </div>
        <script src="/stell/Public/layui/layui.js" charset="utf-8"></script>
        <script>
           function OpenDiv(){
                 document.getElementById("div1").style.display="block";
                document.getElementById("open").style.display="none";
            }

            function CloseDiv(){
                document.getElementById("div1").style.display="none";
                document.getElementById("open").style.display="block";
            }
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