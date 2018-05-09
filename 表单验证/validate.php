<?php 
	//header() 实现跳转
	//header('location:header.php');
	/*echo 'baidu';
	header('location:http://www.baidu.com');*/


	/*//使用header() 设置页面编码
	header('Content-Type:text/html;charset=utf-8');
	echo "平夏雨";*/

	//echo $_POST['username'];
	//isset() 判断变量是否存在
	/*if(isset($_POST['username'])){
		echo '正常提交';
		echo "<br>";
		//echo $_POST['username'];
		//禁止解析html;
		$username=htmlspecialchars($_POST['username']);
		//去除空格
		$username=trim($username);
		//限制长度
		if(mb_strlen($username)<2){
			echo '用户名不能小于两位';
			exit;
		}
		if(!is_numeric($username)){
			echo '用户名必须为数字';
			exit();
		}
		echo $username;
	}else{
		echo '非法提交';
	}*/




	//一:先验证是否是目标页提交过来的
	/*if(!isset($_POST['send'])){
		header('location:header.php');
		exit;
	}
	//二:接收所有数据 并过滤
	$username=htmlspecialchars(trim($_POST['username']));
	$password=trim($_POST['password']);
	$code=$_POST['code'];
	$text=htmlspecialchars(trim($_POST['Text']));
	$email=$_POST['email'];
	//验证数据
	
	//用户名长度大于2 小于10
	if(strlen($username)<2||strlen($username)>10){
		echo "<script>alert('用户名不能小于两位或大于十位');history.back();</script>";
		exit;
	}
	//密码不能小于6位或大于16位
	if(strlen($password)<6||strlen($password)>16){
		echo "<script>alert('密码不能小于6位或大于16位');history.back();</script>";
		exit;
	}
	// 眼证码必须等于4位数字
	if(strlen($code)!=4||!is_numeric($code)){
		echo "<script>alert('验证码必必须于4位数字');history.back();</script>";
		exit;
	}
	//验证电子邮件
	$mode='/([\w\.]{2,255})@([\w\-]{1,255}).([a-z]{2,4})/';
	if(!preg_match($mode,$email)){
		echo "<script>alert('电子邮件不合法');history.back();</script>";
		exit;
	}
	echo '用户名:'.$username."<br>";
	echo '密码:'.$password."<br>";
	echo '介绍:'.$text."<br>";
	echo '电子邮件:'.$email;*/
	echo $_GET['name'];
 ?>