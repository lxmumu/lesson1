<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 14:37
 */

//interface 理解成协议，实现这协议的类，必须遵循协议的规定

//1.通过 interface 关键字定义接口，跟定义类类似
//2.接口中定义的方法必须是公开的
//3.接口中定义的方法，不需要实现（跟抽象方法类似）
//4.类使用implements关键字，来实现接口，这个类必须实现接口中定义的所有的方法
//5.一个类，可以同时implement 多个接口
//6.接口和接口之间也可以有继承的关系
//7.接口中可以声明常量
//8.你可以使用 instanceof 和类型约束，检测某个对象是否遵循了某个协议

//定义接口

  interface  InterfaceTest{
      //接口中声明常量
      const test='InterfaceTest';
     //接口定义方法跟抽象方法类似
     public function  test();
 }
//外部使用接口常量
echo InterfaceTest::test;
//定义第二个接口
 interface InterfaceDemo{
     public function  demo();
 }
//接口的继承
//接口可以多继承
interface InterfaceMore extends InterfaceDemo,InterfaceTest{
    public  function  more();
}

//类实现接口
//类实现多个接口，每个之间使用 , 分隔
  class ClassTest implements  InterfaceTest,InterfaceDemo{
    //必须实现接口中定义的方法
    public  function test(){
       echo'implement接口的方法';
    }
      public  function demo(){
          echo'InterfaceDemo接口的方法';
      }
}
$c= new ClassTest();
$c->test();
$c->demo();
//InterfaceMore 继承了 InterfaceTest和InterfaceDemo test()和demo()的方法
//MoreClass必须继承test(),demo(),more()
class MoreClass implements  InterfaceMore{
    public  function demo()
    {
        // TODO: Implement demo() method.
        echo __CLASS__.__FUNCTION__;
    }
     public  function test()
     {
         // TODO: Implement test() method.
         echo __CLASS__.__FUNCTION__;
     }
    public  function  more()
    {
        // TODO: Implement more() method.
        echo __CLASS__.__FUNCTION__;
    }
}
echo'<hr/>';
//1.判断对象是否遵循接口
$m=new MoreClass();
if($m instanceof InterfaceTest){
    echo'm对象的类遵循了 InterfaceTest 接口';
}
//2.判断对象是某个类的实例
if($m instanceof MoreClass){
    echo'm是 MoreClass 的实例';
}

//类型约束
//1.指定函数的参数，必须为，对象/接口/数组
//2，类型约束不可以使用标量类型 int/string

function testFun(InterfaceMore $obj){
    $obj->demo();
}
testFun($m);

//练习：使用interface 实现多态
//电脑--->不同usb设备具备不同的功能

interface demo{
    public function  a();
}

class usb1 implements demo{
    public function a()
    {
        echo'11';
    }
}
class usb2 implements  demo{
    public  function a()
    {
       echo '22';
    }
}
 class Cumputer{
    static function  link(demo $obj){
         $obj->a();
     }
 }
$usb1=new usb1();
$usb2=new usb2();
echo Cumputer::link($usb1);






































