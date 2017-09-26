<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25
 * Time: 15:08
 */
//水印：文字水印，图片水印
$image=imagecreatefromjpeg('a.jpeg');
//2，在图片上写字，选择半透明的颜色
imagettftext($image,50,0,50,50,imagecolorallocatealpha($image,100,0,0,50),'impact.ttf','loving-cat');
//图片的水印
$logo=imagecreatefrompng('c.png');
//画板和画板的融合
imagecopymerge($image,$logo,0,0,0,0,imagesx($logo),imagesy($logo),10);
header('content-type:image/png');
imagepng($image);
imagedestroy($image);