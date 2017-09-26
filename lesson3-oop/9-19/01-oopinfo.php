<?php
/**
 * @Author: anchen
 * @Date:   2017-09-19 09:23:06
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 09:52:26
 */
// 面向对象
// 将所有的事物抽象成对象，更加的符合人类的认知

//对象（具体存在的）
//-你所见的所有事物都是对象，一切皆对象
//-属性（对象的一些特性）
//-方法（对象的一些行为，动作）
//小狗
//属性：毛发，品种，年龄，性别
//方法：跑 吃 叫 睡
//

/*
-类（抽象的）
-同一类对象的描述
-类是由对象抽象出来的
-对象是类的实例
-有了类才有对象
 */

//如何声明类
//class 关键字+类的名字+{}类的声明

//在类中声明：
//成员属性
//成员方法
class Car{
    // public 是访问控制的修饰关键字，public表示公共的
    //成员属性
   var $type;//类型属性
   public $price;//价格属性


   //成员方法
   public function drive(){
    echo'开车';
   }
   public function stop(){
    echo'停车';
   }
}

//实例化对象
//使用new关键字实例化对象（可以有小括号，可以没有）
// $my_car =new Car();
$my_car =new Car;

//如何调用方法，如何查看属性和给属性赋值
//使用->操作符号来调用方法和查看属性，给属性赋值
$my_car->drive();
$my_car->stop();
//对属性赋值
$my_car->type='车';
$my_car->price='1';
echo $my_car->type;
echo $my_car->price;
echo "<hr>";
//练习：根据生活中的对象，声明一个类，包含4个属性，4个方法

class Person{
    public $username;
    public $age;
    public $sex;
    public $salary;
    public function play(){
       echo'玩..<br/>';
    }
    public function sleep(){
        echo'睡..<br/>';
    }
    public function eat(){
        echo'吃..<br/>';
    }
    public function run()
    {
        echo '跑..<br/>';
    }
}
$per =new Person();
echo $per->username='li..<br/>';
echo $per->age='20..<br/>';
echo $per->sex='女..<br/>';
echo $per->salary='99999..<br/>';
$per->play();
$per->sleep();
$per->eat();
$per->run();