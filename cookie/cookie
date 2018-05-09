<?php 
	//setcookie() 接收:cookie名称,cookie值,cookie过期时间
	//setcookie('user','xiayu',time()+3*24*60*60);
	//setcookie('user','xiayu');


	//$_COOKIE 读取本地的cookie
	//echo $_COOKIE['user'];


	//删除cookie 将cookie值设置为空
	//setcookie('user','');
	//setcookie('user','ping');
	//echo $_COOKIE['user'];



	//session_start() 开始session会话处理
	/*session_start();
	$_SESSION['name']='平夏雨';
	//echo $_SESSION['name'];
	//unset() 删除session
	unset($_SESSION['name']);
	echo $_SESSION['name']*/
	//session_destory()
	//session_destory($_SESSION['name']);
	

	//创建cookie数组 $_COOKIE[]中存放数组名
	setcookie('cookie[0]','cookieone');
	setcookie('cookie[1]','cookietwo');
	setcookie('cookie[2]','cookiethree');
	if(isset($_COOKIE['cookie'])){
		foreach($_COOKIE['cookie'] as $name=>$value){
			echo "$name:$value<br />";
		}
	}
 ?>
