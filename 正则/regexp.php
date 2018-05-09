<?php 
	//preg_match() 执行匹配正则表达式
	
	  //量词
	  
		//+ 表示前导字符,一个或多个
		/*$mode='/ph+p/';//一个或多个h
		$str="phhhhp";
		echo preg_match($mode,$str);//1*/


		//* 表示前导字符，0个或多个
		/*$mode='/ph*p/';//0个或多个
		$str="pp";
		echo preg_match($mode,$str);//1*/

		//? 表示前导字符 0个或1个;
		/*$mode='/ph?p/';//0或1个h
		$str="phhp";
		echo preg_match($mode,$str);//0*/


		//. 表示任意一个字符 多个点  表示多个
		/*$mode='/p.p/';
		$str="p2p";
		echo preg_match($mode,$str);//1*/

		/*//.* 表示前导任意字符，0个或多个
		$mode='/p.*p/';
		$str="phh546p";
		echo preg_match($mode,$str);//1*/

		//{x} 表示匹配任何(必须)包含x个前导字符
		/*$mode='/ph{3}p/';//表示前导必须为3个h
		$str="php";
		echo preg_match($mode,$str);//0*/

		/*//{x,y} 表示匹配任何(必须)包含x到y个前导字符
		$mode='/ph{3,5}p/';//3-5个h
		$str="phhhhhp";
		echo preg_match($mode,$str);//0*/

		/*//{x,} 表示匹配任何(必须)包含至少x个前导字符
		$mode='/ph{5,}p/';//至少5个h
		$str="phhhhhhhhhhhp";
		echo preg_match($mode,$str);//1*/


		/*//$ 一般加在字符串的尾巴上   匹配字符串的行尾
		$mode='/php$/';//结尾必须为php
		$str="phhhphp";
		echo preg_match($mode,$str);//1*/

		/*//^  一般加在字符串的开头 从开头匹配字符串
		$mode='/^php/';//开头必须为php
		$str="phhhphp";
		echo preg_match($mode,$str);//0*/

		//$ ^ 一起用 相当于==
		
		/*//| 条件选择符
		$mode='/php|js/';
		$str="pjsp";
		echo preg_match($mode,$str);*/

