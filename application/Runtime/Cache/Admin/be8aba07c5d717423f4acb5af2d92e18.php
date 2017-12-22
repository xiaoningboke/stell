<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>现货产品</title>
    <link rel="stylesheet" type="text/css" href="/stell/Public/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/fenye.css">
</head>

<body>
<div class="layui-form" style="margin-top: 20px">
    <a href="<?php echo U('Admin/index/addconnect');?>" class="layui-btn layui-btn-warm">添加</a>
                   <table class="layui-table">
                        <colgroup>
                          <col width="100">
                          <col width="100">
                          <col width="100">
                          <col>
                        </colgroup>
                        <thead>
                          <tr>
                            <th>名称</th>
                            <th>网址</th>
                            <th>操作</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($ConnectData)): foreach($ConnectData as $key=>$vo): ?><tr>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["connect"]); ?></td>
                            <td><a href="<?php echo U('Admin/index/exitconnect',array('id'=>$vo['id']));?>">修改</a> | <a href="<?php echo U('Admin/index/delconnect',array('id'=>$vo['id']));?>">删除</a></td>

                          </tr><?php endforeach; endif; ?>
                        </tbody>
                      </table>
                      <div class="result page"><?php echo ($page); ?></div>
                </div>



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