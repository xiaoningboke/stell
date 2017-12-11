<?php if (!defined('THINK_PATH')) exit();?>        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" type="text/css" href="/stell/Public/head.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/footer.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/chushihua.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/layui/css/layui.css">





        <link rel="stylesheet" href="/stell/Public/stock/css/index.css">
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
                <div class="main-datu">
                    <img src="/stell/Public/stock/img/taili.gif">
                </div>
                <div class="main-sousuo">
                    <form class="layui-form" method="post" action="<?php echo U('Home/Stock/resgoods');?>">
                            <div class="main-sousuo-bottom">
                                <span>材质</span>
                            <div class="layui-input-inline">
                                    <select name="material" lay-verify="required" lay-search="">
                                      <option value="">请输入或选择材质</option>
                                                                                            <?php if(is_array($materData)): foreach($materData as $key=>$vo): ?><option value="<?php echo ($vo); ?>" name="<?php echo ($vo); ?>"><?php echo ($vo); ?></option><?php endforeach; endif; ?>
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
                        <div class="bmyx">因版面有限，未列规格请电询，非标尺规格可加工定做</div>
                </div>
                <div class="layui-form">
                   <table class="layui-table">
                        <colgroup>
                          <col width="150">
                          <col width="150">
                          <col width="150">
                          <col>
                        </colgroup>
                        <thead>
                          <tr>
                            <th>品种</th>
                            <th>材质</th>
                            <th>规格</th>
                            <th>钢厂</th>
                            <th>重量/数量</th>
                            <th>供应商</th>
                            <th>联系方式</th>
                            <th>仓库区</th>
                            <th>更新时间</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                            <td><?php echo ($vo["varieties"]); ?></td>
                            <td><?php echo ($vo["material"]); ?></td>
                            <td><?php echo ($vo["specifications"]); ?></td>
                            <td><?php echo ($vo["field"]); ?></td>
                             <td><?php echo ($vo["weight"]); ?></td>
                             <td><?php echo ($vo["supplier"]); ?></td>
                            <td><?php echo ($vo["contact"]); ?></td>
                            <td><?php echo ($vo["warehouse"]); ?></td>
                            <td><?php echo ($vo["time"]); ?></td>
                          </tr><?php endforeach; endif; ?>
                        </tbody>
                      </table>
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