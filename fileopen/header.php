
<!--<form action="validate.php" method="post" accept-charset="utf-8">
	<table>
	<tr><td>用户名:</td><td><input type="text" name="username" value=""></td></tr>
	<tr><td>密码:</td><td><input type="password" name="password" value=""></td></tr>
	<tr><td>验证码:</td><td><input type="text" name="code" value="" size="6"></td></tr>
	<tr><td>介绍:</td><td><textarea name="Text" rows=6 cols=10></textarea></td></tr>
	<tr><td>邮箱:</td><td><input type="text" name="email" value=""></td></tr>
	<tr><td><input type="submit" value="提交" name='send'></td></tr>
	</table>
</form>
<a href="validate.php?name=夏雨" title="">提交</a>-->

<!--enctype 属性规定在发送到服务器之前应该如何对表单数据进行编码。-->
<form enctype="multipart/form-data" action="file.php" method="post">
	<!--<input type="hidden" name="MAX_FILE_SIZE" value="1000000">--><!--定义了文件上传的大小限制-->
	<input type="file" name="userfile">
	<input type="submit" name="" value="上传">
</form>


