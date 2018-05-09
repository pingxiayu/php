<?php 
	/*//可以为函数添加默认值 $radius=10
	function Area($radius=10){
		$area=$radius*$radius*pi();
		//echo "面积为:".round($area);
		return $area;
	}
	//传入的参数会覆盖默认参数
	//echo "面积为:".round(Area());
	echo "面积为:".round(Area(20));*/

	/*function Fself($name,$age,$job){
		//$user=array($name,$age,$job);
		$user[]=$name;
		$user[]=$age;
		$user[]=$job;
		return $user;
	}
	echo Fself('平夏雨','22','无业游民')[2];*/

	
	//$total=50;
	//$price=10;
	//值传递
	/*function computed($t,$p){
		$t+=$p;
		$p=$p*$p;
	}
	computed($total,$price);
	echo $total;
	echo "<br>";
	echo $price;*/
	//引用传递
	/*
	function computed(&$t,&$p){
		$t+=$p;
		$p=$p*$p;
	}
	computed($total,$price);
	echo $total;
	echo "<br>";
	echo $price;*/


	//全局变量
	/*$global=5;
	function F(){
		global $global;
		$global=10;
	}
	F();
	echo $global;*/


	//超级全局变量
	/*
	$GLOBALS["A"]=5;
	function F(){
		$GLOBALS["A"]=2;
	}
	F();
	//echo $GLOBALS["A"];
	print_r($GLOBALS);*/

	//文件包含
	

	//include
	/*include('library/somephp.php');
	echo opretion();*/

	//include_once 确保相同文件只包含一个 功能与include相同
	

	//require() 一般用require比较好
	/*include("demo1111.php");//include:如果文件名不存在会抛出两个warning,但程序会继续执行;
	require("demo111.php");//抛出Fatal error 不会继续执行;*/


	//魔法常量
	

	//_FILE_ 文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名
	//echo __FILE__;
	//echo dirname(__FILE__);
	//__LINE__
	//echo __LINE__;//文件中的当前行号。
	//__DIR__  	文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录
	//ECHO __DIR__;
	//__FUNCTION__
	function my(){
		return __FUNCTION__;
	}
	echo my();
 ?>