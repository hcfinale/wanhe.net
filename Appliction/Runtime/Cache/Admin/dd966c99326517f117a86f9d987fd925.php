<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>修改相关信息</title>
    <link type="text/css" rel="stylesheet" href="/Public/assets/css/amazeui.css" />
</head>
<body>
<div class="am-container">
    <h1 class="am-text-center">修改域名</h1>
    <form action="<?php echo U('Domain/edit');?>" method="post">
        <table class="am-table am-margin">
            <tbody id="hc-list">
            <tr>
                <td>
                    <div class="am-form-group">
                        <input type="hidden" name="id" value="<?php echo ($domain["id"]); ?>">
                        <label for="doc-ipt-1" class="am-form-label am-margin-left-sm">域名名称:</label>
                        <input type="text" name="name" id="doc-ipt-1" class="am-margin-left-sm" value="<?php echo ($domain["name"]); ?>">
                    </div>
                </td>
                <td>
                    <div class="am-form-group">
                        <label for="doc-ipt-2" class="am-form-label am-margin-left-sm">域名前台</label>
                        <input type="text" name="qtai" id="doc-ipt-2" class="am-margin-left-sm" value="<?php echo ($domain["qtai"]); ?>">
                    </div>
                </td>
                <td>
                    <div class="am-form-group">
                        <label for="doc-ipt-3" class="am-form-label am-margin-left-sm">域名后台</label>
                        <input type="text" name="htai" id="doc-ipt-3" class="am-margin-left-sm" value="<?php echo ($domain["htai"]); ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="am-form-group">
                        <label for="doc-ipt-4" class="am-form-label am-margin-left-sm">用户名</label>
                        <input type="text" name="user" id="doc-ipt-4" class="am-margin-left-sm" value="<?php echo ($domain["user"]); ?>">
                    </div>
                </td>
                <td>
                    <div class="am-form-group">
                        <label for="doc-ipt-5" class="am-form-label am-margin-left-sm">密码</label>
                        <input type="text" name="pass" id="doc-ipt-5" class="am-margin-left-sm" value="<?php echo ($domain["pass"]); ?>">
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="am-block am-text-center">
            <button type="submit" class="am-btn am-btn-primary am-icon-check">修改</button>
        </div>
    </form>
</div>
<!--加载jq文件-->
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="/Public/assets/js/amazeui.js"></script>
<script>
    //type 中的类型并没有什么限制  tp默认的ajax传输类型是json类型，可以在controller中指定要传输的类型。
    $(document).ready(function () {
        $('.hc-none').hide();
        $(".hc-show").click(function () {
            $('.hc-none').toggle(1000);
        });
        //文件上传提示
        $('#doc-form-file').on('change', function() {
            var fileNames = '';
            $.each(this.files, function() {
                fileNames += '<span class="am-badge">' + this.name + '</span> ';
            });
            $('#file-list').html(fileNames);
        });
    });
</script>
</body>
</html>