<?php
header("Content-type:text/html; charset=utf-8");
//-----------------------连接数据库------------------------------
include_once "connect.php";
//-------------------------将数据连接到数据库-------------------
$time=time();
$sql="insert into user (username,password,email,sex,txt,`time`) value('{$_POST['username']}','{$_POST['password']}','{$_POST['email']}','{$_POST['sex']}','{$_POST['txt']}','{$time}')";
$res=mysql_query($sql);
header("location:hello.php");
?>