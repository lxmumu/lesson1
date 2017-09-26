<?php
/**
 * @Author: anchen
 * @Date:   2017-09-19 19:20:25
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 19:42:58
 */


/*
通过abstract关键字定义抽象类，当类中至少有一个方法为抽象爱那个方法的时候、这个类必须定义为抽象类。
抽象类不能直接被实例化，只相当于定义了调用的方式，并没有具体的实现
子类在继承的时候必须实现所有的抽象方法。

子类在实现抽象方法的时候可见性可以和父类相同或者宽松

 */
 abstract class Pet{
    public $name;
    abstract public function eat();
    abstract public function sleep();
    public function test(){
    echo '呼吸';
}
}

class Cat extends Pet{
    public function __construct($name){
        $this->name=$name;
    }
    public function eat(){
        echo $this->name.'is eating';
    }
    public function sleep(){
        echo $this->name.'is sleeping';
    }


}


class Dog extends Pet{
    public function __construct($name){
    $this->name=$name;
    }
    public function eat(){
        echo $this->name.'is eating';
    }
    public function sleep(){
        echo $this->name.'is sleeping';
    }

}

$t1 =new Cat('波斯猫');
$t1->eat();
$t1->sleep();
$t1->test();
echo'<hr>';
$t2 =new Dog('哈士奇');
$t2->test();
$t2->eat();
$t2->sleep();