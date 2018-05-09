<?php 
	//多态:一个类或接口由不同的对象实现 从而产生不同的效果
	/*interface person{
		const language="中文";
		const language1="英文";
		function speak();
		function color();
	}
	class Chinese implements person{
		function speak(){
			return "我是中国人说".person::language;
		}
		function color(){
			return "我是黄种人";
		}
	}
	class American implements person{
		function speak(){
			return "我是美国人说".person::language1;
		}
		function color(){
			return "我是白种人";
		}
	}
	class people{
		public function run($type){
			echo $type->speak().",";
			echo $type->color();
		}
	}
	$Chinese=new Chinese();
	$American=new American();
	$people=new people();
	//通过传入不同的实例,实现不同的效果;
	$people->run($American);*/





	//魔术方法
	

	//类的引入  类文件的存储 XXX.class.php
	//注册给定的函数作为 __autoload 的实现,__autoload 在高版本php已被废弃;
	/*spl_autoload_register(function($class){
		require("./classes/".$class.".class.php");	
	});

	$person=new person();
	$people=new people();*/

	//使用__callStatic():屏蔽对象调用方法时产生的错误 这个方法必须为公有的静态方法
	/*class cattle{
		function shout(){
			echo "哞哞哞!";
		}

		public static function __callStatic($name,$arguments){
		 	echo $name."方法不存在";
		 	print_r($arguments);
		}
	}
	cattle::niuzai("平牛仔",9);*/

	//__tostring() 用于一个类被当成字符串时应怎样回应
	 /*class TestClass
		{
		    public $foo;

		    public function __construct($foo) 
		    {
		        $this->foo = $foo;
		    }

		     function __toString() {
		        return $this->foo;
		    }
		}

	 $class = new TestClass('Hello');
	 echo $class;*/


	 //__clone
	 
	 interface person{

	 }


	 class computer{
	 	public $name="平夏雨";
	 	public function read(){

	 	}
	 }
	 class note extends computer{

	 }
	 $computer =new computer();
	 $note=new note();
	 //检查类是否存在 接收一个字符串:要检查的类的类名
	 echo class_exists("computer");
	 //获取对象的类名  接收对象的引用
	 echo get_class($computer);
	 //获取类中的公有方法 以数组的形式输出  可以为字符串,对象的引用  对象;
	 print_r(get_class_methods(new computer()));
	 //获取类中的公有字段 接受一个字符串 返回一个数组
	 print_r(get_class_vars('computer'));
	 //获取子类的父类
	 echo get_parent_class('note');
	 //判断接口是否存在
	 echo interface_exists('person');
	 //判断对象是否是这个类或父类的实例 接收两个参数:对象引用,父类字符串
	 echo is_a($note,'computer');
	 //判断对象是否是类的子类
	 echo is_subclass_of($note,'computer');
	 //判断对象是否拥有这个方法
	 echo method_exists($computer,"read");
	 ?>