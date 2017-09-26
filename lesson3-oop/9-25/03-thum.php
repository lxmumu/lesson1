<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25
 * Time: 11:22
 */

////缩略图
////创建图片画板
////重采样到第二个画板（输出图像）
////在重采样的过程中，修改的图片的大小（等比例缩放）
//$fileNmae='a.jpeg';
////使用方法得到当前图片的宽和高
//getimagesize — 取得图像大小(会取得图片的具体信息)
//$imageinfo=getimagesize($fileNmae);
//$src_type=$imageinfo['mime'];
////$creatfrom=str_replace('/','createfrom',$src_type);
////echo $creatfrom;
////var_dump($imageinfo);exit;
//
////根据图片创建画板
//$imageJpeg=imagecreatefromjpeg($fileNmae);
//$w=imagesx($imageJpeg);
//$h=imagesy($imageJpeg);
////等比
//$scal=$w/$h;
//$dst_w=100;
//$dst_h=$dst_w/$scal;
//
////空画板
//$dst_content=imagecreatetruecolor(100,100);
////重采样
//imagecopyresampled($dst_content,$imageJpeg,0,0,0,0,$dst_w,$dst_h,$w,$h);
//
//
////与画板功能一样，可以写字
////imagechar($imageJpeg,5,100,50,'H',imagecolorallocatealpha($imageJpeg,10,200,100,50));
//header('content-type:image/jpeg');
//imagejpeg($dst_content);
//imagedestroy($imageJpeg);
//imagedestroy($dst_content);

//练习
//写一个方法，自动的将图片生成三种规格的缩略图 100，300，500
//考虑，用户可能给你的图片不是固定格式的

function Image_thumb($fileName,$dst_w){
    $imageinfo=getimagesize($fileName);
    list($src_w,$src_h)=$imageinfo;
    $src_type=$imageinfo['mime'];
    $createfrom=str_replace('/','createfrom',$src_type);
    $save_image=str_replace('/','',$src_type);
    $src_image=$createfrom($fileName);
    $scal=$src_w/$src_h;
    $dst_h=$dst_w/$scal;
    $dst_content=imagecreatetruecolor($dst_w,$dst_h);
    imagecopyresampled($dst_content,$src_image,0,0,0,0,$dst_w,$dst_h,$src_w,$src_h);
    header("content-type:$save_image");
    imagejpeg($dst_content);
    imagedestroy($src_image);
    imagedestroy($dst_content);

}
Image_thumb('a.jpeg',500);


