<?php
/**
 * @Author: anchen
 * @Date:   2017-09-20 21:55:35
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-20 22:00:40
 */
class Person {
    static $obj=null;
    private function __construct(){

    }
    static function getobj(){
        if(is_null(self::$obj))
            self::$obj=new self;
        return self::$obj;
    }
    function __destruct(){
        echo'#######<br/>';
    }
}

$p=Person::getobj();