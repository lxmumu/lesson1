<?php
/**
 * @Author: anchen
 * @Date:   2017-09-16 11:52:05
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-16 15:11:16
 */
/*
魔术方法:
__construct()/__destruct();
__set()/__get()/__isset()/__unset();
__set():在类外部对私有的或者受保护的或者未定义的成员进行赋值的时候会自动调用
__get():在类的外部对私有的或者受保护的或者未定义的成员属性进行读取时会在动调用
*/
class Test{
    public $publicVar ='public Val';
    protected $protectedVar='procted Val';
    private $privateVar='private val';
    public function __set($propertyName,$propertyVal){
        echo'在类外部对私有的或者受保护的或者未定义的成员进行赋值的时候会自动调用000 </br>';
          $this->$propertyName=$propertyVal;
    }
   public  function __get($propertyName){
    echo'在类的外部对私有的或者受保护的或者未定义的成员属性进行读取时会在动调用1111<br/>';
          return $this->$propertyName;
   }


}
$t1=new Test;
echo $t1->publicVar;
echo "<hr>";
echo $t1->publicVar=11111111;
echo $t1->publicVar;
echo "<hr>";
 $t1->protectedVar=22;
 echo $t1->protectedVar;
 echo"<hr>";
 echo $t1->privateVar;


