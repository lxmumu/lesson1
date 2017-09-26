<?php
/**
 * @Author: anchen
 * @Date:   2017-09-18 19:19:04
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-18 19:32:43
 */
class pet{
    public $name;
    public function __construct($name){
        echo 'pet类构造函数';
        $this->name=$name;
    }
    public function eat(){
        echo'eat';
    }
    public function sleep(){
        echo'sleep';
    }

}
class cat extends pet{
    public $name;
    public function __construct($name){
        echo'cat构造函数';
        $this->name=$name;
    }
    public function zhuoapzi(){
        echo $this->name=$name.'正在捉';
    }
}

class dog extends pet{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function naohuozi(){
        echo $this->name=$name.'正在拿';
    }
}

$cat=new cat ('波斯猫');
 echo $cat->name;
 $cat->eat();
 echo"<hr>";
 $cat->sleep();
 // $dog =new dog;