<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 10:01
 */

//gd库的基本使用
//生成画板
//选择颜色和画笔
//开始画
//告诉浏览器以什么样的格式展示图片
//销毁画板

$w=500;
$h=200;
//画板
$imageContent=imagecreatetruecolor($w,$h);
imagefill($imageContent,0,0,imagecolorallocate($imageContent,255,255,255));
//选择颜色
$red=imagecolorallocate($imageContent,255,100,100);
 //开始画,画一个字符
//imagechar($imageContent,30,50,50,'H',$red);

//画一句话
imagestring($imageContent,100,100,100,'loving cat',$red);
//画一条线
imageline($imageContent,50,150,150,150,$red);
//使用字体
imagettftext($imageContent,30,30,50,100 ,$red,'Lobster-Regular.ttf','loving-cat');
//告诉浏览器,以jpeg的方式显示画
header('content-type:image/jpeg');
//输出画的东西
imagejpeg($imageContent);
//imagepng();
//imagegif();

//销毁画板
imagedestroy($imageContent);