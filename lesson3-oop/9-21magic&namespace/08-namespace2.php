<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 17:00
 */
namespace two;
//多文件使用namespace，第一步导入文件
require_once '08-namespace1.php';
const PI=3.14;
function Fnc(){
    echo 'two',__FUNCTION__;
}
class TestClass{
    function  __construct()
    {
        echo 'two instance';
    }
    function test(){
        echo'00';
    }
}

// \three\Fnc();