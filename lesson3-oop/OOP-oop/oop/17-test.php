<?php
/**
 * @Author: anchen
 * @Date:   2017-09-18 20:58:23
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-18 21:01:38
 */
class a{
    public function test1(){
        echo'this-1';
    }
}
class b extends a {
    public function test2(){
        echo'this-2';
    }
}
class c extends b {
    public function test3(){
        echo'this-3';
    }
}

$obj=new c;
$obj->test3();
$obj->test2();
$obj->test1();