<?php
//本地测试
$host = '127.0.0.1';
$port = 3306;
$user = "root";
$pwd = "";
$link = @mysql_connect("{$host}:{$port}",$user,$pwd,true);
if(!$link) {
    die("Connect Server Failed: " . mysql_error());
}
//选择连接的数据库库名
mysql_select_db("my");
//设置字符编码utf8
mysql_set_charset('utf8');

?>