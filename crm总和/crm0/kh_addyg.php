<?php
/**
 * @Author: anchen
 * @Date:   2017-08-26 10:06:39
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-26 17:31:05
 */
$host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);

      if (isset($_POST['submit'])){
         $username=$_POST['username'];
         $sex=$_POST['sex'];
         $age=$_POST['age'];
         $tel=$_POST['tel'];
         $email =$_POST['email'];
    if ($username !=null&&$sex !=null&&$age!=null&&$tel !=null&&$email!= null) {
    $sql ="INSERT INTO kh_yg VALUES (null,null,'$username','sex','$age','$tel','$email','null')";
    $res = $pdo->query($sql);
    // var_dump($res);
    if($res!=false){
      sleep(2);
  echo "<script>alert('添加成功')</script>";
  include 'kh_yuangongliebiao.php';
  }else{
    echo "<script>alert('添加失败')</script>";
  }
  }
  }
}catch (Exception $e){
  echo $e->getMessage();
}
