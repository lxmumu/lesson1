<?php
/**
 * @Author: anchen
 * @Date:   2017-09-16 11:02:23
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-16 15:28:07
 */

class Person {
       public $test='thia is a test';
       public $username;
       private $age;
       private $salary;
       public function __construct($username='king',$age='12',$salary='123456'){
        echo'我是构造函数';
          $this->username=$username;
          $this->age=$age;
          $this->salary=$salary;

       }
  public function getage(){
    return $this->age-5;
  }
  public function getSalary(){
    return $this->salary-1000;
  }
  public function setSalary($salary){
    return $this->salary=$salary;
  }



}
$king=new Person('li',22,34567);
echo $king->username;
echo $king->getage();
echo "<hr>";
echo $king->getSalary();
echo "<hr>";
$king->setSalary(99999);
echo $king->getSalary();
