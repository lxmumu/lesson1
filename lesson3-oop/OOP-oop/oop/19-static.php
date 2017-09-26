<?php
/**
 * @Author: anchen
 * @Date:   2017-09-18 21:37:30
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-18 22:11:38
 */
 class A{
    public static $static='aaa';
    public static function test1(){
        echo'this-1';
     echo __CLASS__.'<br/>';
    }
    public static function test2(){
        echo'this-2';
        // self::test1();
          static::test1();
         echo static::$static;
    }
 }
 class B  extends A{
    public static function test1(){
        echo'this-1-b';
        echo __CLASS__.'<br/>';
    }
 }

 // B::test1();
 B::test2();

 echo "<hr>";


class foo {
    static public function test() {
        var_dump(get_called_class());
    }
}

class bar extends foo {
}

foo::test();
bar::test();

