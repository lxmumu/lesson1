<?php
/**
 * @Author: anchen
 * @Date:   2017-09-19 20:58:59
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 21:58:06
 */
/*
魔术方法
__construct();
__destruct();
__set();
__get();
__toString();输出对象的时候会被自动调用，返回字符串
__invoke();当以调用函数的方式调用对象的时候，会自动触发这个方法
__call();当对象调用一个不可或者不存在访问的方法的时候，自动调用
__callStatic():用静态的方式调用一个不可访问的或者不存在的方法，会自动调用
__clone:克隆对象自动调用
__wakeup():反序列话会被自动调用
__sleep();序列化对象的时候会被自动调用

 */

class Test{
    public$username='king';
    public $money=123456.789;
    public $age=12;
    public$test='this-2';

    public function __toString(){
       echo'对象被输出了，我才自动调用';
       return'hello';
    }

    public function __invoke(){
       print_r (func_get_args());
        echo'当以调用函数的方式调用对象的时候，会自动触发这个方法';
        // var_dump($agr1,$arg2);
    }
     private function testPrivate(){
        echo'this is private';
    }
    public function __call($methodname,$args){
          echo'methodname:'.$methodname;
          print_r($args);
    }
    private static function testPrivateStatic(){
      echo'this-1';
    }
    public static function __callStatic($methodname,$args){
         echo'methodname:'.$methodname;
          print_r($args);
    }
    public function __sleep(){
        echo'序列化';
        return array('username','age');
    }
    public function __wakeup(){
        echo "反序列化";
        echo $this->username='queen';

    }
}

$test=new Test;
echo $test;
$test(10,20,30,'test');
echo'<br/>';
echo $test->noexists(1,2,3,4,5,6);
$test->testPrivate();
echo'<hr>';
Test::testPrivateStatic(123456);
Test::noexistsStatic();
echo'<hr>';
 echo $serializeStr=serialize($test);
 unserialize($serializeStr);