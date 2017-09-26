<?php
/**
 * @Author: anchen
 * @Date:   2017-09-11 10:56:08
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-11 11:20:49
 */
class Person {

    public $username ='king';
    public $age =12;
    public $sex='男';
    //构造函数，当创建对象的时候首先会调用构造函数，适合初始化数据操作
    public function __construct($username,$age,$sex){
        echo'当新建对象的时候我首先会先被调用';
        $this->username=$username;
        $this->age=$age;
        $this->sex=$sex;
    }
    //析构函数  不能带有参数，析构函数会在对象的所有引用被删除或显示销毁之前会被调用
    //可以通过析构函数释放资源包括释放结果集，关闭链接
    public    function __destruct(){
     echo"say gooodbye to".$this->username;

    }

//成员方法
    public function eat(){
echo'eat.....';

    }
    public function personInfo(){
        echo'用户名:'.$this->username;
        echo'年龄:'.$this->age;
        var_dump($this);
        $this->eat();
    }
}

// $p1=new Person;
// var_dump($p1);
// echo "<hr>";
// $p2=new Person;
// $p2->username='quee';
// $p2->age='20';
// $p2->sex='女';
// var_dump($p2);
$p1 = new Person('king',12,'男');
// var_dump($p1);
$p1->personInfo();
echo "<hr>";

unset($p1);

$p2=new Person('quee',20,'女');
// var_dump($p2);
 $p2->personInfo();
 echo "<hr>";
$p2=null;
 echo'销毁对象</br>';