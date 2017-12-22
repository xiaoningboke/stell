<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>修改链接</title>
    <link rel="stylesheet" type="text/css" href="/stell/Public/layui/css/layui.css">
</head>

<body>
<form method="post" action="<?php echo U('Admin/Index/exitconnects');?>">
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
<div class="layui-form-item" style="padding-top: 50px">
<div class="layui-inline">
    <label class="layui-form-label">名称</label>
    <div class="layui-input-inline">
      <input name="name" lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input" type="text" value="<?php echo ($data["name"]); ?>">
    </div>
  </div><br><br><br>

<div class="layui-inline">
    <label class="layui-form-label">链接</label>
    <div class="layui-input-inline">
      <input  name="connect" lay-verify="required" placeholder="请输入链接" autocomplete="off" class="layui-input" type="text" value="<?php echo ($data["connect"]); ?>"><br><br>
    </div>
  </div>
  </div>








 <div class="layui-form-item">
<div class="layui-inline">
 <label class="layui-form-label"></label>
    <div class="layui-input-inline">
      <input class="layui-btn layui-btn-normal"  type="submit" value="提交">
    </div>
  </div>
  </div>

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
});
</script>
</html>