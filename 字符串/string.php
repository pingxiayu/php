<?php 
	//字符串的处理
	
	/*//清理空格
	$str="     平夏雨        ";
	//echo $str;
	
	//ltrim() 清理左边空格
	//echo ltrim($str);
	
	//rtrim()  清理右边空格
	//echo rtrim($str);
	
	//trim()  清理左右空格
	echo trim($str);*/


	/*//nl2br 将\n转换为<br>
	$str="我就是我\n是颜色不一样的烟火";//单引号不能解析\n
	echo nl2br($str);*/


	//htmlentities()   将所有字符转换为HTML;
	//$str='<strong>平夏雨</strong>';
	//echo $str;
	//echo htmlentities($str);//<strong>平夏雨</strong>
	//htmlspecialchars() 效果和htmlentities()一样
	//echo htmlspecialchars($str);

	//strip_tags() 去除html;
	//echo strip_tags($str);


	/*//addslashes() 对即将插入数据库的字符串进行转义
	$str='my name is "pingxiayu",\n i am student.';
	//echo addslashes($str);//my name is \"pingxiayu\",\\n i am student.
	//stripcslashes()  将数据控中拿出来的字符串进行还原
	$a=addslashes($str);
	echo stripcslashes($a);//my name is "pingxiayu",\n i am student.*/


	//strtoupper() 将字符串中的字母转换成大写
	//strtolower() 将字符串中的字母转换成小写
	//ucfirst() 将字符串第一个字母转换成大写
	//ucwords() 将字符串中每个单词第一个字母转换为大写
	

	/*//str_pad() 使用另一个字符串填充字符串为指定长度 接收4个参数:字符串，填充的长度，填充字符串，(可选)填充类型
	//STR_PAD_RIGHT(默认)，STR_PAD_LEFT 或 STR_PAD_BOTH
	$str='我的天空多么的清晰';
	echo str_pad($str,50,'--',STR_PAD_BOTH);*/


	//操作子字符串
	
	/*//explode 使用一个字符串分割另一个字符串 返回一个数组
	//第一个参数:用来分割的字符串,第二个参数:要被分割的字符串
	$name=explode(",", "oh,honey,我脑海中全都是你");
	print_r($name);*/

	/*//implode() 将一个一维数组的值转化为字符串 连接符默认为空 返回一个字符串
	$arr=array('p','x','y');
	echo $str=implode('-',$arr);//p-x-y
	echo implode($arr);//当连接符为空时 pxy*/

	/*//strtok() 标记分割字符串 会自动记住它在字符串中的位置  后面只需要传入分割字符串即可 返回一个字符串
	$str="i#am*learning+php";
	$tok=strtok($str,"#*+");
	while($tok){
		echo $tok."<br>";
		$tok=strtok('#*+');//后面调用的方式
	}*/

	/*//substr();
	$str="somnabulist";
	echo substr($str,2,5);//mnabu*/

	/*//str_split() 将字符串转换为数组 接收两个参数:字符串,数组中每个元素的长度
	$str="Hello Friend";
	$arr=str_split($str);
	$arr1=str_split($str,2);
	print_r($arr);
	print_r($arr1);*/

	/*//strrev() 反转字符串
	$str="hello world";
	echo strrev($str);*/


	//字符串的比较
	
	/*//strcmp() 二进制安全字符串比较 区分大小写 如果第一个大于第二个返回1 否则返回-1 相等为0;
	$str='wo';
	$str1='Wo';
	//echo strcmp($str1,$str);
	//strcasecmp() 不区分大小写
	echo strcasecmp($str,$str1);*/


	/*//strnatcmp() 使用自然排序算法比较字符串 自然排序 :会比较整体 ,标准排序:只会比较第一个字符
	//usort() 使用用户自定义的比较函数对数组中的值进行排序
	$arr1 = $arr2 = array("img12.png", "Img10.png", "img2.png", "img1.png");
	echo "标准排序\n";
	usort($arr1, "strcmp");
	print_r($arr1);
	echo "\n自然排序\n";
	usort($arr2, "strnatcmp");
	print_r($arr2);
	echo strcmp('2','10');//1
	echo strnatcmp('2','10');//-1*/


	/*//strspn() 计算字符串中全部字符都存在于指定字符集合中的第一段子串的长度
	//添加satrt和length属性 相当于substr("am china",0,8);
	echo strspn("am china","i am pxy",0,8);*/


	/*//strlen() 测试字符串的长度
	$str="i am pxy";
	echo strlen($str);*/


	/*//substr_count() 测试字符串出现的频率
	echo substr_count("i am pxy",'a');*/


	/*//strstr() 从指定的字符开始输出之后的字符串  还可以传入一个布尔值 默认为false 表示返回之后的字符串
	//若为true 则返回之前的字符串; 区分大小写
	$str="www.1343368370@qq.com.@qq.com";
	//$domain=strstr($str,"@");
	//$domain=strstr($str,"@",true);
	//echo $domain;
	
	//stristr() 不区分大小写
	$user=stristr($str,"Q");
	echo $user;*/


	/*//strpos() 查找字符串首次出现的位置
	$str="www.1343368370@qq.com.@qq.com";
	$pos=strpos($str,"@");
	echo $pos;
	//strrpos() 计算指定字符串在目标字符串中最后一次出现的位置
	$pos1=strrpos($str,"@");
	echo $pos1;*/

	//str_replace() 替换字符串,不区分大小写
	//第一个参数:要查找的字符串或数组， 
	//第二个参数:表示要替换的字符串或数组,
	//第三个：表示执行替换的字符串或数组,
	//第四个:表示替换发生的次数
	
	/*$str="www.1343368370@qq.com.@qq.com";
	//$rstr=str_replace('.com','',$str);
	//str_irepalce() 不区分大小写
	$rstr=str_ireplace('.COM','',$str);
	echo $rstr;*/
	
	/*$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
	$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
	echo $onlyconsonants;*/

	/*$phrase  = "You should eat fruits, vegetables, and fiber every day.";
	$healthy = array("fruits", "vegetables", "fiber");//如果用来替换的数组小于查找的数组 则多余的用空字符串替换
	$yummy   = array("pizza", "beer", "ice cream");//You should eat pizza, beer, and ice cream every day.
	$yummy   = array("pizza", "beer");//You should eat pizza, beer, and every day.
	$newphrase = str_replace($healthy, $yummy, $phrase);
	echo $newphrase;*/

	/*$str = str_replace("ll", "", "good golly miss molly!", $count);
	echo $count;//2*/

	/*//substr_replace() 替换字符串的子串
	$str="www.1343368370@qq.com";
	$substr=substr_replace($str,'130',4,5);//从4开始取出5个用'130'替换
	echo $substr;*/


	//处理中文字符
	//$str="我是平夏雨";


	//echo strlen($str);//15 utf-8:一个中文字为3个字节，gb2312和gbk:为2个字节
	//echo mb_strlen($str);//5
	
	//echo substr($str,0,3);//我 这里长度必须为3的倍数，否则为乱码
	//echo mb_substr($str,0,2);//我是
	

	//echo strpos($str,'是');//3
	//echo mb_strpos($str,'是');//1
	

	//echo strstr($str,"夏");
	//echo mb_strstr($str,"平");//无区别
	
	//echo substr_count($str,"我");
	//echo substr_count($str,"是");//无区别
 ?>