<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品首页</title>
    <link type="text/css" rel="stylesheet" href="/Public/assets/css/amazeui.css" />
</head>
<body>
<div class="am-container-fluid">
    <h2 class="am-text-center">商品列表</h2>
    <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 am-thumbnails am-block am-padding-lg">
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><li class="am-block">
                <img class="am-thumbnail" src="<?php echo ($g["goods_pic"]); ?>" />
                <h3 class="am-text-center"><?php echo ($g["goods_name"]); ?></h3>
                <span class="am-block am-text-center am-margin-xs">特价<font color="#e000c"><?php echo ($g["goods_price"]); ?></font>元<a href="<?php echo U('Goods/details',array('id'=>$g['goods_id']));?>" class="am-margin-left hc-getid">详情</a></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <ul class="am-pagination">
        <li><?php echo ($upage); ?></li>
    </ul>
</div>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="/Public/assets/js/amazeui.js"></script>
<script>
    $(".hc-getid").click(function () {
       $.ajax({
           type:"GET",
           url:"/admin.php/Goods/details/?id=$(this).src",
           data:{'typeid':typeid,'souval':souval},
           dataType:"json",
           success : function () {
                alert ("keyi");
           }
       })
    });
</script>
</body>
</html>