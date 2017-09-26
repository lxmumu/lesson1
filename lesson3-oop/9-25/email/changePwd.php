<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25
 * Time: 16:55
 */
if(isset($_GET['code'])){
    $p_code=$_GET['code'];
    $userid=$_GET['userid'];
    $time=$_GET['time'];
}
session_start();
$s_code=$_SESSION['code'];
$s_user=$_SESSION['userid'];

if($p_code===$s_code&&$userid=$s_user){
    die('修改成功');
}else{
    die('失败');
}

