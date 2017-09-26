<?php
/**
 * @Author: anchen
 * @Date:   2017-09-16 10:21:26
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-16 10:41:51
 */
// 封装性
// 1,访问修饰符
// var
// public :公有的
// protected :受保护的
// private:私有的
class Person{
    public $username='king';
    protected $age=12;
    private $salary =1234567;

    public function say(){
        echo'hello </br>';
    }
    protected function makemoney(){
        echo '赚钱..</br>';
    }
    private function active(){
        echo'active...</br>';
    }

    public function test(){
      echo'this is a test <br/>';
      echo $this->age.'<br/>';
      echo $this->salary.'<br/>';

    }
}
$p1=new Person;
echo '用户名'.$p1->username;
// echo '年龄'.$p1->age;
// Fatal error: Cannot access protected property Person::$age in D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\lesson2\oop\5-test.php on line 30
$p1->test();