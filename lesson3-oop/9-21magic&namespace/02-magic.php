<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 9:32
 */
//魔术方法
//__construct构造函数  __destruct析构函数
//__get __set(不可访问的属性 protected private 未定义)
//__isset __unset (不可访问的属性 protected private 未定义)
//__call __callStsaic
//对象中调用一个不可访问方法时，__call() 会被调用。
//静态上下文中调用一个不可访问方法时，__callStatic() 会被调用

class Test{
    function  __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo'尝试调用'.$name.'方法','参数:',implode(',',$arguments);
    }
    static  function  __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        echo'尝试调用静态'.$name.'方法','参数:',implode(',',$arguments);
    }
}

$t = new Test();
$t->runTest('a','b','c');
Test::runTest();

//序列化反序列化
class Info{
    public $name;
    public $age;
    function  __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }

    function __sleep(){
        //序列化会调用的魔术方法
        //返回序列化的属性
        return array('name');
    }
    function  __wakeup()
    {
        //反序列化会调用，可以对反序列化出来的对象进行修改
        $this->name='张三';
    }
}
$infoObj=new Info('小名',30);
//序列化对象:将对象序列化成一串字符串
$str=serialize($infoObj);
var_dump($str);
//反序列化：将规则字符串，反序列化成对象
$obj=unserialize($str);
var_dump($obj);

echo'<hr/>';

class DemoClass{

    //echo对象时调用
    function __toString()
    {
        return'不能使用echo打印成对象';
    }
    //将对象当成函数时调用
    function  __invoke()
    {
       echo'不能将对象当成函数调用';
    }
}

 $d=new DemoClass();
    echo $d;
    $d();

//__clone 当对象被clone时调用
echo'<hr/>';
class Computer{
    public  $type;
    public  $instance=0;//统计类的对象实例个数
    static  public  $num=0;
    function  __construct($type)
    {
        $this->type=$type;
        $this->instance= ++self::$num;//new时候，实例个数加一
    }
    function  __clone()
    {
        $this->instance= ++self::$num;//new时候，实例个数加一
    }
}



class Student{
    public  $name;
    public  $age;
    public  $computer;
    function  __construct($name,$age,$computer)
    {
        $this->name=$name;
        $this->age=$age;
        $this->computer=$computer;
    }
    //对象调用clone会调用
    function  __clone(){
        //可修改对象的属性
          $this->name='xiaohong_clone';
        //如果对象的属性中包含对象，那么对象在clone的时候，属性对象也应该被clone
        $this->computer=clone $this->computer;
    }

}

$s1=new Student ('xiaohong',29,new Computer('联想'));
//$s1->age=18;
//复制出新的对象
//s2是完全独立的对象
$s2=  clone $s1;
$s1->computer->type='apple';

var_dump($s1);
var_dump($s2);

//深copy：理解为完整copy，对象的普通属性和对象属性全部copy（//产生一个新的对象）

//浅copy：对对象的普通属性进行copy，对对象类型的属性进行引用

