//--------------------------------------------------------------------------------------------------------------------
	 //元字符
	  //[] 一种正则语法 表示存在括号里面其中任意一个即可

	  /*//[a-z] 表示26个小写字母的其中任意一个
	  	$mode='/[a-z]/';
		$str="45b4";
		echo preg_match($mode,$str);*/

		/*//[A-Z] 表示26个大写字母的其中任意一个
		$mode='/[A-Z]/';
		$str="abcDefg";
		echo preg_match($mode,$str);*/

		//[0-9] 表示数字0-9的其中任意一个
		

		//[abc] 匹配a b c的其中任意一个.  [123456879] 类似
		
		//[a-zA-Z0-9] 表示匹配a-zA-Z0-9其中任意一个
		
		//[^a-z]  表示匹配任何不包含a-z的字符
		
		//\w 表示匹配数字,字母,下划线
		
		//\W 表示匹配非数字,字母,下划线
		
		//\d 表示匹配数字 相当于[0-9]
		
		//\D 表示匹配非数字 相当于[^0-9]
		
		//\s 匹配任何空白字符
		
		//\S 匹配任何非空白字符
		/*$mode='/\S/';
		$str="b c";
		echo preg_match($mode,$str);//1*/

		//\b 表示是否到达单词边界 以空格或空为标准
		/*$mode='/pxy\b/';
		$str="wo shi pxy";
		echo preg_match($mode,$str);//1*/

		//\B 表示没有到达边界
		
		//\ 匹配正则中的特殊字符  也就是在匹配正则中的特殊字符时 需要转义;
		/*$mode='/ph\+p/'; 
		//$str="php";//0
		$str="ph+p";//1
		echo preg_match($mode,$str);*/


		//修饰符
		
		//i 不区分大小写
		
		//m 多行匹配:表示匹配首尾的时候,如果遇到换行,也能匹配成功
		/*//$mode='/pxy$/';//0
		 $mode='/pxy$/m';//1
		$str="wo shi pxy\ni am student";
		echo preg_match($mode,$str);*/

		//x 表示忽略正则中的空白字符
		/*//$mode='/p x y/';//0
		$mode='/p x y/x';//1
		$str="wo shi pxy";
		echo preg_match($mode,$str);*/

		//A  表示必须从头开始匹配
		


		//preg风格函数
		


		/*//preg_grep() 返回数组中相匹配的字符串
		$language=array('php','asp','jsp','js','python');
		$mode='/p$/';
		print_r(preg_grep($mode,$language)) ;*/


		/*//搜索模式 返回真(1)或假(0)
		echo preg_match('/php[1-5]/','php5')*/

		/*//电子邮件案列
		$mode='/([\w\.]{2,255})@([\w\-]{1,255}).([a-z]{2,4})/';
		$string='www.1343368370@qq.com';
		if(preg_match($mode,$string)){
			echo "合法";
		}else{
			echo "不合法";
		}*/


		/*//preg_match_all() 执行一个全局正则表达式匹配 接受4个参数:正则,字符串,一个变量用以接受数组，flag .返回一维数组数组的长度
		preg_match_all("/<[^>]+>(.*)<\/[^>]+>/U","<b>example: </b><div align=left>this is a test</div>",$out);
		//print_r($out);
		echo $out[0][0];
		echo "<br>";
		echo $out[0][1];
		echo "<br>";
		echo $out[1][0];
		echo "<br>";
		echo $out[1][1];
		//print_r($out[0]);//保存完整的所有正则匹配 Array([0] => <b>example: </b>,[1] => <div align=left>this is a test</div>)
		//print_r($out[1]);//保存第一个子分组的所有正则匹配  Array ( [0] => example: ,[1] => this is a test)
		Array
		(
		    [0] => Array
		        (
		            [0] => <b>example: </b>
		            [1] => <div align=left>this is a test</div>
		        )

		    [1] => Array
		        (
		            [0] => example: 
		            [1] => this is a test
		        )

		)*/


		//preg_quote() 转义正则中的特殊字符串(加\:\?,\$) 正则中的特殊字符  . \ + * ? [ ^ ] $ ( ) { } = ! < > | : -
		
		//使用反向索引
		//preg_replace() 搜索匹配结果然后替换掉 参数:正则,用于替换的字符串或字符串数组,字符串或数组
		/*$string = 'April 15, 2003';
		$pattern = '/(\w+)\s(\d+),\s(\d+)/i';//这里匹配到整个字符串
		$replacement = '${2}1,${3}';//${1} 表示用第一个分组获取到的值作为替换值 类推 
		echo preg_replace($pattern, $replacement, $string);*/

		/*//使用基于索引的数组 默认不会根据索引替换
		$string = 'The quick brown fox jumps over the lazy dog.';
		$patterns = array();
		$patterns[0] = '/quick/';
		$patterns[1] = '/brown/';
		$patterns[2] = '/fox/';
		$replacements = array();
		$replacements[0] = 'slow';
		$replacements[1] = 'black';
		$replacements[2] = 'bear';
		echo preg_replace($patterns, $replacements, $string);*/


		/*//贪婪和分组获取小案例,ubb
		$pattern='/(\[b\])(.*)(\[\/b\])/U';//利用U解决贪婪问题
		$replace='<strong>$2</strong>';
		$string='This is a [b]php4[/b],This is a [b]php5[/b]';//这里第一个[b]和最后一个[/b]相匹配 是贪婪导致的
		echo preg_replace($pattern,$replace,$string);*/

		//preg_split() 通过正则分割字符串 返回由分割字符分割后的字符串组成的数组
		/*$keywords = preg_split("/[\s,]+/", "hypertext language, programming"); 
		print_r($keywords);
		$array=preg_split("/[\.@]/","www.1343368370@qq.com");
		print_r($array);*/


		

		
 ?>