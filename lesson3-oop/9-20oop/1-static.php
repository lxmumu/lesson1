<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 9:22
 */
//修饰静态方法和静态属性的关键字 static
//注意：
//1,不能使用实例化对象访问静态属性
//2，类的内部使用静态属性时，不能用$this
//3,静态的方法可以使用类名调用，也可以使用对象调用
//4,静态的属性，属于类，它的值共享于类的对象
//5,父类的静态属性，子类可以共享，子类也可以重载生成自己的静态属性
class Pan {
    //声明一个静态属性
    static public $type = '钢笔';
    static  public $num=0;
    function __construct()
    {
        self::$num++;
    }
    //普通的函数
    function showPan(){
//        $this->type;错误的
//        echo'飘靓'.Pan::$type;
        //使用self关键字，表示当前的类
        echo'漂亮'.self::$type;
    }
   static  public  function buyPan(){
       echo'购买',self::$type;
   }
}
//外部如何调用静态属性：1,不需要实例化对象，直接类名调用2,使用::操作符
echo Pan::$type;
//外部调用静态方法，使用类名::调用
Pan::buyPan();

$p =new Pan();
//$p->type;
$p->showPan();
$p->buyPan();//也可以使用对象调用
//$p->type;对象不能访问静态属性
echo Pan::$num;//1
echo '<hr/>';
//后期静态绑定
//static::不再被解析为定义当前方法所在类，而是根据实际的运行计算，得到当前调用方法的类
//self::的局限，只能表示定义当前方法所在的类
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
//        self::who();
        static::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;

    }
}

//B::test();//A
B::test();//B
echo'<hr/>';
//后期静态绑定的原理 get_called_class()实现
class foo {
    static public function test() {
        var_dump(get_called_class());
    }
}

class bar extends foo {
}

foo::test();//foo
bar::test();//bar

//练习，声明一个类，类中包含静态属性和静态方法，还有一个子类，子类调用父类静态方法，使用后期静态绑定方式

class Person{
    static public $username='li';
    static  public $age=10;

    static public function eat(){
        echo self::$username.'吃饭了<br/>';
        echo __CLASS__;
    }
    static public function sleep(){
//       self::eat();
        static::eat();
    }

}

class xiaoming extends Person{
    static public function eat(){
//       echo self::$age;
        echo __CLASS__;
    }

}

echo'<br/>';
xiaoming::sleep();
//xiaoming::eat();















































