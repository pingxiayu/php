<?php 
	
	//使用mysqli对象操作数据库
	

	//创建mysqli对象(资源句柄)
	//连接数据库 参数:1.用户名 2.账户 3.密码 4.数据库
	//面对对象风格  利用constructor()创建
	@$_mysqli=new mysqli('localhost','root','134336','school');
	//connect_error() 返回上次连接错误的字符串描述
	if($_mysqli->connect_error){
		echo ("连接错误:".$_mysqli->connect_error);
	}


	//character_set_name() 返回当前数据库连接的字符编码;
	if($_mysqli->character_set_name()!='utf8'){
		//设置编码utf8;
		$_mysqli->set_charset('utf8');
	}
	//创建一条查询语句
	/*$_sql="SELECT * FROM school";
	$_sql1="UPDATE school SET name='平夏雨',email='pingxiayu@163.com' WHERE id=1";
	//执行准备好的Sql语句 返回一个结果集对象
	$_result=$_mysqli->query($_sql);
	print_r($_result) ;
	$_result1=$_mysqli->query($_sql1);*/
	


	//同时执行多条sql语句
	//$_sql="ALTER TABLE school ADD COLUMN comment VARCHAR(20) AFTER regdate;";
	//$_sql="UPDATE school SET comment='前端实习生' WHERE id=1;";
	$_sql="SELECT * FROM school;";
	$_sql.="SELECT * FROM school where id=3";


	//multi_query()  对数据库执行多条查询(select) 返回一个布尔值 
	
	//普通方法 打印出查询结果
	/*if($_mysqli->multi_query($_sql)){
		//将结果集的指针向下移动
		$_mysqli->next_result();
		//store_result() 获取当前的结果集
		$_result=$_mysqli->store_result();
		if(!$_result){
			echo ("第二条语句出错");
			exit();
		}
		print_r($_result->fetch_row());
		$_mysqli->next_result();
		$_result=$_mysqli->store_result();
		if(!$_result){
			echo "第三条sql语句出错";
			exit();
		}
		print_r($_result->fetch_row());
	}else{
		echo("第一条sql语句出错");
		exit();
	}*/
	//使用do whlie 
	/*if($_mysqli->multi_query($_sql)){
		$i=1;
		while($_mysqli->more_results()){
			$_mysqli->next_result();
			if($_result=$_mysqli->store_result()){
				if($row=$_result->fetch_row()){
				$i++;
				print_r($row);
				}
				$_result->free();
			}else{
				echo "第 $i 条语句出错了";
				exit();
			}
		}
	}*/



//事务(transaction)  一系列将要发生或正在发生的连续操作
	/*$_sql="ALTER TABLE school ADD COLUMN total int(5) NOT NULL AFTER name;";
	$_mysqli->multi_query($_sql);
	$_sql1="UPDATE school SET total=300 WHERE id=1;";
	$_sql1.="UPDATE school SET total=250 WHERE id=2";
	$_mysqli->multi_query($_sql1);*/
	//关闭自动提交
	$_mysqli->autocommit(false);

	$sql="UPDATE school SET total=total-50 WHERE id=1;";
	$sql.="UPDATE school SET total=total+50 WHERE id=2";
	if($_mysqli->multi_query($sql)){
		//通过影响的行数确定是否成功执行
		if($_mysqli->affected_rows==1){
			//如果$_success为true 则手动提交 否则回滚
			$_success=true;
		}else{
			$_success=false;
		}
	$_success=$_mysqli->affected_rows==1?true:false;
	//下移指针
	$_mysqli->next_result();
	$_success2=$_mysqli->affected_rows==1?true:false;
	if($_success&&$_success2){
		$_mysqli->commit();
		echo "全部提交";
	}else{
		$_mysqli->rollback();
	}
	}else{
		echo "第一条语句错误";
	}

$_mysqli->autocommit(true);


	//获取结果集中的字段值 通过结果集对象(mysqli_result)中的各种方法,在调用时指针会自动向下移动
	
	//fetch_row() 将结果行作为枚举数组
	//print_r($_result->fetch_row());
	//echo $_result->fetch_row()[1];
	//遍历
	/*while(!!$row=$_result->fetch_row()){
		echo $row[1]."<br>";
	}*/


	//使用关联数组 fetch_assoc()   将结果行作为关联数组提取
	//print_r($_result->fetch_assoc()['name']);
	/*while(!!$row=$_result->fetch_assoc()){
		echo $row['name']."<br>";
	}*/


	//使用索引+关联数组 fetch_array()  将结果行作为关联数组或数值数组来获取
	/*print_r($_result->fetch_array()[1]);
	print_r($_result->fetch_array()['name']);
	while(!!$row=$_result->fetch_array()){
		echo $row['name']."<br>";
		//echo $row[1]."<br>";
	}*/

	//通过fetch_object() 将结果集的当前行作为对象返回
	 //print_r($_result->fetch_object()->name);
	 /*while(!!$row=$_result->fetch_object()){
	 	print_r($row->name."<br>");
	 }*/




	 //mysqli_result下的num_rows属性  结果集中选择了多少行;
	 /*echo $_result->num_rows;
	 echo @$_result1->num_rows;*/


	 //mysqli下的affected_rows属性  影响了多少行
	 //echo $_mysqli->affected_rows;



	 //field_count属性 返回结果集中选择的字段
	 //echo $_result->field_count;
	 

	 //fetch_filed() - 返回结果集中的下一个字段
	  //print_r($_result->fetch_field());
	 /* while(!!$field=$_result->fetch_field()){
	  	echo $field->name."<br>";
	  }*/


	  //fetch_fields() - 一次性返回结果集中的所有字段
	  /*print_r($_result->fetch_fields());
	  echo $_result->fetch_fields()[0]->name;*/
	  //$fields=$_result->fetch_fields();
	  
	  //遍历
	  /*for($i=0;$i<count($fields);$i++){
	  	echo $fields[$i]->name;
	  }*/

	  /*foreach($fields as $value){
	  	echo $value->name.'<br>';
	  }*/

	  //写着玩的
	 /* $field=$_result->fetch_field();
	  //print_r($field);
		function game($field){
			 $newarr=array();
			if(is_object($field)){
				$array=(array)$field;
			}if(is_array($array)){
				foreach($array as $key=>$value){
					array_push($newarr,"$key=>$value");
				}
			}
			return $newarr;
		}
		print_r(game($field));*/
		
		/*$fields=$_result->fetch_fields();
		function game($fields){
			$newarr=array();
			foreach($fields as $class){
				if(is_object($class)){
					$array=(array)$class;
				}if(is_array($array)){
					foreach($array as $key=>$value){
						array_push($newarr,"$key=>$value");
						
					}
				}
			}
			return $newarr;
		}
		print_r(game($fields));*/


	  //数据指针  data_seek() 
	  /*$_result->data_seek(3);//打印出第4行的name
	  echo $_result->fetch_row()[1];*/



	  //字段指针 field_seek();
	  /*$_result->field_seek(1);
  	  print_r($_result->fetch_field());*/






	//free() 释放与结果集相关的内存
	//$_result->free();
	









	//数据库操作时发生的错误
	if($_mysqli->errno){
		echo '数据库操作错误编号:'.$_mysqli->errno.'<br>'.'数据库操作错误信息:'.$_mysqli->error;
	}
	//断开mysql
	@$_mysqli->close();//对象

 ?>