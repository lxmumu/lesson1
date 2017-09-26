<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 16:27
 */

namespace Myproject;

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
testFnc();//调用myproject 方法
namespace OtherProject;

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
//就近原则
testFnc();//调用Otherproject的方法




















