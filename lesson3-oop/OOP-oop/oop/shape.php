<?php
/**
 * @Author: anchen
 * @Date:   2017-09-20 22:32:33
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-20 22:36:28
 */

//定义子类必须实现的方法
abstract  class Shape{

    public $name;
    abstract function area();
    abstract function  zhou();
    abstract function view();
    abstract function yan($arr);

}