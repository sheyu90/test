<?php /*a:1:{s:51:"D:\WWW\test\application\index\view\Login\index.html";i:1619772680;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="<?php echo url('index/Login/login'); ?>" method="post">
        <input type="text" placeholder="用户名" name='username'/>
        <input type="password" placeholder="密码" name='password'/>

        <button>登录</button><a href="<?php echo url('index/Login/register'); ?>">注册</a>
    </form>
    </body>
</html>