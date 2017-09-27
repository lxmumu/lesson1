<?php
/**
 * @Author: anchen
 * @Date:   2017-08-23 22:16:03
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-25 18:03:36
 */
 $host = 'localhost';
 $user = 'root';
 $pwd = '123456';
 $db ='crm_db';

try{
    $pdo = new PDO ("mysql:host=$host;dbname=$db",$user,$pwd);

       if (isset($_POST['loginsubmit'])) {
          $email = $_POST['email'];
          $pwd = $_POST['pwd'];
          // print_r($email);
      $sql = "SELECT * FROM kh_yg ";
      // var_dump($sql);exit;
      $row = $pdo ->query($sql);
        // print_r($row);exit;
      if ($row) {
        foreach ($row as $value) {
          // print_r($value);
         $manage =$value['manage'];
         // print_r($manage);exit;
         if($manage==1){
          $res_e=$value['email'];
         // print_r ($res_e);
         // print_r($email);
         $res_p=$value['password'];
         // print_r($res_p);
         // exit;
         if($email==$res_e &&$pwd==$res_p){
          echo "<script>alert('登陆成功')</script>";
          include 'kh_zhukongban.php';
      }else{
        echo "<script>alert('密码或邮箱错误')</script>";
        include 'login.php';
      }
         // }else{
         //  echo"<script>alert('您没有权限')</script>";
         }
       }
        }

   }
   $pdo = null;
}catch (Exception $e){
    echo $e -> getMessage();
   }







