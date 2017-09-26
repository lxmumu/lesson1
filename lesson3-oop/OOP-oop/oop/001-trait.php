<?php
/**
 * @Author: anchen
 * @Date:   2017-09-20 21:03:07
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-20 21:17:22
 */
// Trait可以看做类的部分实现，可以混入一个或多个现有的PHP类中，其作用有两个：表明类可以做什么；提供模块化实现。Trait是一种代码复用技术
// 使用use关键字。
//
trait Hello{
    public function sayhello(){
        echo'hello';
    }
}
trait world{
    public function sayworld(){
        echo'world';
    }
}

trait myword{
   use Hello,world;
}
class myhelloworld{
    use myword;
    // use Hello,world;
}

$t1=new myhelloworld;
$t1->sayworld();
$t1->sayhello();

echo'<hr>';
trait helloworld{
    public function sayhello(){
        echo 'hello';
    }
}
//修改sayhello的访问控制
class myclass{
    use helloworld{ sayhello as protected;}
}
//// 给方法一个改变了访问控制的别名
// 原版 sayHello 的访问控制则没有发生变化
class MyClass2 {
    use HelloWorld { sayHello as private myPrivateHello; }
}