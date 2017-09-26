<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 10:59
 */

//随机的颜色
//mt_rand();生成一个随机数
function rangeColor($content){
    return imagecolorallocate($content,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
}
//随机的大小
function rangefont(){
    return mt_rand(20,40);
}
//验证码
//1.通过数组的方式获取
$a=range('a','z');
$b=range('A','Z');
$c=range(0,9);
//array_flip()翻转键值和value值
//$charArr= array_flip(array_merge($a,$b,$c));

//array_rand从数组中随机取一个
//$char=array_rand($charArr);//得到键名，先对内容进行翻转
//var_dump($char);

//通过字符串的方法获取
//array_merge 合并一个或多个数组
$chararr= array_merge($a,$b,$c);
//implode — 将一个一维数组的值转化为字符串
$charStr= implode('',$chararr);
//str_shuffle — 随机打乱一个字符串
$charStr=str_shuffle($charStr);
//var_dump($charStr);
$char =$charStr[0].$charStr[1].$charStr[2].$charStr[3];
//var_dump($char);

$image=imagecreatetruecolor(500,200);

$num=4;
for($i=0;$i<$num;$i++){
    $sub=40;//字体的间距加宽度
    $x=50+$sub*$i;//变化
    $y=50;
    imagettftext($image,rangefont(),mt_rand(-180,180),$x,$y,rangeColor($image),'Lobster-Regular.ttf',$charStr[$i]);
}
//干扰元素
//点
for($i=0;$i<100;$i++){
    imagesetpixel($image,mt_rand(50,200),mt_rand(20,50),rangeColor($image));
}
//线
for($i=0;$i<5;$i++){
    //开始点
    // 结束点
    imageline($image,mt_rand(40,100),mt_rand(20,50),mt_rand(100,200),mt_rand(20,50),rangeColor($image));
}


header('content-type:image/jpeg');
imagejpeg($image);
imagedestroy($image);

