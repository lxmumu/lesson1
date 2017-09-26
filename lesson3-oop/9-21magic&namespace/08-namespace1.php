<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 17:00
 */
namespace one;

require_once'08-namespace2.php';
function Fnc(){
echo 'one',__FUNCTION__;
}
//use two\TestClass;//等价于 use two/TestClass as TestClass;
//导入类
use two\TestClass as TT;
//导入方法
use function two\Fnc as twofnc;
//导入常量

use const two\PI;
echo PI;
twofnc();
new TT();
