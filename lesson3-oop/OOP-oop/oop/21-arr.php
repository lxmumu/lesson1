<?php
/**
 * @Author: anchen
 * @Date:   2017-09-19 19:06:18
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 19:18:55
 */
//检测变量是否为类的实例
// is_a/instanceof/is_a
 class A{
    public function test(){
        echo __CLASS__.'当前<br/>';
        echo get_class($this).'<br/>';
    }
 }
 class B extends A{

 }
 $a=new A;
 var_dump(is_a($a,'A'));
 $b= new B;
var_dump(is_a($b,'A'));
var_dump(is_a($b,'B'));
var_dump($b instanceof B);

// get_class(object);返回对象的类名
echo get_class($a);
echo get_class($b);
echo"<hr>";
$a->test();
$b->test();
echo'<hr>';
// get_parent_class(object);返回类或者对象的父类名
echo get_parent_class($b);
// is_subclass_of(object, class_name, allow_string):检测一个对象是否是另外一个类的子类
var_dump(is_subclass_of($b,'A'));
var_dump(is_subclass_of('B','A'));