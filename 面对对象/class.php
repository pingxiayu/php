<?php 
	//创建类
	/*class computer{
		//成员变量 不在类里面给变量赋值
		public $name;
		public $core;
		//构造方法 function__construct  构造方法不需要调用 在创建实例的时候自动调用
		public function __construct(){
			echo "我是构造";
		}
		//析构方法
		public function __destruct(){
			echo "我是析构方法";
		}
		//方法 不加修饰符默认public
		function run(){
			echo "方法";
		}
	}
	$computer=new computer();
	//$computer2=new computer();
	//赋值
	$computer->name="华硕";
	$computer->core="i5";
	//->表示指向
	echo $computer->name;
	echo $computer->core;
	     $computer->run();
	echo var_dump($computer);
	echo var_dump($computer2);*/




	//类外访问私有属性

	//常规方法
	/*class student{
		private $name;
		private $age;
		public function get($name,$age){
			//字段在类内调用时必须使用 类->字段 
			//字段在类外调用时必须使用 对象->字段
			//如果是在本类调用 则可以用$this 代替student对象
			$this->name=$name;
			var_dump($this);
			$this->age=$age;
			return $this->name.'--'.$this->age;
		}
	}
	$student=new student();
	var_dump($student);
	echo $student->get("平夏雨",23);*/




	//构造
	/*class student{
		private $name;
		private $age;
		//这里的$this都指向实例对象
		//谁调用我我就指向谁
		public function __construct($name,$age){
			$this->name=$name;
			$this->age=$age;
			var_dump($this);
		}
		public function get(){
			var_dump($this);
			return $this->name.'--'.$this->age;
		}
	}

	$student=new student("平夏雨",23);
	echo $student->get();
	$student2=new student("平浩然",9);
	echo $student2->get();*/

	//魔术方法
	/*class student{
		private $name;
		private $age;
		private $job;
		private $salarry;
		private $height;
		private $weight;
		//在类外直接调用私有字段时，会检查是否有拦截器
		//在类外直接对私有字段复制时，__set()方法会拦截，就不会报错
		//问题1:私有化__set()和__get()方法 还是可以执行
		//原因:因为在执行 $student->name=""时  $this 已经指向类的内部，而类内可以访问封装的方法 所以只要间接拦截就可以
		//问题2:用public修饰 ，在类外调用时不报错，但是无效;
		//原因:__set()和__get()是php的内置方法,具有特殊性。具体是什么不得而知;
		//使用私有的好处:避免暴露内部细节;
		public或private function __set($key,$value){
			//这里$key=name,$value=赋的值
			$this->$key=$value;//相当于this->name="平夏雨";
			//var_dump($this);
		}

		public或private function __get($key){
			if(isset($key)){
				return $this->$key;
			}else{
				return null;
			}
		}
	}
	$student=new student();
	//每次赋值和取值都会被拦截器拦截 从而实现赋值操作
	//$student->__set($student->name,"平");//无效
	$student->name="平夏雨";
	$student->age=23;
	$student->job="software";
	$student->salarry=10000;
	$student->height=176;
	$student->weight=75;
	echo "我的名字:".$student->name."年龄:".$student->age."工作:".$student->job."工资:".$student->salarry."身高:".$student->height."体重:".$student->weight;*/



	//常量
	/*class constants{
		const name="平夏雨";
	}
	//输出形式
	echo constants::name;*/




	//静态类成员
	

	//静态变量 放在常量池中 是共享的 可以直接用   类名::变量名 调用;
	/*class person{
		public static $num=0;

		public function add(){
			//访问静态变量用self
			self::$num++;
		}
	}
	$person=new person();
	$person->add();
	$person->add();
	$person->add();
	echo person::$num;//3
	echo "<br />";
	$person1=new person();
	$person1->add();
	$person1->add();
	$person1->add();
	echo person::$num;//6*/


	//静态方法 不需要对象来调用 直接使用 类名::方法名() 调用;
	/*class person{
		public static $num=0;
		public static function add(){
			self::$num++;
		}
	}
	person::add();
	person::add();
	person::add();
	person::add();
	person::add();
	echo person::$num;//5*/


	//instanceof()  判断一个对象是否是一个类的实例  对象名 instanceof 类名
	/*class student{

	}
	$student=new student();
	echo ($student instanceof student);*/
 ?>