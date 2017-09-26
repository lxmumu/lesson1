<?php
/**
 * @Author: anchen
 * @Date:   2017-09-19 20:49:53
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 20:56:11
 */
/*
继承实现多态
接口实现多态

 */
interface USB{
    public function run();
}
class Mouse implements USB{
    public function run(){
        echo '鼠标';
    }
}

class Micro implements USB{
    public function run(){
        echo'麦克风';
    }
}
class Computer {
    public function useUSB ($usbobj){
           $usbobj->run();
    }
}

$t1 = new Computer;
$t1->useUSB(new Mouse);
$t1->useUSB(new Micro);