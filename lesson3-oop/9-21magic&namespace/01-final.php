<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 9:23
 */

//final(最终的意思)关键字
//1.final修饰方法，方法不能被覆盖
//2.final修饰类，类不能有子类

//final修饰类
 final class Test{
    final public  function  testFunc(){
        echo 'function';
    }
}
//final修饰的类，不可以被继承
//class Subtext extends Test{
    //final修饰的方法不能被重写/覆盖
//    function  testFunc(){
//
//    }
//}