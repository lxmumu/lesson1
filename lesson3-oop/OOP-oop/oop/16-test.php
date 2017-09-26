<?php
/**
 * @Author: anchen
 * @Date:   2017-09-18 20:18:21
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 17:20:59
 */


/*
public
protected:在类的内部或者子类中可以访问
private：在当前类中访问到

 */
class A {
    public $public='public';
    protected $protected='protected';
    private $private='private';
    public function testpublic(){
        echo'this is public function...<br/>';
    }
    protected function testprotected(){
        echo'this is protected function...<br/>';
    }
    private function testprivate(){
        echo 'this is private function...<br/>';
    }
    public function test(){
        echo $this->public.'<br/>';
        echo $this->protected.'<br/>';
        echo $this->private.'<br/>';
    }
}
class B extends A {
  public function test1(){
       echo $this->public.'<br/>';
        echo $this->protected.'<br/>';
        // echo $this->private.'<br/>';
        $this->testprotected();
        echo"<hr>";
        echo $this->test();
  }

}

class C extends A{
    public $public='aaa';
    // protected $public='aaa';
    private $private='ccc';
    public function test2(){
       echo $this->public;
       echo $this->private;
      $this->testprotected();
    }
    protected function testprotected(){
        echo"dddd";
    }
}
//当继承时，重写父类的方法或者属性时，子类的可见性一定要比父类的款宽松
$obj=new C;
echo $obj->public;
$obj->test2();
// $bj->testprotected();
// $obj->private;
// $obj=new B;
// echo $obj->public;
// echo"<hr>";
// $obj->test1();
// $obj->testpublic();
// echo $obj->protected;


//$obj=new A;
//echo $obj->public;
//echo "<hr>";
// echo $obj->protected;
// echo $obj->private;
 // $obj->test();
 // $obj->testpublic();
  // $obj->testprotected();