<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>修改密码</title>
    <link rel="stylesheet" type="text/css" href="/Public/layui/css/layui.css">
</head>

<body>
<form method="post" action="<?php echo U('Admin/main/infors');?>">

<div class="layui-form-item" style="padding-top: 50px">
<div class="layui-inline">
    <label class="layui-form-label">原密码：</label>
    <div class="layui-input-inline">
      <input name="oldpassword" lay-verify="required" placeholder="请输入原密码" autocomplete="off" class="layui-input" type="text">
    </div>
  </div><br><br><br>

<div class="layui-inline">
    <label class="layui-form-label">新密码：</label>
    <div class="layui-input-inline">
      <input  name="password" lay-verify="required" placeholder="请输入新密码" autocomplete="off" class="layui-input" type="text"><br><br>
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
});
</script>
</html>