<?php
/**
 * @Author: anchen
 * @Date:   2017-09-11 10:39:34
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-18 22:36:24
 */
// 类外部通过对象访问属性和方法
// 类内部通过$this访问属性和方法

class Person {

    public $username ='king';
    public $age =12;
    public $sex='男';
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

$p1=new Person;
$p1->personInfo();
var_dump($p1);
echo'<hr>';

// 栈空间段：后进先出
// 堆空间段：
// 代码段：存放可执行文件的操作命令
// 初始化静态段（数据段）：存储程序静态分配的变量