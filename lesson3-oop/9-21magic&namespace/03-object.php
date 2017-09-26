<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 11:24
 */


//对象的遍历
//对象的比较
//对象的复制
//对象的序列化





//可以像遍历数组一样遍历对象
class Info{
    public $name='aa';
    public  $age=20;
}
$infobj=new Info();
 foreach ($infobj as $key=>$value) {
    echo $key,':',$value,'<br/>';
}

//对象的比较
//==两个对象，同一个类，属性相同
//===同一个对象的两个变量

$info1=new Info();
$info2=new Info();
//克隆相等
if($info1==$info2){
    echo'相等';
}else{
    echo'不相等';
}
$info3=new Info();
//克隆不相等
$info4=$info3;
echo $info3===$info4?'相等':'不相等';














