<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 10:36
 */
//编码规范
//类名：大驼峰
//属性名：小驼峰或者下划线
//方法名：小驼峰或者下划线
//如何在类的内部访问，属性和方法
class People{
    public  $name='小名';
    public $age='20';
    public $sex='男';
    //类的内部使用属性，需要用到$this ；表示当前类的内部对象，表示自己
    public  function speak(){
        echo $this->name,'说话';
    }
    //小名喜欢什么
    public  function  like(){
    echo'喜欢',$this->speak();
    }
}

$xiaom =new People();
$xiaom->speak();
echo'<hr>';
$xiaom->like();
echo '<hr>';

//构造函数...析构函数
//构造函数：对象new的时候，自动调用
//析构函数：对象销毁的时候，自动调用
class Computer{
    public  $type;
    public  $price;
    public  $cpu;

    public  function zu_zhuang(){
        echo $this->type,'价格',$this->price,'cpu',$this->cpu;
    }

    //__FUNCTION__表示当前方法
    //__CLASS__表示当前的类
    //构造函数
   function  __construct( $t,$p,$c)
   {
       //属性使用，构造函数的赋值
       $this->type=$t;
       $this->price=$p;
       $this->cpu=$c;
       echo$this->type,'对象创建了 <br>';
   }
    //析构函数
    function __destruct()
    {
       echo $this->type,'对象销毁了 <br>';
    }
}
$c1= new Computer('thinkpad','5000','i7');
$c1->zu_zhuang();
echo '<hr>';
$c2=new Computer('mackbook','8000','i7');
$c2->zu_zhuang();

