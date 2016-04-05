<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
<h3>注册页面</h3>
	<form action="add.php" method='post'>
		<table border='1' cellpadding='0' cellspacing='0' width='80%' bgcolor='#ABCDEF'>
			<tr>
				<td align='right'>用户名</td>
				<td><input type="text" name="username" id=""/>以小写字母开始，长度要求5~10</td>
			</tr>
			<tr>
				<td align='right'>密码</td>
				<td><input type="password" name="password" id=""/>密码不能为空</td>
			</tr>
			<tr>
				<td align='right'>邮箱</td>
				<td><input type="text" name="email" id="" /></td>
			</tr>
			<tr>
				<td align='right'>性别</td>
				<td>
					<input type="radio" name="sex" id="" value='1' />男
					<input type="radio" name="sex" id="" value='2' />女
					<input type="radio" name="sex" id="" value='3' />保密
				</td>
			</tr>
			<tr>
				<td align='right'>个人简介</td>
				<td>
					<textarea name="txt" id="" cols="50" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan='2'><input type="submit" name='act' value='注册' /></td>
			</tr>
		</table>
	</form>
	
</body>
</html>