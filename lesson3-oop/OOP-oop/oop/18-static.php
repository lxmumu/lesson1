<?php
/**
 * @Author: anchen
 * @Date:   2017-09-18 21:03:09
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-18 21:35:51
 */

// function test(){

//  //静态变量
//     static $i=1;
//     echo $i.'<br/>';
//     $i++;
// }
// test();
// test();
// test();
//
/*
通过static关键字修饰类中的成员属性和成员方法是静态的
类名|self::属性名
类名|self::方法名
在类内部不能通过$this引用静态属性和方法，需要通过self来引用
 */
class Test{
    static public $count=0;
    public $test=123;
    public function __construct(){
        // Test::$count++;
        // echo Test::$count;
        self::$count++;
    }
   static public function getcount(){
    // echo $this->test;
        // echo self::$test;
        return self::$count;
    }
static public function test1(){
    echo 'this-1';
}
public function test2(){
    self::test1();
    echo "<br>";
    echo'this-2';
}
}
// echo Test::$count;
// $t1=new Test;
// $t2=new Test;
// echo Test::$count;
// echo Test::getcount();
// echo"<hr>";
//静态属性是共享的
// echo $t1->getcount();
// Test::test1();
$t1=new Test;
echo $t1->test2();
