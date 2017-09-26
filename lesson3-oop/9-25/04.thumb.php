<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25
 * Time: 14:34
 */

thum('b.jpeg');

function thum($fileName,$dest='./'){
    //处理文件信息
    $info = getimagesize($fileName);
    //获得大小和mime类型数据
    list($src_w,$src_h)=$info;
    $src_mime_type=$info['mime'];
    //根据mime类型进行函数判断
//    image_type_to_mime_type($src_mime_type);
    $createMethod = str_replace('/','createfrom',$src_mime_type);
    $saveMethod=str_replace('/','',$src_mime_type);
    //设置header
    header("content-type:{$saveMethod}");
    //可变函数
     $src_content=$createMethod($fileName);
   //比例
    $scale= $src_w/$src_h;
    //计算出缩略图的宽高
    $dst_w_500='500';
    $dst_w_300='300';
    $dst_w_100='100';
    $dst_h_500=$dst_w_500/$scale;
    $dst_h_300=$dst_w_300/$scale;
    $dst_h_100=$dst_w_100/$scale;
    //空白画板
    $dst_image_500=imagecreatetruecolor($dst_w_500,$dst_h_500);
    $dst_image_300=imagecreatetruecolor($dst_w_300,$dst_h_300);
    $dst_image_100=imagecreatetruecolor($dst_w_100,$dst_h_100);
    imagecopyresampled($dst_image_500,$src_content,0,0,0,0,$dst_w_500,$dst_h_500,$src_w,$src_h);
    imagecopyresampled($dst_image_300,$src_content,0,0,0,0,$dst_w_300,$dst_h_300,$src_w,$src_h);
    imagecopyresampled($dst_image_100,$src_content,0,0,0,0,$dst_w_100,$dst_h_100,$src_w,$src_h);
     if(!file_exists($dest)){
         mkdir($dest,755,true);
     }
    $randNum=mt_rand(1000,9999);
    $fileName=str_replace('/','.',$src_mime_type);
    $saveMethod($dst_image_500,"{$dest}/{$randNum}_500_{$fileName}");
    $saveMethod($dst_image_300,"{$dest}/{$randNum}_300_{$fileName}");
    $saveMethod($dst_image_100,"{$dest}/{$randNum}_100_{$fileName}");

    imagedestroy($dst_image_500);
    imagedestroy($dst_image_300);
    imagedestroy($dst_image_100);
}