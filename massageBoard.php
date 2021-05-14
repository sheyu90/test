<?php

header("Cache-Control:no-cache");
header("Pragma:no-cache");
header("Expires:-1");

$con = mysqli_connect('localhost', 'root', '123', 'test1');
if(!$con){
    die('连接错误'.mysqli_connect_erro());
}

$sql = 'select title,content,publishTime from MessageBoard where reply = 0 limit 2';
$res =mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC) ;
$data = json_encode($res);
echo $data;