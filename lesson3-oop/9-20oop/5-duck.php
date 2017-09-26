<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 14:37
 */
//策略模式
//飞的接口
interface FlyBehavior{
 public  function Fly();
}
//叫的接口
interface QuackBehavior{
    public function Quack();
}
//飞行类
class FlyWithWings implements  FlyBehavior{
    public  function  Fly()
    {
        echo'会飞';
    }
}
class FlyNoWay implements  FlyBehavior{
    public  function  Fly()
    {
        echo'不会飞';
    }
}

//叫类
class Quacking implements QuackBehavior{
    public  function Quack()
    {
      echo'呱呱叫';
    }
}
class Squeak implements  QuackBehavior{
    public  function  Quack()
    {
       echo'吱吱叫';
    }
}
class MuteQuack implements  QuackBehavior{
    public  function  Quack()
    {
        echo'不会叫';
    }
}



//超类
abstract class Duck{
    public $flyBehavior;
    public $quackBehavior;
   function performFly(){
    $this->flyBehavior->Fly();
   }
    function performQuack(){
    $this->quackBehavior->Quack();
    }
    function swim(){
        echo '会游泳';
    }
    function setFlyOption(FlyBehavior $option){
        $this->flyBehavior=$option;
    }
    function setQuackOption(QuackBehavior $option){
        $this->quackBehavior=$option;
    }

    abstract  function display();
}
//绿色鸭子
class MallardDuck extends Duck{
    function __construct()
    {
        $this->flyBehavior=new FlyWithWings();
         $this->quackBehavior=new Squeak();
    }

    public function  display()
    {
      echo'绿色的鸭子';
    }
}
//红色的鸭子
class RedheadDuck extends Duck{
    function __construct()
    {
        $this->flyBehavior=new FlyWithWings();
        $this->quackBehavior=new Squeak();
    }
    public function  display()
    {
       echo'红色的鸭子';
    }
}
//橡皮鸭
class RubberDuck extends Duck{
    function __construct()
    {
        $this->flyBehavior=new FlyWithWings();
        $this->quackBehavior=new MuteQuack();
    }
    public function  display()
    {
      echo'橡皮鸭';
    }
}
//木头鸭
class DecoyDuck  extends Duck{
    function __construct()
    {
        $this->flyBehavior=new FlyNoWay();
        $this->quackBehavior=new MuteQuack();
    }
    public  function display()
    {
        echo'木头鸭';
    }
}

$red=new RedheadDuck();
$red->setFlyOption(new FlyNoWay() );
$red->performFly();
$red->performQuack();