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
<div class="am-container">
    <h1 class="am-text-center">域名信息管理</h1>
    <form action="<?php echo U('Domain/add');?>" method="post">
    <table class="am-table am-margin">
            <tbody id="hc-list">
                <tr>
                    <td>
                        <div class="am-form-group">
                            <label for="doc-ipt-1" class="am-form-label am-margin-left-sm">域名名称:</label>
                            <input type="text" name="name" id="doc-ipt-1" class="am-margin-left-sm" placeholder="输入你的域名名称">
                        </div>
                    </td>
                    <td>
                        <div class="am-form-group">
                            <label for="doc-ipt-2" class="am-form-label am-margin-left-sm">域名前台</label>
                            <input type="text" name="ymqtai" id="doc-ipt-2" class="am-margin-left-sm" placeholder="输入你的域名前台">
                        </div>
                    </td>
                    <td>
                        <div class="am-form-group">
                            <label for="doc-ipt-3" class="am-form-label am-margin-left-sm">域名后台</label>
                            <input type="text" name="ymhtai" id="doc-ipt-3" class="am-margin-left-sm" placeholder="输入你的域名后台">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="am-form-group">
                            <label for="doc-ipt-4" class="am-form-label am-margin-left-sm">用户名</label>
                            <input type="text" name="username" id="doc-ipt-4" class="am-margin-left-sm" placeholder="输入你的登陆用户名">
                        </div>
                    </td>
                    <td>
                        <div class="am-form-group">
                            <label for="doc-ipt-5" class="am-form-label am-margin-left-sm">密码</label>
                            <input type="text" name="password" id="doc-ipt-5" class="am-margin-left-sm" placeholder="输入你的登陆密码">
                        </div>
                    </td>
                </tr>
            </tbody>
    </table>
        <div class="am-block am-text-center">
            <button type="submit" class="am-btn am-btn-primary">添加</button>
            <button type="button" class="am-btn am-btn-success hc-show">批量添加</button>
            <small class="am-btn">后一种推荐使用</small>
        </div>
    </form>
    <form action="<?php echo U('Domain/upload');?>" method="post" enctype="multipart/form-data">
        <div class="am-form-group am-margin-top-lg am-form-file hc-none">
            <button type="button" class="am-btn am-btn-default am-btn-sm">
                <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
            <!--<input id="doc-form-file" type="file" multiple>-->
            <input id="doc-form-file" type="file" name="domain">
            <button type="submit" class="am-btn am-btn-success">导入</button>
        </div>
        <div id="file-list"></div>
        <button type="submit" class="am-btn am-btn-success hc-none">上传</button>
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