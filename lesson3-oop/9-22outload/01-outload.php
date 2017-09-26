<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 9:14
 */

//类和接口都可以使用自动加载类，加载
//spl_autoload_register 方法用来注册自动加载器
//写法1：匿名函数
spl_autoload_register(function ($classname){
    echo '需要加载',$classname.'<br/>';
    echo'开始引入文件',$classname.'.php';
   require_once $classname.'.php';
});

//写法2：声明一个函数作为加载器
//spl_autoload_register(my_autoload());
//function my_autoload($className){
//    echo '需要加载',$className;
//}

//如果使用命名空间，文件的文档结构也要按照编码规范来组织
//如果不按照编码规范组织，就无法自动的自动找到需要导入的文件
 new classtest1();
new classtest2();
