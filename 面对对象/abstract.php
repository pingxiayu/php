<?php 

	//抽象类 不能实例化 只要有抽象方法就为抽象类 抽象类必须拥有一个或多个抽象方法
	//类不支持多继承,支持多重继承  比如:b extends a ; c extends b

	/*abstract class person{
		//抽象类里可以包含普通方法
		//抽象方法不能有方法体  可以有成员字段
		public $name;
		abstract public function speak();
		public function talk(){
			echo "talk talk!";
		}
	}
	//抽象类是用来给子类继承的,实现一种规范和资源共享;
	class chinese extends person{
		//抽象类里面的抽象方法--子类必须实现
		public function speak(){
			echo "speak chinese";
		}
	}
	$chinese=new chinese();
	$chinese->speak();
	$chinese->talk();*/



  //接口与抽象类的比较:
  /*1.abstract class 在 Java 语言中表示的是一种继承关系，一个类只能使用一次继承关系。但是，一个类却可以实现多个interface。

  2.在abstract class 中可以有自己的数据成员，也可以有非abstarct的成员方法，而在interface中，只能够有静态的不能被修改的数据成员（也就是必须是static final的，不过在 interface中一般不定义数据成员），所有的成员方法都是abstract的。

  3.abstract class和interface所反映出的设计理念不同。其实abstract class表示的是"is-a"关系，interface表示的是"like-a"关系。 

  4.实现抽象类和接口的类必须实现其中的所有方法。抽象类中可以有非抽象方法。接口中则不能有实现方法。

  5.接口中定义的变量默认是public static final 型，且必须给其初值，所以实现类中不能重新定义，也不能改变其值。

  6.抽象类中的变量默认是 friendly 型，其值可以在子类中重新定义，也可以重新赋值。 

  7.接口中的方法默认都是 public,abstract 类型的。*/




	//接口
	//接口不能实例化 一个类可以实现多个接口
	//创建一个接口
	/*interface person{
		//接口中的成员字段必须为常量
		const NAME="平夏雨";
		//接口中的方法默认为  public abstract 
		function speak();
	}
	interface person2{
		function talk();
	}
	class chinese implements person,person2{
		//实现接口的类中的方法必须为public  (子类的属性和方法修饰符的权限不能比父类小)
		public function speak(){
			echo "我是中国人";
		}
		public function talk(){
			echo "talk talk";
		}
	}
	$chinese=new chinese();
	$chinese->speak();
	$chinese->talk();
	echo chinese::NAME;*/



	
 ?>



