<?php 
	//验证时间
	//checkdate() 判断日期是否合法  1.月份,2.日期,3.年份 返回真(1)或假(0)
	//echo checkdate(4,24,2018);
	

	//date() 格式化一个本地时间/日期 接收两个参数:日期格式,时间戳(可选) 没有则返回当前时间
	//Y 四位数表示完整年份 y表示两位数的年份
	//M 三个字母缩写表示的月份 m 数字表示的月份有前导的零
	//D 三个字母缩写表示的星期中的第几天 d 月份中的第几天 有前导的零
	//H 小时 24小时格式 有前导零
	//i 有前导零的分钟数
	//s 秒数 有前导零
	//echo date('现在的时间是:Y-m-d H:i:s');
	


	//gettimeofday()取得当前时间 返回一个数组
	// "sec" - 自 Unix 纪元起的秒数
	// "usec" - 微秒数
	// "minuteswest" - 格林威治向西的分钟数
	// "dsttime" - 夏令时修正的类型
	//print_r(gettimeofday());//Array ( [sec] => 1524548373 [usec] => 91027 [minuteswest] => 0 [dsttime] => 0 )
	//通过date()转换时间戳
	//echo date('Y-m-d H:i:s',gettimeofday()['sec']);
	


	//getdate() 获取当前时间  返回一个数组
	//print_r(getdate());
	//通过getdate也可以转换时间戳
	//print_r(getdate(gettimeofday()['sec'])) ;
	


	//time() 直接获取当前时间戳 可以用来调整时间
	//echo time();
	//echo date('Y-m-d H:i:s',time()+8*60*60);
	
	
	/*//mktime() 取得一个日期的时间戳
	echo mktime(8,8,8,8,8,2008);
	echo date('Y-m-d H:i:s',1218182888);*/

	//使用时间戳计算时间差
	/*$now=time();
	$before=mktime(0,0,5,9,12,2016);
	echo round(($now-$before)/60/60,2);*/


	//strtotime() 将任何字符串的日期时间描述解析为 Unix 时间戳  和mktime比较这个更好
	//echo strtotime('2018-4-24 14:19:30');
	

	//获取和设置时区
	//date_default_timezone_get() 获取默认时区
	//echo date_default_timezone_get();

	/*//date_default_timezone_set() 设置
	date_default_timezone_set('Asia/Shanghai');
	//echo date('Y-m-d H:i:s');
	
	//localtime() 返回一个数组
	print_r(localtime(time(),true));*/

	//microtime() 返回当前时间戳和微秒数
	//echo microtime();
	//echo "<br>";
	/*$microtime=preg_split('/\\s+/',microtime());
	list($var1,$var2)=$microtime;
	echo $var1;
	echo "<br>";
	echo $var2;*/

	
 ?>