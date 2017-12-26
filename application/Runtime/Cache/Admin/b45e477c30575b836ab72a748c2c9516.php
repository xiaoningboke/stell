<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>文章列表</title>
    <link rel="stylesheet" type="text/css" href="/Public/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="/Public/fenye.css">
</head>

<body>
<div class="layui-form" style="margin-top: 20px">
    <a href="<?php echo U('Admin/main/addarticle');?>" class="layui-btn layui-btn-warm">添加</a>
                   <table class="layui-table">
                        <colgroup>
                          <col width="400">
                          <col width="200">
                          <col width="200">
                          <col>
                        </colgroup>
                        <thead>
                          <tr>
                            <th>标题</th>
                            <th>作者</th>
                            <th>分类</th>
                            <th>日期</th>
                            <th>操作</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list)): foreach($list as $key=>$vo): if($vo[kind]==1) $kind="新闻资讯"; else $kind="钢管知识"; ?>
                          <tr>
                            <td><?php echo ($vo["title"]); ?></td>
                            <td><?php echo ($vo["zuozhe"]); ?></td>
                            <td><?php echo ($kind); ?></td>
                            <td><?php echo ($vo["time"]); ?></td>
                            <td><a href="<?php echo U('Admin/main/exitartidecon',array('id'=>$vo['id']));?>">修改</a> | <a href="<?php echo U('Admin/main/delArtide',array('id'=>$vo['id']));?>">删除</a></td>

                          </tr><?php endforeach; endif; ?>
                        </tbody>
                      </table>
                      <div class="result page"><?php echo ($page); ?></div>
                </div>



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