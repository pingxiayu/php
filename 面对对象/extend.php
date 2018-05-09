<?php 
	//opp 继承
	


	//子类调用父类的公有方法
	/*class people{
		public $where="China  ";
		public function speak(){
			echo "speak Chinese";
		}
	}

	class me extends people{
		//重写(覆盖)父类的字段和方法
		//public $where="American";
		//public function speak(){
			//echo "speak English";
		//}
	}
	$me=new me();
	echo $me->where;
	echo $me->speak();*/



	//子类调用父类的封装的字段和方法
	/*class people{
		//用private封装的字段和方法不能被子类继承  就算是在子类中用公有方法去访问 也访问不到;
		//因为这里创建的对象是子类的,而私有化 只能在本类中被访问;
		//可以使用 protected 修饰符来封装
		protected $where="China  ";
		protected function speak(){
			return  "speak Chinese";
		}
	}
	class me extends people{
		//子类的属性和方法修饰符的权限不能比父类小 所以不能用private修饰
		protected $where="American  ";
		protected function speak(){
			return  "speak English";
		}
		public function get(){
			//return $this->where."".$this->speak();
			//return $this->where."".parent::speak();
		}
	}
	$me=new me();
	echo $me->get();*/


	//在子类重写了父类方法时,调用父类方法; parent::只能用于调用父类的方法;

	/*class people{
		public $where="China  ";
		public function speak(){
			return "speak Chinese";
		}
	}

	class me extends people{
		public $where="American";
		public function speak(){
			return  "speak English";
		}
		public function talk(){
			//使用parent::方法名();
			return parent::speak();
		}
	}
	$me=new me();
	echo $me->where;
	echo $me->speak();
	echo $me->talk();*/


	//final 用于创建单独的类 不能被继承
	// final class person{

	// }
	 
	/*class person{
		//final用于方法前面 表示该方法不能被重写(覆盖)
		final function speak(){
			echo "1111";
		}
	}
	class student extends person{

	}
	$student=new student();
	$student->speak();*/


	//玩一玩
	/*class student{
		protected $name;
		protected $age;
		protected $sex;
		protected $id;

		protected function __construct($name,$age,$sex,$id){
			$this->name=$name;
			$this->age=$age;
			$this->sex=$sex;
			$this->id=$id;
		}
		protected function pop(){
			return "我的名字:".$this->name." 年龄:".$this->age." 性别:".$this->sex." 编号".$this->id;
		}
	}
	class Im extends student{
		private $score;
		public function __construct($name,$age,$sex,$id,$score){
			parent::__construct($name,$age,$sex,$id);
			$this->score=$score;
		}
		public function pop(){
			return parent::pop()." 分数:".$this->score;
		}
	}
	$me=new im("平夏雨",23,"男",9527,98);
	echo $me->pop();*/
 ?>