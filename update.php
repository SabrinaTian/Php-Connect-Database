<?php
header("Content-type:text/html; charset=utf-8");
//通过post获取页面提交数据信息
$data = $_POST;
//print_r($data);
include_once "connect.php";
$sql = "update `user` set username='{$data['username']}',password='{$data['password']}', email='{$data['email']}',sex='{$data['sex']}',txt='{$data['txt']}' where id='{$data['id']}'";
echo $sql;
$res = mysql_query($sql,$link);
if($res){
    header("Location:hello.php");
    //echo "alert('修改成功')";
}else{
    header("Location:update1.php?id=".$data['id']);
    //echo "alert('修改失败')";
}
?>