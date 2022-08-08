<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>{$config['appName']}</title>
    <link rel="stylesheet" href="/assets/css/index.min.css">
</head>
<body>
<div class="container">
    <div class="copy-container center-xy">
        <div class="logo">
            <img src="/images/uim-logo-round.png">
        </div>
        {if $user->isLogin}
        <p>{$user->user_name} </p>
        <ul>
            <li><button class="btn white"><a href="/user">用户中心</a></button></li>
            {if $user->is_admin}
            <li><button class="btn white"><a href="/admin">管理后台</a></button></li>
            {/if}
            <li><button class="btn white"><a href="/user/logout">退出登录</a></button></li>
        </ul>
        {else}
            <ul>
                <li><button class="btn white"><a href="/auth/login">登录</a></button></li>
                <li><button class="btn white"><a href="/auth/register">注册</a></button></li>
            </ul>
        {/if}
    </div>
</div>

</body>
{include file='live_chat.tpl'}
</html>