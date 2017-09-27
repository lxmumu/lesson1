<?php
/**
 * @Author: anchen
 * @Date:   2017-08-30 19:23:16
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-31 09:48:55
 */
include'login.html';
$host='localhost';
$dbname='crm_db1';
$user ='root';
$pwd='123456';
$pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);

if (isset($_POST['email'])) {
     // include'home.php';
   $email =$_POST['email'];
   $pwd=$_POST['password'];
   // print_r($pwd);exit;

if (strlen($email)>0&&strlen($pwd)>0) {
        $sql = "SELECT * FROM user_info WHERE user_email='{$email}' AND user_pw='{$pwd}'";

 $res=$pdo->query($sql);
 // print_r($res);exit;

 if($res){

 foreach ($res as $key => $value) {

    // var_dump($res);exit;
  if (isset($_POST['autologin'])) {
      //设置cookie
      $timestamp =time();
      $str=$email.$pwd.$timestamp;
      $cookie_str = md5($str);
      setcookie('code',$cookie_str,time()+3600*24*7);
      setcookie('user_id',$value['user_id'],time()+3600*24*7);
       //一般时间戳房数据库
      setcookie('timestamp',$timestamp,time()+3600*24*7);
  }
      //将用户名和用户id保存到session中
      session_start();
      $_SESSION['use_id']=$value['user_id'];
      $_SESSION['use_name']=$value['user_name'];
    }
      sleep(2);
      echo "登录成功";
      header("refresh:1;url=home.php");
      // include '/home.php';
      // echo "00";
    }else{
      // echo "00";
        echo"<script>alert('密码或邮箱不正确')</script>";
    }
}else{
    echo "<script>alert('密码或邮箱不能为空！')</script>";
}
}
else{
  if(isset($_COOKIE['code'])){
    $cookie_code=$_COOKIE['code'];
    $timestamp=$_COOKIE['timestamp'];
    $user_id=$_COOKIE['user_id'];
    $sql="SELECT user_email,user_pw,user_id,user_name FROM user_info WHERE user_id={user_id}";
    $res=$pdo->query($sql);
    if ($res) {
        $email =$value['user_email'];
        $pwd=$value['user_pw'];
        $sql_str=$email.$pwd.$timestamp;
        if ($cookie_code==md5($sql_str)) {
            session_start();
            $_SESSION['user_id']=$value['user_id'];
            $_SESSION['user_name']=$value['user_name'];
            sleep(2);
         echo"<script>alert('自动登录，正在跳转..')</script>";
            include 'home.php';
        }
    }
  }else{
    include_once DIRECTORY_SEPARATOR.'login.html';
}
}