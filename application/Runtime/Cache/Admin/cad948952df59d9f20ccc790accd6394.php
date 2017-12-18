<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>产品展示</title>
    <link rel="stylesheet" type="text/css" href="/stell/Public/layui/css/layui.css">
</head>

<body class="layui-col-xs8">
<form method="post" action="<?php echo U('Admin/Index/addproducts');?>">

<div class="layui-form-item" style="padding-top: 50px">
<div class="layui-form-item">
    <label class="layui-form-label">标题</label>
    <div class="layui-input-block">
      <input name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" type="text">
    </div>
  </div>
  </div>


<div class="layui-form-item">
<div class="layui-inline">
    <label class="layui-form-label">材质</label>
    <div class="layui-input-inline">
      <input name="caizhi" lay-verify="required" placeholder="请输入材质" autocomplete="off" class="layui-input" type="text">
    </div>
  </div>

<div class="layui-inline">
    <label class="layui-form-label">钢厂</label>
    <div class="layui-input-inline">
      <input name="gangchang" lay-verify="required" placeholder="请输入钢厂" autocomplete="off" class="layui-input" type="text">
    </div>
  </div>
  </div>


<div class="layui-form-item">
<div class="layui-inline">
    <label class="layui-form-label">联系人</label>
    <div class="layui-input-inline">
      <input name="lianxiren" lay-verify="required" placeholder="请输入联系人" autocomplete="off" class="layui-input" type="text">
    </div>
  </div>

<div class="layui-inline">
    <label class="layui-form-label">联系方式</label>
    <div class="layui-input-inline">
      <input name="lisnxifangshi" lay-verify="required" placeholder="请输入联系方式" autocomplete="off" class="layui-input" type="text">
    </div>
  </div>
  </div>
<div class="layui-form-item">
<div class="layui-inline">
    <label class="layui-form-label">价格</label>
    <div class="layui-input-inline">
      <input name="price" lay-verify="required" placeholder="请输入价格" autocomplete="off" class="layui-input" type="text">
    </div>
  </div>

<div class="layui-inline">
    <label class="layui-form-label">规格</label>
    <div class="layui-input-inline">
      <input name="guige" lay-verify="contact" placeholder="请输入规格" autocomplete="off" class="layui-input" type="text">
    </div>
  </div>
  </div>

 <div class="layui-form-item">
<div class="layui-inline">
    <label class="layui-form-label">发布时间</label>
    <div class="layui-input-inline">
        <input name="time" id="date" lay-verify="date" placeholder="年-月-日" autocomplete="off" class="layui-input" type="text">
      </div>
  </div>

<div class="layui-inline">
 <label class="layui-form-label">图片</label>
    <div class="layui-input-inline">
      <input class="layui-input"  type="file" value="">
    </div>
  </div>
  </div>
<div class="layui-form-item">
 <label class="layui-form-item">内容</label>
  </div>
<div class="layui-form-item">

      <textarea id="demo" style="display: none;" name="content"></textarea>
</div>
<input type="submit" name="" value="提交">
</form>



</body>
 <script src="/stell/Public/layui/layui.js"></script>
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




  layedit.set({
  uploadImage: {
    url: '<?php echo U('Admin/Index/updatePicture');?>' //接口url
    ,type: '' //默认post
  }
});
//注意：layedit.set 一定要放在 build 前面，否则配置全局接口将无效。
layedit.build('demo'); //建立编辑器
});
</script>
</html>