<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 14:21
 */
//属性都是私有的，如何去访问和修改
class  Phone{
    private  $type;
    private  $price;
    private  $color;

    public  function  getType(){
        return '手机类型'.$this->type;
    }
    public  function  setType($type){
        $this->type=$type;
    }


    public  function  getPrice(){
            return '手机价格'.$this->price;
    }
    public  function  setPrice($price){
            $this->price=$price;
    }

    public  function  getColor(){
        return '手机颜色'.$this->color;
    }
    public  function  setColor($color){
        $this->color=$color;
    }
}
$apple=new Phone();
$apple->setPrice('10000');
echo $apple->getPrice();
$apple->setType('iphone X');
echo $apple->getType();
$apple->setColor('香芋色');
echo $apple->getColor();
echo'<hr>';

//使用魔术方法，重载对象的属性
//__get()
//__set()
//当对象外部，想访问不可访问的属性是会自动调用
class Test{
    private $private_var;
    function __get($name){
        echo'访问不可访问的属性'.$name;
        return $this->private_var;
    }
    function  __set($name,$value){
        echo'设置不可访问的属性'.$this->$name=$value;
//        echo $this->$name=$value;
    }
}
$t=new Test;
$t->private_var;//对象去访问不可访问的属性---->触发get()魔术方法
echo'<hr>';
$t->private_var='hahaha<br/>';//对象去修改不可访问的属性--->触发set()魔术方法
 echo $t->private_var;
//访问不存在的属性（也属于不可访问的属性）
//$t->type;
//$t->type='不存在';

//练习：将上面的phone，修改使用__get() __set() 获取和修改私有属性的值

class  Phones{
    private  $type;
    private  $price;
    private  $color;

    public  function __get($name){
        if('type'==$name) {
            return $this->type;
        }elseif('price'==$name){
            return $this->price;
        }else{
            return $this->color;
        }
//echo'<hr>';
//        return $this->$name;

    }
    public  function __set($name,$value){
        if('type'==$name) {
            return $this->type=$value;
        }elseif('price'==$name){
            return $this->price=$value;
        }else{
            return $this->color=$value;
        }
//        echo'<hr>';
//       $this->$name=$value;
    }

}
echo '<hr>';
$apples=new Phones();

$apples->type='iphone X';
$apples->price='8000';
$apples->color='香芋色';
echo $apples->type;
echo $apples->price;
echo $apples->color;












