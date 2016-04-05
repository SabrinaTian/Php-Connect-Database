<?php
header("Content-type:text/html; charset=utf-8");
//-----------------------连接数据库------------------------------
include_once "connect.php";
//--------------------查询数据库--------------------------------
$query="select * from user";
$result=mysql_query($query);
if(!$result)
{
    die("could not to the database<br/>".mysql_error());
}
//-------------------封装函数-----------------------------
//该函数将数据库的数据写成数组形式
function result2Arr($result){
    while($result_row=mysql_fetch_assoc($result)){
        $arr[] = $result_row;
    }
    return $arr;
}
$arr = result2Arr($result);
foreach($arr as $value){
    echo "<table border='1px'>";
    echo "<table border='1px' >";
    echo "<tr> ";
    echo "<td width='100px'>".$value['id']."</td>";
    echo "<td width='100px'>".$value['username']."</td>";
    echo "<td width='100px'>".$value['password']."</td>";
    echo "<td width='200px'>".$value['email']."</td>";
    echo "<td width='100px'>".$value['sex']."</td>";
    echo "<td width='100px'>".$value['txt']."</td>";
    echo "<td width='100px'>".date('Y-m-d H:i:s',$value['time'])."</td>";
    echo "<td width='100px'><a href='update1.php?id=$value[id]'>修改</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='delete.php?id=$value[id]'>删除</a></td>";
    echo "<tr/>";
    echo "</table>";
}
?>