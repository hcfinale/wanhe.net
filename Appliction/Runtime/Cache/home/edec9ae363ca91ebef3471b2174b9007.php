<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="utf-8"/>
    <title>pc端微信扫码支付和支付宝在线支付</title>
    <meta name="keywords" content="PHP微信扫码支付,PHP支付宝DEMO" />
    <meta name="description" content="本DEMO演示了PHP支付宝和微信扫码在线支付，支付成功后，在回调地址显示支付相关信息。" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<body>
<form action="<?php echo U('pay/submit');?>" method="post" id="form_pay">
    <input type="text" name="money" id="money" value="0.01" style="width:150px" class="form_input" autocomplete="off"/> 元
    <label><input type="radio" name="paytype" value="alipay" checked /> 支付宝</label>
    <label><input type="radio" name="paytype" value="wechat_code"  />  微信扫码</label>
    <button class="btn" style="height: 36px;line-height: 36px;font-size:26px;width:240px" type="submit"  id='btn_submit'>提 交</button>
</form>
</body>
</html>