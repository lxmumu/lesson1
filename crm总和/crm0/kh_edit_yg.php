<?php
/**
 * @Author: anchen
 * @Date:   2017-08-26 10:24:20
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-26 14:55:42
 */

$host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   if (isset($_POST['update'])) {
      $id=intval($_GET['id']);
      $username=$_POST['username'];
      $sex=$_POST['sex'];
      $age =$_POST['age'];
      $tel =$_POST['tel'];
      $email =$_POST['email'];

   }
   // echo'00';
  // print_r($email);exit;
   $sql =  "UPDATE kh_yg SET username='$username',sex='$sex',age='$age',tel='$tel',email='$email'  WHERE id ='$id'";
    $res = $pdo->query($sql);
    // print_r($res);exit;
    echo"<script>alert('修改成功')</script>";
  include 'kh_xiugai.php';
}catch (Exception $e){
    echo $e->getMessage();
}