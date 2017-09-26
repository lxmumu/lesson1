<?php
/**
 * @Author: anchen
 * @Date:   2017-09-19 20:09:32
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 20:31:17
 */


interface  iTest{
    public function test();
    public function sayHi($username);
}
//实现接口
class Test1 implements iTest{
    public function test(){
    echo'this is a test<br/>';
    }
    public function sayHi($username){
        echo'sayHi'.$username;
    }
}
$t1= new Test1;
$t1->test();
$t1->sayHi('king');
echo'<hr>';

//实现多个接口
interface iA{
  public function test();
}
interface iB{
 public function test11();
}
interface iC{
 public function test22();
}

class Test2 implements iA,iB,iC{
    public function test(){
        echo'1';
    }
     public function test11(){
        echo'2';
    }
     public function test22(){
        echo'3';
    }
}
$t2= new Test2;
$t2->test();
$t2->test11();
$t2->test22();

//一个类可以继承另一个类，在实现多个接口

class Parent1 {
    public function hello(){
      echo'7';
    }
}

class child1 extends Parent1 implements iA,iB{
 public function test(){
        echo'1';
    }
     public function test11(){
        echo'2';
    }

}
echo'<hr>';
$t3=new child1;
$t3->hello();
$t3->test();
$t3->test11();

//接口可以继承另外的接口，可以继承多个接口
interface iD extends  iA,iB,iC{
  const PI=3.14;
    public function  test4();
}
class Test3 implements iD{
    public function test4(){
      echo'4';
    }
     public function test(){
        echo'1';
    }
     public function test11(){
        echo'2';
    }
     public function test22(){
        echo'3';
    }
}
echo '<hr>';
$t4=new Test3;
$t4->test4();
$t3->test();
$t3->test11();
$t4->test22();
echo iD::PI;
