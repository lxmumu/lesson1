<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 14:13
 */

//trait (特性)：一种代码的复用机制
//声明一个trait，方式与class声明方式类似
//不可以实例化
trait Common{
    function  helloTriat(){
        echo'helloTriat<br/>';
    }
}
//使用use关键字，在类中使用trait
class TraitClass{
    use Common;
}
class TraitDemo{
    use Common;
}

$a =new TraitClass();
$b = new TraitDemo();
$a->helloTriat();
$b->helloTriat();

//trait优先级的问题
//从父类继承的方法会被trait方法覆盖
//trait方法会被本类中的方法覆盖
class Base{
    public function hello(){
        echo'hello <br/>';
    }
}
trait sayhello{
    public  function  hello(){
        echo 'hello world<br/>';
    }
}

class Helloo extends Base{
    use sayhello;
}
class World extends  Base{
    use sayhello;
    function  hello()
    {
        echo 'say world<br/>';
    }
}

$t =new Helloo();
$p =new World();
$t->hello();// hello world
$p->hello();// say world

//多个trait
trait t1{
    function test(){
       echo't1', __FUNCTION__.'<br/>';
    }
    function demo(){
        echo't1', __FUNCTION__ .'<br/>';
    }
}
trait t2{
    function test(){
        echo't2', __FUNCTION__.'<br/>';
    }
    function demo(){
        echo't2', __FUNCTION__.'<br/>';
    }
}
//使用多个trait时，trait和trait之间的方法存在冲突，需要明确的指出，我们要使用哪个trait中的哪个方法（冲突中的哪一个）
//使用insteadof（instead->代替）
class ClassMore{
    //使用多个trait
    //使用t1的test方法和使用t2的demo的方法
    use t1,t2{
        t1::test insteadof t2;//使用t1的test
        t2::demo insteadof t1;//使用t2的demo
        //同时给t1的demo起个别名
        //as操作符不会对方法进行重命名
        t1::demo as t1demo;
    }
}
$q= new ClassMore();
$q->test();//t1
$q->demo();//t2
$q->t1demo();//t1
// trait 也能够使用 trait
trait A{
    public  function test1(){
        echo'test1';
    }
}
trait B {
    public function test2(){
        echo'test2';
    }
}
trait C{
    use A,B;
}
class D{
use C;
}
$p1=new D;
$p1->test1();
$p1->test2();
echo'<hr>';
//trait 支持抽象方法的使用。
trait Q{
    public  function  sayworld(){
        echo $this->getworlds();
    }
    abstract  public function  getworlds();

}
class myhello{
    use Q;
    private $world;
    public  function  getworlds(){
        return $this->world;
    }
    public  function  setworlds($var){
        $this->world=$var;
    }
}
$t1=new myhello();
 $t1->setworlds('中国');
echo $t1->getworlds();
echo $t1->sayworld();
echo '<hr/>';
//定义静态方法 属性 变量
trait test111{
    public  static function testing(){
        return 'a';
    }
    public  $x=1;
    public  function inc(){
        static $c=0;
        $c=$c+1;
        echo"$c<br/>";
    }
}
class example{
    use test111;

}
 echo example::testing();
$t11=new example();
echo $t11->x;
$t11->inc();
$t11->inc();

//Trait 定义了一个属性后，类就不能定义同样名称的属性，否则会产生 fatal error。 有种情况例外：属性是兼容的（同样的访问可见度、初始默认值）。
trait test11{
    public  $name=true;
    public  $age00=false;
}
class test22{
use test11;
//    public  $name=true;
//    public  $age00=true;
}






