<?php /*a:1:{s:51:"D:\WWW\test\application\index\view\index\index.html";i:1620203602;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>留言列表 -- HoverTree</title>
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
        .bk {
            height: 50px;
            width: 50px;
            margin: 50px;
            /* background-color: green; */
            font-size: 20px;
            color: green;
        }
    </style>

</head>
<body>
<div style="margin:0px auto;" class="keleyitable">
    <h2>留言列表</h2>
    <span class="bk"><a href="<?php echo url('index/Index/index'); ?>">主页</a></span>
    <span class="bk"><a href="<?php echo url('index/Index/section',['id'=>'1']); ?>">板块1</a></span><span class="bk"><a href="<?php echo url('index/Index/section',['id'=>'2']); ?>" >板块2</a></span><span class="bk"><a href="<?php echo url('index/Index/section',['id'=>'3']); ?>">板块3</a></span>
    <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get" action="<?php echo url('index/Index/search'); ?>">
        <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="keywords" autocomplete="off" style="line-height: 30px; width:220px;">
        <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">
    </form>

    <h4><?php echo session('user'); ?></h4>
    <iframe height="50px" width="50px">
    <h4>管理员</h4>
    </iframe>
    
    <a href="<?php echo url('index/Login/logout'); ?>" >退出</a>
    <?php foreach($lmsg as $key => $value): ?>
    <table id = "massage">
        <tr><td class="klytd">留言时间：</td><td class="hvttd"><?php echo htmlentities($value['publishTime']); ?></td></tr>
        <tr><td class="klytd">留言人：</td><td class ="hvttd"><?php echo htmlentities($value['username']); ?></td></tr>
        <tr><td class="klytd">标题：</td><td class ="hvttd"><?php echo htmlentities($value['title']); ?></td></tr>
        <tr><td class="klytd">内容：</td><td class ="hvttd"><?php echo htmlentities($value['content']); ?></td></tr>
        <tr><td class="klytd">回复：</td><td class="hvttd">你好，HoverTree项目将使用C#作为编程语言。使用SQL Server数据库。.net版本是4.0。开发工具使用</td></tr>
        <!-- <tr><td class="klytd">内容：</td><td class ="hvttd"><?php echo htmlentities($value); ?></td></tr> -->
    </table>
    <a href="<?php echo url('index/Index/delete'); ?>">删除</a>

    <?php endforeach; ?>
    <a class="button" href="<?php echo url('index/Index/create'); ?>">添加文章</a>

    <?php echo $lmsg; ?>


</div>

</body>
<!--<script>-->
<!--window.onload  = function(){-->
<!--var xhr = new XMLHttpRequest();-->
<!--xhr.onreadystatechange = function(){-->
<!--if(xhr.readyState == 4 && xhr.status == 200){-->
<!--var res = xhr.responseText;-->
<!--var data = JSON.parse(res);-->
<!--// console.log(data);-->
<!--for (var i = 0; i< data.length; i++) {-->

<!--}-->
<!--};-->
<!--xhr.open('get','massageBoard.php',true);-->
<!--xhr.send();-->
<!--}-->
<!--</script>-->
</html>
extend name="base" /}
