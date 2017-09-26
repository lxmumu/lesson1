<?php
/**
 * @Author: anchen
 * @Date:   2017-09-21 20:47:54
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-22 11:58:58
 */

abstract class playitem{
    abstract public function play();
}

class vido extends playitem{
    public function play(){
        echo'00';
    }
}
class audio extends playitem{
    public function play(){
        echo'11';
    }
}

class player{
    public function start(playitem $item){
        $item->play();
    }
}
$t1=new player();
$t1->start(new audio());

interface  openfile{
    public function open();
}

class phpstorm implements openfile{
    public function open(){
        echo'00';
    }
}
class submli implements openfile{
    public function open(){
        echo'22';
    }
}

class file{
    static public function fileing( openfile $item){
        $item->open();
    }
}
$p1=new file();
$p1->fileing(new phpstorm());