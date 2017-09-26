<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 10:55
 */
//类常量
//const PI=3.14
//常量的编码规范：一般使用全大写定义常量
class TestConst{
    //定义一个类常量
    const const_var='const';
    //如何在类的内部使用常量：self::
    function show(){
        //4.static可以访问常量
//        echo '我是常量',self::const_var;
        echo '我是常量',static::const_var;
    }
}
//2，如何在外部使用类常量:类名+常量
echo TestConst::const_var;
$t1=new TestConst();
$t1->show();


//3.对象可以直接调用常量么？
//不可以。
