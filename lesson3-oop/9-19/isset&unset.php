<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 15:54
 */

//isset()检测变量是否设置
//unset()主动销毁变量
class Test{
    private $name='123' ;
    //魔术方法 __isset __unset当使用isset(empty)/unset访问不可访问的属性时调用
    function __isset($name)
    {
      return  isset($this->$name);
//        echo'访问__isset';
    }
    function __unset($name)
    {
        unset($this->$name);
//      echo'访问__unset';
    }
}
$t=new Test();
 var_dump(isset($t->name));//会调用__isset
 var_dump(empty($t->name));//会调用__isset
unset($t->name);//会调用__unset
var_dump(isset($t->name));//会调用__isset
echo'<hr>';
class PropertyTest{
    //重载数据保持的地方
    private $data=array();
    //赋值
    public function __set($name, $value)
    {
        $this->data[$name]=$value;
    }
    //取值
   public function __get($name)
    {
        //值是否存在
//        array_key_exists 检测数组中是否有查找的键值
        if(array_key_exists($name,$this->data)){
            return $this->data[$name];
        }else{
            return null;
        }
    }
    //查看是否设置
   public function __isset($name)
    {
        return isset($this->data[$name]);
    }
    //释放
  public function  __unset($name)
    {
        unset($this->data[$name]);
    }
}
//
$pt=new PropertyTest();
$pt->name='xiaoming';
$pt->age='18';
$pt->sex='男';
echo $pt->name,$pt->age,$pt->sex;




























