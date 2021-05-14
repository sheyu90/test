<?php /*a:1:{s:54:"D:\WWW\test\application\index\view\Login\register.html";i:1619772709;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="<?php echo url('index/Login/registerHandle'); ?>" method="post">
        <input type="text" placeholder="用户名" name='username'/>
        <input type="text" placeholder="密码" name='password'/>
        <select name="rolo" >
            <option value="1">板块管理员1</option>
            <option value="2">板块管理员2</option>
            <option value="3">板块管理员3</option>
            <option value="4">超级管理员</option>
        </select>
        <button>注册</button><a href="<?php echo url('index/Login/index'); ?>">返回</a>
    </form>
    </body>
</html>