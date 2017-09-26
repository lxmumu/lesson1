<?php
/**
 * @Author: anchen
 * @Date:   2017-09-16 14:44:01
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-22 22:16:40
 */

/*
__isset():当在类的外部对私有的，受保护的，或者未定义的成员属性进行isset()或者empty()时，被调用
__unset():当在当在类的外部对私有的，受保护的，或者未定义的成员属性进行unset()操作时自动触发

 */

class Person{
  private $username;
  private $age;
  private$salary;
  //初始化
  public function __construct($username='king',$age='20',$salary='9999'){
   $this->username=$username;
   $this->age=$age;
   $this->salary=$salary;
  }
  //方法
  public function __get($var){
    echo'读取调用';
  if('username'==$var){
    return $this->username;
  }
  if('age'==$var){
    return $this->age-10;
  }
  if('salary'==$salary){
    return 'this is a salary';
  }

  }

  public function __set($key,$var){
    echo"赋值调用";
    if('username'==$key){
        $this->$key=$var;
    }
    if('age'==$key){
        if($var>1&&$var<100){
            $this->age=$var;
        }else{
            echo'非法年龄';
        }
    }
    if('salary'==$key){
        echo '非法操作';
    }
  }
   public function __isset($key){
    echo'当在类的外部对私有的，受保护的，或者未定义的成员属性进行isset()或者empty()时，被调用';
    return isset($this->$key);
  }
  public function __unset($key){
    echo'当在当在类的外部对私有的，受保护的，或者未定义的成员属性进行unset()操作时自动触发';
    unset($this->$key);
  }
}

$p1=new Person;
// echo $p1->username;
// echo"<hr>";
// $p1->username='queen';
// echo $p1->username;
// echo "<hr>";
// echo $p1->age;
// echo"<hr>";
// $p1->age=120;
// echo"<hr>";
// $p1->salary=10000;
// echo"<hr>";
// var_dump( isset($p1->salary));
// echo "<br>";
// var_dump(isset($p1->test) );
// echo isset($p1->username);
// echo"<br>";
var_dump(empty($p1->username));
// unset($p1->usename);
// echo'<hr>';
// unset($p1->test);