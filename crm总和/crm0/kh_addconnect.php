<?php
/**
 * @Author: anchen
 * @Date:   2017-08-24 22:37:23
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-26 17:50:08
 */
$host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);

      if (isset($_POST['submit'])){
          $connecttitle =$_POST['connect'];
          $next_time =$_POST['next_time'];
          $username =$_POST['username'];
          $connect_type=$_POST['connect_type'];
          $notes = $_POST['notes'];
    if ($connecttitle !=null&&$next_time !=null&&$username!=null&&$connect_type !=null&&$notes != null) {
    $sql ="INSERT INTO kh_connect VALUES (null,'$username',NOW(),'$next_time','$connect_type','$connecttitle','$notes')";
    $res = $pdo->query($sql);
    // var_dump($res);
    if($res!=false){
      sleep(2);
  echo "<script>alert('添加成功,返回查看')</script>";
  include 'kh_lianxijilu.php';
  }else{
    echo "<script>alert('添加失败')</script>";
  }
  }
  }
}catch (Exception $e){
  echo $e->getMessage();
}


