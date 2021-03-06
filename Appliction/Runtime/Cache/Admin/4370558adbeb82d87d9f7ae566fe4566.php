<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册用户</title>
    <link type="text/css" rel="stylesheet" href="/Public/assets/css/amazeui.css" />
</head>
<body>
<div class="am-container-fluid">
    <div class="am-g">
        <div class="am-u-lg-10 am-u-lg-centered">
            <table class="am-table">
                <tr>
                    <td>id</td>
                    <td>用户名</td>
                    <td>性别</td>
                    <td>年龄</td>
                    <td>家庭住址</td>
                    <td>编辑</td>
                    <td>删除</td>
                </tr>
                <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($v["id"]); ?></td>
                        <td><?php echo ($v["username"]); ?></td>
                        <td><?php echo ($v["sex"]); ?></td>
                        <td><?php echo ($v["age"]); ?></td>
                        <td><?php echo ($v["address"]); ?></td>
                        <td><a href="<?php echo U('User/edit',array('id'=>$v['id']));?>">编辑</a></td>
                        <td><a href="javascript:void ();" class="delete" id="<?php echo ($v["id"]); ?>">删除</a></td>
                        <!--<td><a href="/admin.php/User/edit?id=<?php echo ($v["id"]); ?>">编辑</a></td>
                        <td><a href="/admin.php/User/del?id=<?php echo ($v["id"]); ?>">删除</a></td>-->
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            <ul class="am-pagination am-fr">
                <?php echo ($upage); ?>
            </ul>
        </div>
    </div>
</div>
<!--加载jq文件-->
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="/Public/assets/js/amazeui.js"></script>
<script>
    $(document).ready(function () {
        $('.delete').click(function(){
            var id=$(this).attr('id');
            if(confirm('是否确认删除？')){
                window.location="/admin.php/User/del/id/"+id;
            }
        })
        $.ajax({
            url:'/admin.php/User/returnAj/',
            type:"POST",
            dataType:"json",
            success: function (data) {
                if(data){
                    var user;
                    $.each(data,function(i,result){
                        user = "<option value='"+result.id+"'>"+result.title+"</option>" ;
                        $(".hc-ajax").append(user);
                    });
                }else {
                    alert ("没有获取到数据");
                }
            }
        });
        $.ajax({
            url:'/admin.php/User/rulereturn/',
            type:"POST",
            dataType:"json",
            success: function (data) {
                if(data){
                    var permissions;
                    $.each(data,function(i,rudata){
                        permissions = "<label class='am-checkbox-inline'><input type='checkbox' name='checkbox' value='"+rudata.id+"'>"+rudata.title+"</label>";
                        $(".hc-qxian").append(permissions);
                    });
                }else {
                    alert ("没有获取到数据");
                }
            }
        });


        // 全选
        $(".btnCheckAll").bind("click", function () {
            $("[name = checkbox]:checkbox").attr("checked", true);
        });
        //删除
        $(".hc-submit").click(function(){
            var valArr = new Array;
            $(".hc-qxian :checkbox[checked]").each(function(i){
                valArr[i] = $(this).val();
            });
            var vals = valArr.join(',');
            console.log(vals);
            if(vals!="") {
                if(confirm("确定要是这些吗？")){
                    $.ajax({
                        type:"POST",
                        url:"<?=U('User/updata/')?>",
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