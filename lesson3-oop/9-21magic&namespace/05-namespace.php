<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 15:38
 */
//命名空间定义
//1.为什么有命名空间
//避免类，方法，常量的重名问题
//2.所受命名空间影响的，包含：类，方法，const声明的常量
//定义命名空间：(记住)
//1，命名空间定义的位置必须放在脚本的首行
//2,命名空间的前面不能有任何输出

namespace a;
require_once '05-namespace2.php';
class ClassNamespace{
    function  __construct()
    {
        echo 'new object';
    }
}
function name_fuc(){
    echo'方法';
}
const PI=3.14;

//受影响
//命名空间的使用
//1,非限定名称（相对的）（没有任何前缀的）
//2,限定名称（相对的）（子命名空间作为前缀）
//3.完全限定名称（绝对的）（\全局空间）

new b\ClassNamespace;//解析为：\a\b\ClassNamespace()
new \a\ClassNamespace();//ClassNamespace()
\a\name_fuc();//name_fuc
echo \a\PI;//PI
//使用namespace关键字，代替命名空间
echo namespace\PI;//PI
//通过常量__NAMESPACE__获取我们的命名空间
echo __NAMESPACE__;