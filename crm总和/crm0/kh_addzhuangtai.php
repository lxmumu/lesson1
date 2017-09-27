<?php
/**
 * @Author: anchen
 * @Date:   2017-08-26 18:12:13
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-26 18:12:55
 */
 $host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   if (isset($_POST['submit'])){
    $status = $_POST['status'];
    $describe = $_POST['describe'];
    if ($status !=null&&$describe !=null) {
   $sql = "INSERT INTO kh_status (id,status,scontent) VALUES (null,'$status','$describe') ";
   // print_r($sql);exit;
   $res =$pdo->exec($sql);

    echo "<script>alert('插入成功')</script>";
     include "kh_zhuangtai1.php";

}
   else{
     echo "<script>alert('请输入数据')</script>";
   }
}

}catch (Exception $e){
   echo $e->getMessage();
}
?>