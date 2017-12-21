<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>图片替换</title>
    <link rel="stylesheet" href="/stell/Public/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="/stell/Public/layui/css/layui.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/stell/Public/Ueditor/ueditor.config.js"></script>  
    <script type="text/javascript" src="/stell/Public/Ueditor/ueditor.all.min.js"></script>  
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->  
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->  
    <script type="text/javascript" src="/stell/Public/Ueditor/lang/zh-cn/zh-cn.js"></script>  
    <script type="text/javascript" charset="utf-8">  
    window.UEDITOR_HOME_URL = "/stell/Public/Ueditor/";  
    $(document).ready(function () {  
      UE.getEditor('info', {  
      initialFrameHeight: 500,  
      initialFrameWidth: 700,  
      serverUrl: "<?php echo U(MODULE_NAME.'/Index/save_info');?>"  
    });  
  });  
      
    </script>   
</head>

<body class="layui-col-xs8">
<form method="post" action="<?php echo U('Admin/Index/exitimages');?>" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
<input type="hidden" name="image" value="<?php echo ($data["image"]); ?>">
<input type="hidden" name="" value="<?php echo ($data["kind"]); ?>" id="kinds">

<div class="layui-form-item" style="padding-top: 50px">
<div class="layui-inline">
 <label class="layui-form-label">首页图片</label>
    <div class="layui-input-inline">
      <input class="layui-input"  type="file" name="photo[]">
    </div>
  </div>
  <div class="layui-inline">
 <label class="layui-form-label">现货查询图片</label>
    <div class="layui-input-inline">
      <input class="layui-input"  type="file" name="photo[]">
    </div>
  </div>
  </div>


<div class="layui-form-item layui-form">
<div class="layui-inline">
 <label class="layui-form-label">产品中心图片</label>
    <div class="layui-input-inline">
      <input class="layui-input"  type="file" name="photo[]">
    </div>
  </div>
 <div class="layui-inline">
 <label class="layui-form-label">货运物流图片</label>
    <div class="layui-input-inline">
       <input class="layui-input"  type="file" name="photo[]">
    </div>
  </div>
</div>



 <div class="layui-form-item layui-form">
<div class="layui-inline">
 <label class="layui-form-label">QQ图片</label>
    <div class="layui-input-inline">
      <input class="layui-input"  type="file" name="photo[]">
    </div>
  </div>
 <div class="layui-inline">
 <label class="layui-form-label">微信图片</label>
    <div class="layui-input-inline">
       <input class="layui-input"  type="file" name="photo[]">
    </div>
  </div>
</div>

<div class="layui-form-item layui-form">

 <div class="layui-inline">
 <label class="layui-form-label">LOGO</label>
    <div class="layui-input-inline">
       <input class="layui-input"  type="file" name="photo[]">
    </div>
  </div>
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