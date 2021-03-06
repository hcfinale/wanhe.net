<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>域名信息管理</title>
    <link type="text/css" rel="stylesheet" href="/Public/assets/css/amazeui.css" />
</head>
<body>
<div class="am-container-fluid">
    <h1 class="am-text-center">域名信息管理</h1>
    <table class="am-table">
        <thead>
        <tr>
            <td></td>
            <td><label class="am-inline-block"><input id="all" type="checkbox"><a class="am-link">全选</a></label></td>
            <td><label class="am-inline-block"><button class="am-btn am-btn-danger hc-delect">批量删除</button></label></td>
        </tr>
        <tr><th width="15"></th><th>id</th><th>网址名称</th><th>前台</th><th>后台</th><th>修改时间</th><th>用户名</th><th>密码</th><th>上传人</th><th>操作</th></tr>
        </thead>
        <tbody id="hc-list">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><input type="checkbox" name="test[]" value="<?php echo ($vo["id"]); ?>"></td>
                    <td><?php echo ($vo["id"]); ?></td>
                    <td><?php echo ($vo["name"]); ?></a></td>
                    <td><?php echo ($vo["qtai"]); ?></td>
                    <td><?php echo ($vo["htai"]); ?></td>
                    <td><?php echo ($vo["time"]); ?></td>
                    <td><?php echo ($vo["user"]); ?></td>
                    <td><?php echo ($vo["pass"]); ?></td>
                    <td><?php echo ($vo["u_name"]); ?></td>
                    <td>
                        <a href="<?php echo U('Domain/edit/id/'.$vo['id']);?>">编辑</a>
                        <a href="<?php echo U('Domain/del/id/'.$vo['id']);?>" onclick="return confirm('确认要删除？');">删除</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <ul class="am-pagination am-fr">
        <?php echo ($upage); ?>
    </ul>
</div>
<!--加载jq文件-->
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="/Public/assets/js/amazeui.js"></script>
<script>
    //type 中的类型并没有什么限制  tp默认的ajax传输类型是json类型，可以在controller中指定要传输的类型。
    $(document).ready(function () {
        // 全选
        $("#all").click(function(){
            if(this.checked){
                $("#hc-list :checkbox").prop("checked", true);
            }else{
                $("#hc-list :checkbox").prop("checked", false);
            }
        });
        //删除
        $(".hc-delect").click(function(){
            var valArr = new Array;
            $("#hc-list :checkbox[checked]").each(function(i){
                valArr[i] = $(this).val();
            });
            var vals = valArr.join(',');
            console.log(vals);
            if(vals!="") {
                if(confirm("确定要是这些吗？")){
                    $.ajax({
                        type:"POST",
                        url:"<?=U('Domain/alldel/')?>",
                        data:{'id':vals},
                        success:function(data){
                            if(data){
                                alert('修改成功');
                                window.location.reload();
                            }else {
                                alert('修改失败');
                            }
                        }
                    });
                }
            }else {
                alert ("请给用户权限");
            }
        });
    });
</script>
</body>
</html>