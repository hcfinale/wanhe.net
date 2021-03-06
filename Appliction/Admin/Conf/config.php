<?php
return array(
    //'配置项'=>'配置值'
    'DB_DEPLOY_TYPE'        => 1, // 设置分布式数据库支持
    'DB_TYPE'               =>  'mysql',          // 数据库类型
    'DB_HOST'               =>  '127.0.0.1',     // 服务器地址
    'DB_NAME'               =>  "Goods",          // 数据库名
    'DB_USER'               =>  'hc',      // 用户名
    'DB_PWD'                =>  'hc123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'tp_',      // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'URL_ROUTER_ON'         =>  TRUE,        //开启路由
    'DB_FIELDS_CACHE'       =>  FALSE,        // 关闭字段缓存  项目上线的时候删掉
    'DB_DEBUG'  			=>  TRUE,       // 数据库调试模式 开启后可以记录SQL日志   项目上线的时候删掉,
    'DEFAULT_CONTROLLER'    =>  'Login',    // 默认控制器名称
    'DEFAULT_ACTION'        =>  'login',    // 默认操作名称
    'URL_HTML_SUFFIX'       =>  'html|shtml|xml',  //伪静态的设置
    'URL_DENY_SUFFIX'       =>  'pdf|ico|png|gif|jpg', // URL禁止访问的后缀设置  访问级要高于URL_HTML_SUFFIX
    'SESSION_AUTO_START' => true, //是否开启session
    //"TMPL_TEMPLATE_SUFFIX"  =>  '.html',   //修改默认的后缀名为html
    //'DEFAULT_THEME'    =>    'default',   // 设置默认的模板主题
    'HCCS'  =>  'Public/us',

    'AUTH_CONFIG'=>array(
        'AUTH_ON' => true, //认证开关
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'tp_auth_group', //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'tp_auth_group_access', //用户组明细表
        'AUTH_RULE' => 'tp_auth_rule', //权限规则表
        'AUTH_USER' => 'tp_user'//用户信息表
    ),
);