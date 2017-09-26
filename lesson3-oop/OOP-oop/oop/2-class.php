   <?php
/**
 * @Author: anchen
 * @Date:   2017-09-11 10:21:14
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-16 09:19:58
 */
class Person {

    public $username ='king';
    public $age =12;
    public $sex='男';
//成员方法
    public function eat(){
echo'eat.....';

    }
}
// 通过对象引用名->属性
// 对象用名->方法


//实例化
$p1=new Person;
// var_dump($p1);

echo '用户名'.$p1->username;//用户名king
echo "<hr>";
$p1->eat();

$p1->age=13;
echo $p1->age;
