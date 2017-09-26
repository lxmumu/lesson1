<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 16:34
 */
//动物类
class Animal{
    private $name;//本类的内部进行访问
    protected  $age=2;//protected
    public $eyes;
    protected $foot ='4';
    public $type;
    function active(){
        echo'我会动';
    }
    function  eat(){
        echo '吃';
    }
}

//extends 继承关键字
//类的继承
//狗类继承动物类，就继承了父类所有的属性和方法(private修饰的属性没有访问权限)
class Dog extends Animal{

    //属性的重载；
    //重载的属性的访问控制权限，必须和父类的权限一致或者更宽松（例子，父类权限是protected，子类的权限必须是protected或者是public，不能是private）
    protected $foot='3';
    //方法的重载，子类重载父类的方法
  function  eat(){
        //使用parent 子类中表示父类的关键字
        // ::属于操作符
       echo $this->foot;
      parent::eat();
     //  parent::foot;不可以用::操作符，操作父类属性
      echo'会吃骨头';
  }
    function  home(){
        echo'看家';
    }
}
$dog= new Dog();
$dog->eyes='2';
$dog->eat();
//echo $dog->foot;
$dog->name;
$dog->name='击娃娃';//父类私有的属性不能被外部访问
var_dump($dog);//打出结构信息
//print_r();相关信息
//echo 输出
//猫类
class Cat extends Animal{

    function mouse(){
        //父类的protected属性可以在子类内部访问
        echo $this->age,'岁抓老鼠';
    }

}
$cat=new Cat();
$cat->mouse();
//$cat->age=100;受保护属性不能再外面访问

//php中的继承是单继承，一个类只能有一个父类
//面向对象的三大特性，封装，继承 多态
//封装：所谓封装，也就是把客观事物封装成抽象的类，并且类可以把自己的数据和方法只让可信的类或者对象操作，对不可信的进行信息隐藏。封装是面向对象的特征之一，是对象和类概念的主要特性。 简单的说，一个类就是一个封装了数据以及操作这些数据的代码的逻辑实体。在一个对象内部，某些代码或某些数据可以是私有的，不能被外界访问。通过这种方式，对象对内部数据提供了不同级别的保护，以防止程序中无关的部分意外的改变或错误的使用了对象的私有部分。
//继承：所谓继承是指可以让某个类型的对象获得另一个类型的对象的属性的方法。它支持按级分类的概念。继承是指这样一种能力：它可以使用现有类的所有功能，并在无需重新编写原来的类的情况下对这些功能进行扩展。 通过继承创建的新类称为“子类”或“派生类”，被继承的类称为“基类”、“父类”或“超类”。继承的过程，就是从一般到特殊的过程。
//多态：多个子类继承与同一个父类，但是每个子类又表现出自身的独有特性，这就是多态












