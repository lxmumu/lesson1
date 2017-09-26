<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25
 * Time: 10:03
 */
if(isset($_POST['varcode'])){
    session_start();
    $sessioncode=$_SESSION['varcode'];
    $postcode=trim(strtolower($_POST['varcode']));
    $sessioncode=trim(strtolower($sessioncode));
    if($postcode===$sessioncode){
        echo'输入正确';
    }else{
        echo'输入错误';
    }
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
</head>
<body>
<form action="02-form-varcode.php" method="post">
    <label>用户名：</label>
    <input type="text" name="user">
    <br/>
    <label>密码：</label>
    <input type="text" name="pwd">
    <br/>
    <label>验证码：</label>
    <input type="text" name="varcode">
    <a href="javascript:void(0)" onclick="document.getElementById('img').src='01-vertify.php?'+Math.random()"><image  id='img'src="01-vertify.php">看不清，换一张</a>
    <br/>
    <input type="submit" value="登录">
</form>
</body>
</html>
