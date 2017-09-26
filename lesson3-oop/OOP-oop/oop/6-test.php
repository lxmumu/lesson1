<?php
/**
 * @Author: anchen
 * @Date:   2017-09-16 10:42:20
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-16 10:56:14
 */
class Computer {
  private $price=2000;
  private function buyPro(){
    echo'我买了装电脑的材料<br/>';
  }
  private function zuhe(){
    echo'组合电脑<br/>';
  }
  private function baozhuang(){
    echo'包装电脑<br/>';
  }

 public function test(){
    echo $this->buyPro();
    echo $this->zuhe();
    echo $this->baozhuang();
 }
 public function getprice(){
    return $this->price*3;
 }
}

$p1 =new Computer;
$p1->test();
// echo $p1->price;
 echo $p1->getprice();