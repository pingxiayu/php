<?php 
	/*gettype()和settype();
	

	$sum=5;
	$total=1.22;
	$sum=$total;
	echo $sum;
	echo gettype($sum);
	$total=(float)$sum;//显式转换
	echo gettype($total);
	settype($sum, 'float');//接受两个参数：需要转换的参数，转换类型的字符串
	echo gettype($sum);*/

	/*//isset:判断给定变量是否存在 存在返回 :1, 不存在为 :空.如果只声明没有赋值也为空；
	//unset:销毁一个变量;
	$a=7;
	unset($a);
	echo isset($a);



	//empty:用来判断一个变量是否为空;空为true，否则为false;
	$b=0;//null 0 '' false '0' ,所有属性为空的对象......
	echo empty($b);*/



	 /*is_bool()、is_float()、is_int()、is_string()、is_object()、is_array() 和 is_integer()。判断变量是否为该类型;返回1和空;
	 $sum=100;
	 is_integer($sum);*/
	//is_numeric() 检查变量是否为数字或数字字符串

	/*intval(),floatval(),strval()；临时转换
	$sum=12.222;//浮点型
	echo intval($sum);//intval($sum) 这个整体才是integer;*/
	

	/*//定义常量 define() 采用大写方式;
	define('TOTAL',100);
	echo TOTAL;
	$TOTAL=200;
	echo $TOTAL;
	echo $_SERVER["HTTP_HOST"];
	echo phpinfo();*/


	//访问表单变量;
	
 ?>
 <!--<form action="test.php" method="post" accept-charset="utf-8">
			姓名:<input type="text" name="username" value="">
			<input type="submit" name="" value="提交">
</form>-->
 <form action="test.php" method="get" accept-charset="utf-8">
			姓名:<input type="text" name="username" value="">
			<input type="submit" name="" value="提交">
</form>