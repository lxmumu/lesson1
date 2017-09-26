<?php
/**
 * @Author: anchen
 * @Date:   2017-09-18 17:45:23
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-18 19:16:38
 */
/*
继承性
ChildClass extends ParentClass{

}
注意：
php是单继承
代码高可重用性
代码的高可扩展性
父类——基类——超类
子类——派生类——扩展类
 */
class Person {
    public $username ;
    public $age;
    public function __construct($username,$age){
        echo'构造函数';
        $this->username=$username;
        $this->age=$age;
    }
    public function getinfo(){
        return '用户名:'.$this->username.'————年龄'.'$this->age'.'<br/>';
    }
}
 class student extends Person{
    public $school='beida';
    public function study(){
        return $this->username.'studying<br/>';
    }

 }
 class teacher extends Person{
  public $salary='123456';
  public function teaching(){
    return $this->username.'teaching<br/>';
  }
 }

$stu1=new student ('queen',20);
echo $stu1->username;
echo $stu1->age;
echo"<hr>";
$teacher=new teacher('king',30);
 echo $teacher->getinfo();
echo $stu1->study();
echo"<hr>";
echo $teacher->teaching();
echo $stu1->school;
