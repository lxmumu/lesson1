<?php
/**
 * @Author: anchen
 * @Date:   2017-09-16 15:51:49
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-16 16:23:17
 */

/*
php属性的重载,php方法的重载
这几个魔术方法可见性必须设置成public，而且参数不能通过引用来传递


 */
class Test{
    private $data=array();
    public function __set($name,$value){
        echo'设置'.$name.'为'.$value.'<br/>';
        $this->data[$name]=$value;
    }
    public function __get($name){
        echo'获取'.$name.'<br/>';
        // array_key_exists() 函数检查某个数组中是否存在指定的键名，如果键名存在则返回 true，如果键名不存在则返回 false。
        if(array_key_exists($name,$this->data)){
            return $this->data[$name];
        }
    }
    public function __isset($name){
    echo'检测'.$name.'<br/>';
      return isset($this->data[$name]);
    }
    public function __unset($name){
        echo'销毁'.$name.'<br/>';
        unset($this->data[$name]);
    }
}
$t1=new Test;
$t1->a=1;
echo $t1->a;
echo"<hr>";
var_dump(isset($t1->a));
echo"<hr>";
unset($t1->a);
