<?php
/**
 * @Author: anchen
 * @Date:   2017-09-16 16:39:30
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-16 17:28:33
 */
// 验证码
//
class Randomstring{
  private $length;
  private $type;
  public function __construct($type=1,$length=4){
    $this->type=$type;
    $this->length=$length;
  }
  //成员方法
  public function getRandomstring(){
   switch($this->type){
    case 1:
    // array_rand — 从数组中随机取出一个或多个单元
    // 第一个参数：输入的数组
    // 第二个参数：指出取出的单元
    // join 别名 implode() implode — 将一个一维数组的值转化为字符串
    // 第一个参数：默认为空的字符串
    // 第二个参数：想要转换的数组
    // 返回一个字符串，其内容为由 glue 分割开的数组的值。
         return  join (array_rand(range(0,9),$this->length));
        break;
    case 2:
    // array_merge — 合并一个或多个数组
    // array_flip — 交换数组中的键和值
        return join(array_rand(array_flip(array_merge(range('a','z'),range('A','Z'))),$this->length));
        break;
    case 3:
         return    join(array_rand(array_flip(array_merge(range
            (0,9),range('a','z'),range('A','Z'))),$this->length));
        break;
     }

   }
}
$p1=new Randomstring(3,5);
 echo $p1->getRandomstring();