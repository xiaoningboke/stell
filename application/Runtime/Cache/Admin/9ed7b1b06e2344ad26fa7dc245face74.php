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
    <a href="<?php echo U('Admin/index/addnewproduct');?>" class="layui-btn layui-btn-warm">添加</a>
                   <table class="layui-table">
                        <colgroup>
                          <col width="100">
                          <col width="100">
                          <col width="100">
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
                            <th>操作</th>
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
                            <td><a href="<?php echo U('Admin/index/exitproduct',array('id'=>$vo['id']));?>">修改</a> | <a href="<?php echo U('Admin/index/delproduct',array('id'=>$vo['id']));?>">删除</a></td>

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