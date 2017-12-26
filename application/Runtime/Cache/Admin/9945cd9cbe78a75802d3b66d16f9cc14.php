<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>产品展示</title>
    <link rel="stylesheet" type="text/css" href="/Public/layui/css/layui.css">
</head>

<body class="layui-col-xs8">
<form method="post" action="<?php echo U('Admin/main/exitSeo');?>" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
<input type="hidden" name="img" value="<?php echo ($data["img"]); ?>">

<div class="layui-form-item" style="padding-top: 50px">
<div class="layui-form-item">
    <label class="layui-form-label">站点名称</label>
    <div class="layui-input-block">
      <input name="gsname" lay-verify="title" autocomplete="off" placeholder="请输入站点名称" class="layui-input" type="text" value="<?php echo ($data["gsname"]); ?>">
    </div>
  </div>
  </div>
<div class="layui-form-item">
    <label class="layui-form-label">关键字</label>
    <div class="layui-input-block">
      <input name="keywords" lay-verify="title" autocomplete="off" placeholder="请输入关键字" class="layui-input" type="text" value="<?php echo ($data["keywords"]); ?>">
    </div>
  </div>
  </div><div class="layui-form-item">
    <label class="layui-form-label">站点描述</label>
    <div class="layui-input-block">
      <input name="description" lay-verify="title" autocomplete="off" placeholder="请输入站点描述" class="layui-input" type="text" value="<?php echo ($data["description"]); ?>">
    </div>
  </div>
  </div>


<input type="submit" name="" value="提交">
</form>



</body>
 <script src="/Public/layui/layui.js"></script>
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
    url: '<?php echo U('Admin/main/updatePicture');?>' //接口url
    ,type: '' //默认post
  }
});
//注意：layedit.set 一定要放在 build 前面，否则配置全局接口将无效。
layedit.build('demo'); //建立编辑器
});
</script>
</html>