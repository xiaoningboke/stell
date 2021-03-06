<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>后台管理</title>
     <link rel="stylesheet" type="text/css" href="/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/Public/build/css/app.css" media="all">
</head>

<body>
    <div class="layui-layout layui-layout-admin kit-layout-admin">
        <div class="layui-header">
            <div class="layui-logo">后台管理</div>
            <div class="layui-logo kit-logo-mobile">K</div>

            <ul class="layui-nav layui-layout-right kit-nav">
                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <img src="http://m.zhengjinfan.cn/images/0.jpg" class="layui-nav-img"> Van
                    </a>
                    
                </li>
                <li class="layui-nav-item"><a href="<?php echo U('Admin/index/exits');?>"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a></li>
            </ul>
        </div>

        <div class="layui-side layui-bg-black kit-side">
            <div class="layui-side-scroll">
                <div class="kit-side-fold"><i class="fa fa-navicon" aria-hidden="true"></i></div>
                <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
                <ul class="layui-nav layui-nav-tree" lay-filter="kitNavbar" kit-navbar>
                    <li class="layui-nav-item">
                        <a class="" href="javascript:;"><i class="fa fa-plug" aria-hidden="true"></i><span> 产品文章</span></a>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" kit-target data-options="{url:'newproduct.html',icon:'&#xe6c6;',title:'现货产品',id:'1'}">
                                    <i class="layui-icon">&#xe6c6;</i><span> 现货产品</span></a>
                            </dd>
                            
                            <dd>
                                <a href="javascript:;" data-url="product.html" data-icon="&#xe628;" data-title="产品展示" kit-target data-id='3'><i class="layui-icon">&#xe628;</i><span> 产品展示</span></a>
                            </dd>
                            <dd>
                                <a href="javascript:;" data-url="artide.html" data-icon="&#xe614;" data-title="文章展示" kit-target data-id='4'><i class="layui-icon">&#xe614;</i><span>文章展示</span></a>
                            </dd>
                            <dd>
                                <a href="javascript:;" data-url="content.html" data-icon="&#xe658;" data-title="关于我们" kit-target data-id='5'><i class="layui-icon">&#xe658;</i><span>关于我们</span></a>
                            </dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a href="javascript:;"><i class="fa fa-plug" aria-hidden="true"></i><span>网站资料</span></a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" kit-target data-options="{url:'exitimage.html',icon:'&#xe658;',title:'图片替换',id:'6'}"><i class="layui-icon">&#xe658;</i><span> 图片替换</span></a></dd>
                            <dd><a href="javascript:;" kit-target data-options="{url:'connect.html',icon:'&#xe658;',title:'友情链接',id:'7'}"><i class="layui-icon">&#xe658;</i><span> 友情链接</span></a></dd>
                            <dd><a href="javascript:;" kit-target data-options="{url:'infor.html',icon:'&#xe658;',title:'更改密码',id:'7'}"><i class="layui-icon">&#xe658;</i><span> 更改密码</span></a></dd>
                            <dd><a href="javascript:;" kit-target data-options="{url:'seo.html',icon:'&#xe658;',title:'SEO设置',id:'8'}"><i class="layui-icon">&#xe658;</i><span> SEO设置</span></a></dd>
                        
                        </dl>
                    </li>
                   
                </ul>
            </div>
        </div>
        <div class="layui-body" id="container">
            <!-- 内容主体区域 -->
            <div style="padding: 15px;">主体内容加载中,请稍等...</div>
        </div>

        <div class="layui-footer">
            <!-- 底部固定区域 -->
            2017 &copy;
            <a href="http://sunxiaoning.com/">千行创想网络</a>

        </div>
    </div>
    <script type="text/javascript">
        var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cspan id='cnzz_stat_icon_1264021086'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1264021086%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script src="/Public/layui/layui.js"></script>
    <script>
        var message;
        layui.config({
            base: '/Public/build/js/'
        }).use(['app', 'message'], function() {
            var app = layui.app,
                $ = layui.jquery,
                layer = layui.layer;
            //将message设置为全局以便子页面调用
            message = layui.message;
            //主入口
            app.set({
                type: 'iframe'
            }).init();
            $('#pay').on('click', function() {
                layer.open({
                    title: false,
                    type: 1,
                    content: '<img src="/build/images/pay.png" />',
                    area: ['500px', '250px'],
                    shadeClose: true
                });
            });
        });
    </script>
</body>

</html>