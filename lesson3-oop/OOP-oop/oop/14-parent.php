<?php
/**
 * @Author: anchen
 * @Date:   2017-09-18 19:33:08
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-18 20:11:22
 */
class Person{

    public $username;
    public $age;
    public function __construct($username,$age){
        $this->username=$username;
        $this->age=$age;
        echo'Person类构造类函数';
    }
    public function getinfo(){
        return '用户名:'.$this->username.'__年龄'.$this->age;
    }

    // final 关键字代表的是最终的，不能被重写或者重载；
    //PHP 5 新增了一个 final 关键字。如果父类中的方法被声明为 final，则子类无法覆盖该方法。如果一个类被声明为 final，则不能被继承。

     final   public function test(){
        echo'女神';
    }
}


class Student extends Person{
    // public $username;
    // public $age;
    public $school;
    public function __construct($username,$age,$school){
        // $this->username=$username;
        // $this->age=$age;
        parent::__construct($username,$age);
        $this->school=$school;
        echo'student构造函数';
    }
    public function study(){
        return $this->username.'在'.$this->school.'上学';
    }
    public function getinfo(){
        // return '用户名'.$this->username.'年龄'.$this->age.'学校'.$this->school;
        $info=parent::getinfo();
        $info.='__学校'.$this->school;
        return $info;
    }
}


 class teacher extends Person{
    public $course;
    public function __construct($username,$age,$course){
        parent::__construct($username,$age);
        $this->course=$course;
        echo'teacher构造函数';
    }
    public function getinfo(){

        $info=parent::getinfo();
        $info.='所教课程'.$this->course;
        return $info;
    }
  // public function test(){
  //       echo'可以重写么';
  //   }
 }



$stu1=new student('kinf',12,'beida');
echo $stu1->study();
echo"<hr>";
echo $stu1->getinfo();
echo"<hr>";
$teacher=new teacher('queen',12,'php');
echo $teacher->getinfo();
echo "<hr>";
echo $teacher->test();