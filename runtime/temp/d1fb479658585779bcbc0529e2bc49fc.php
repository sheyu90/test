<?php /*a:1:{s:52:"D:\WWW\test\application\index\view\index\search.html";i:1619700035;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
<style>
.keleyitable {
width: 800px;
}

.keleyitable table, td, th {
border: 1px solid green;margin-top:10px;
}
.klytd {width:100px;text-align:right
}
.hvttd {
width:500px}
.button1 {background-color：＃4CAF50;}
</style>

    </head>
    <body>
    <?php foreach($res as $key => $value): ?>
<table id = "massage">
<tr><td class="klytd">留言时间：</td><td class="hvttd"><?php echo htmlentities($value['publishTime']); ?></td></tr>
<tr><td class="klytd">留言人：</td><td class ="hvttd"><?php echo htmlentities($value['username']); ?></td></tr>
<tr><td class="klytd">标题：</td><td class ="hvttd"><?php echo htmlentities($value['title']); ?></td></tr>
<tr><td class="klytd">内容：</td><td class ="hvttd"><?php echo htmlentities($value['content']); ?></td></tr>
<tr><td class="klytd">回复：</td><td class="hvttd">你好，HoverTree项目将使用C#作为编程语言。使用SQL Server数据库。.net版本是4.0。开发工具使用</td></tr>
<br/>
<!-- <tr><td class="klytd">内容：</td><td class ="hvttd"></td></tr> -->

</table>
<?php endforeach; ?>
<a href="<?php echo url('index/Index/index'); ?>">返回</a>
    </body>

</html>