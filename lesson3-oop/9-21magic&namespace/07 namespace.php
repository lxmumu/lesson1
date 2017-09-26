<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 16:38
 */
//全局代码必须写在 namespace{}里面
namespace{
    //调用Myproject空间的testFnc方法；
//    \Myproject\testFnc();
    //因为全局空间里面没有testFnc()方法
    //testFnc();//\testFnc()
    function hello(){
        echo'全局的hello';
    }
    const TT='全局的常量';
}

namespace Myproject{
    const PI=3.14;

    function testFnc(){
        echo 'myproject function';
    }
    class TestClass{
        function  __construct()
        {
            echo 'myproject class<br/>';
        }
    }
    //后备全局函数（会用）
    //对于函数和常量来说如果当前命名空间不存在该函数，php会退而使用全局空间中的函    数或者常量（不包含类）
    hello();
    echo TT;
}
namespace OtherProject{
    const PI=3.141;

    function testFnc(){
        echo 'Otherproject function';
    }
    class TestClass{
        function  __construct()
        {
            echo 'Otherproject class<br/>';
        }
    }
}




