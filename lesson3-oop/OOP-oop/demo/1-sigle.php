<?php
/**
 * @Author: anchen
 * @Date:   2017-09-25 20:56:09
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-25 21:10:31
 */


//单例模式的要点
//一是某个类只能有一个实例；
// 二是它必须自行创建这个实例；
// 三是它必须自行向整个系统提供这个实例。
// * 1. $_instance 必须声明为静态的私有变量
// * 2. 构造函数和克隆函数必须声明为私有的,这是为了防止外部程序 new 类从而失去单例模式的意义
// * 3. getInstance()方法必须声明为公有的,必须调用此方法以返回唯一实例的一个引用
// * 4. ::操作符只能访问静态变量或静态函数
// * 5. PHP的单例模式是相对而言的,因为PHP的解释运行机制使得每个PHP页面被解释执行后，所有的相关资源都会被回收。
class Db{
    static private $_instance =null;
    private function __construct(){
        echo'this is a test';
    }
    private function _clone(){};
    static public function getInstance(){
        if(self::$_instance === null){
            self::$_instance=new self();
        }
        //self::$_instance _instanceof self
        return self::$_instance;
    }
}