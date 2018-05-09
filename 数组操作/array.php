<?php 
/*//数组 print_r() 打印变量易于理解的信息;
	 $username=array("平夏雨","牛仔","fe皮");
	 //echo $username[2];
	 //print_r($username);*/
	 
	/*//使用range()自动创建数组
	 $letter=range(1,10);
	 //print_r($letter);*/
	 

	//count统计数组元素数量或对象属性个数
	/*for($i=0;$i<count($letter);$i++){
		echo ($i+1)."----".$letter[$i];
		echo "<br />";
	}*/

	/*//通过for each循环遍历    foreach($xx as $xx){};
	foreach($username as $value){
		echo $value."<br />";
	}

	//打印下标   foreach($xx as $下标变量 => $值);
	foreach($username as $key=>$value){
		echo $key."<br />";
	}*/


	//自定义键数组
	//$username=array("baidu"=>"李彦宏","360"=>"周孔伟","google"=>"李开复");
	//print_r($username);
	//	 foreach($username as $key=>$value){
	 	//echo $key."--".$value;
	 //}
	//添加 其实也相当于创建数组
	//$username["平夏雨"]="灯火";
	

	/*//each的使用
	//指针指向数组的第一个键值对 将第一个键值对包装成一个新数组 并将数组指针向前移动一位;
	 $username=array("baidu"=>"李彦宏","360"=>"周孔伟","google"=>"李开复");
	 print_r(each($username));//Array ([0] => baidu [1] => 李彦宏 ['value'] => 李彦宏  ['key'] => baidu )
	 echo "<br>";
	 print_r(each($username));//Array ( [1] => 周孔伟 ['value'] => 周孔伟 [0] => 360 ['key'] => 360 )
	 //使用each实现遍历 !!将非空数转换为布尔值;
	 while(!!$a=each($username)){
	 	echo $a['key']."-".$a['value'];
	 }*/


	/* //list 将数组中的值赋值给一些变量 下标只能为数字
	 $num=array('aaa','bbb','ccc','ddd');
	 list($var1,$var2,$var3,$var4)=$num;
	 echo $var1.",".$var2;//aaa,bbb*/

	 /*//reset() 将数组指针指向第一个元素 并返回当前元素的值
	 $username=array("baidu"=>"李彦宏","360"=>"周孔伟","google"=>"李开复");
	 //$a=each($username);
	// echo $a['key'];
	 //$a=each($username);
	 //echo $a['key'];

	 reset($username);

	 //$a=each($username);
	 //echo $a['key'];*/

	 /*//array_unique 去除数组中重复的值 返回一个新数组
	 $number=array(1,2,5,9,6,5,2,1,3,3,4,4,5,6);
	 $a=array_unique($number);
	 print_r($a);*/


	 /*//array_flip 交换数组中的键和值
	 $username=array("baidu"=>"李彦宏","360"=>"周孔伟","google"=>"李开复");
	 $newName=array_flip($username);
	 print_r($newName);//Array ( [李彦宏] => baidu [周孔伟] => 360 [李开复] => google )*/

	/* //数组里的数组 二维数组
	 $products=array(
	 			array('你',23,180),
	 			array('我',25,176),
	 			array('她',21,168)
	 );
	 //echo $products[0][0];

	 //通过循环遍历
	 for($i=0;$i<count($products);$i++){
	 	for($j=0;$j<count($products[$i]);$j++){
	 		echo($products[$i][$j])."--";
	 	}
	 	echo "<br>";
	 }*/



	/* //当数组下标不为数字时
	 $products=array(
	 			array('姓名'=>'你','年龄'=>23,'身高'=>180),
	 			array('姓名'=>'我','年龄'=>25,'身高'=>176),
	 			array('姓名'=>'她','年龄'=>21,'身高'=>168)
	 );
	 //使用foreach
	  for($i=0;$i<count($products);$i++){
	 	foreach($products[$i] as $key=>$value){
	 		echo $key."-".$value."|";
	 	}
	 	echo "<br>";
	 }

	 //使用while+(list+each)方法
	   for($i=0;$i<count($products);$i++){
	 		while(!!list($key,$value)=each($products[$i])){
	 			echo $key."*".$value."|";
	 		}
	 	echo "<br>";
	 }*/

	 //排序 sort() 第二个可选参数:排序依据 SORT_NUMBER(整体的大小)  SORT_STRING(第一位的大小)
	/* $fruit=array('西瓜','香蕉','苹果');
	 sort($fruit);
	 print_r($fruit);*/

	 //$number=array('12','2');
	 //sort($number,SORT_STRING);
	 //print_r($number);//Array ( [0] => 12 [1] => 2 )
	 //$number1=array(5,6,8,1);
	 //sort($number1);
	 //print_r($number1);// Array ( [0] => 1 [1] => 5 [2] => 6 [3] => 8 )
	 


	 //asort()会保留原先的索引值 rsort():反向排序   arsort();
	 // asort($number);
	 // print_r($number);//Array ( [1] => 2 [0] => 12 )
	 // asort($number1);
	 // print_r($number1);//Array ( [3] => 1 [0] => 5 [1] => 6 [2] => 8 )
	 
	 //ksort() 按照键(key)名排序 krsort()
	  // $username=array("baidu"=>"李彦宏","360"=>"周孔伟","google"=>"李开复");
	  // krsort($username);
	  // print_r($username);
	  

	  //shuffle() 对数组进行随机打乱 
	  
	  
	  //array_reverse() 对数组进行反向排序 返回一个新数组
	  

	  /*$fruit=array('西瓜','香蕉','苹果');
	  //array_unshift() 在数组开头插入新元素
	  array_unshift($fruit,"草莓");
	  //array_push() 在数组结尾插入新元素
	  array_push($fruit,"梨子");
	  //array_shift() 删除开头的元素
	  array_shift($fruit);
	  //array_pop() 删除末尾的元素
	  array_pop($fruit);*/

	  /*//array_rand() 随机取出数组中的元素的下标, 第二个参数:个数  为1时 返回一个变量 大于1时返回一个数组
	  $fruit=array('西瓜','香蕉','苹果');
	  $a=array_rand($fruit,1);
	  echo $fruit[$a];
	  $b=array_rand($fruit,2);
	  echo $fruit[$a[0]];
	  echo $fruit[$a[1]];*/

	  /*//数组的指针操作
	  //cyrrent()将指针指向当前元素 ,返回当前元素的值 ,指针不会自动移动 ,each会移动;
	  $fruit=array('西瓜','香蕉','苹果');
	  //echo current($fruit);//西瓜
	  //echo current($fruit);//西瓜
	  
	  //next() 将指针指向下一个元素 并返回当前元素的值
	  echo  next($fruit);//香蕉
	  echo current($fruit);//香蕉
	  //prev() 将指针向上一个元素； 并返回当前元素的值
	  echo prev($fruit);//西瓜
	  echo current($fruit);//西瓜
	  //reset() 将数组指针指向第一个元素 并返回当前元素的值
	  //each()指针指向数组的第一个键值对 将第一个键值对包装成一个新数组 并将数组指针向前移动一位;*/

	 /* //array_count_values 统计数组中值出现的次数 还有count(), sizeof() 统计数组的长度;
	  $fruit=array('西瓜','香蕉','苹果');
	  print_r(array_count_values($fruit));*/

	 /* //extract() 将数组下标设置成变量 并返回这个下标对应的值
	   $a=$b=$c='';//初始化一下更好
	   $fruit=array('a'=>'西瓜','b'=>'香蕉','c'=>'苹果');
	   extract($fruit);
	   echo $a;
	   echo $b;
	   echo $c;*/
	   
 ?>