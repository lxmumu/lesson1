<?php
/**
 * @Author: anchen
 * @Date:   2017-09-19 18:59:02
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 19:05:35
 */
class Test{
    const PI=3.14;
    const COUNTY='中国';
    public function test(){
        return self::PI.'</br>'.
        self::COUNTY.'</br>'.
         static::PI.'<br/>';
    }
}
// echo Test::PI;

$t1=new Test;
echo $t1->test();