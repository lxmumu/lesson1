<?php
/**
 * @Author: anchen
 * @Date:   2017-09-19 21:34:05
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 21:42:04
 */
class wo{
    public $username='king';
    public function say(){
        echo'hello'.$this->username.'<br/>';
    }

public function __clone(){
    echo'我被复制了';
    $this->username='kkkk';
}

}
$t1=new wo;
 echo $t1->username;
 $t1->say();
 // $c1=$t1;
// echo  $c1->username;
// echo $c1->usename='queen';
// echo $t1->usename;
echo'<hr>';
$c2=clone $t1;
echo $c2->username;
$c2->say();
$c2->username='li';
echo $t1->username;
echo $c2->username;