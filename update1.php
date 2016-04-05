<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>Document</title>
</head>
<body>
<div>

<?php
    include_once "connect.php";
    $sql="select * from user where id='".$_GET['id']."'";
    //echo "sql:".$sql;(显示出修改哪一行)
    $result=mysql_query($sql,$link);
    $arr = result2Arr($result);
    //print_r($arr);
    $row = $arr[0];

function result2Arr($result){
    while($result_row=mysql_fetch_assoc($result)){
        $arr[] = $result_row;
    }
    return $arr;
}
?>
        <h3>注册页面</h3>
        <form action="update.php" method='post'>
            <input type="hidden" name="id" id="" value="<?php echo $row['id']?>"/>
            <table border='1' cellpadding='0' cellspacing='0' width='80%' bgcolor='#ABCDEF'>
                <tr>
                    <td align='right'>用户名</td>
                    <td><input type="text" name="username" id="" value="<?php echo $row['username']?>"/>以小写字母开始，长度要求5~10</td>
                </tr>
                <tr>
                    <td align='right'>密码</td>
                    <td><input type="password" name="password" id=""value="<?php echo $row['password']?>"/>密码不能为空</td>
                </tr>
                <tr>
                    <td align='right'>邮箱</td>
                    <td><input type="text" name="email" id="" value="<?php echo $row['email']?>"/></td>
                </tr>
                <tr>
                    <td align='right'>性别</td>
                    <td>
                        <input type="radio" name="sex" id="" value='1' <?php if($row['sex']=='1'){ echo 'checked';}?>/>男
                        <input type="radio" name="sex" id="" value='2' <?php if($row['sex']=='2'){ echo 'checked';}?>/>女
                        <input type="radio" name="sex" id="" value='3' <?php if($row['sex']=='3'){ echo 'checked';}?>/>保密
                    </td>
                </tr>
                <tr>
                    <td align='right'>个人简介</td>
                    <td>
                        <textarea name="txt" id="" cols="50" rows="10"><?php echo $row['txt']?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'><input type="submit" name='act' value='修改' /></td>
                </tr>
            </table>
        </form>
</div>
</body>
</html>