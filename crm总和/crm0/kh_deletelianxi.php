<?php
/**
 * @Author: anchen
 * @Date:   2017-08-25 11:42:33
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-25 12:03:29
 */

   $host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   $id =intval($_GET['id']);
   $sql = "DELETE  FROM kh_connect WHERE  id = '$id' ";
    $res = $pdo->query($sql);
   if ($res) {
      echo "<script>alert('删除成功')</script>";
      sleep(2);
      // echo "<script>location,reload()</script>";
      include 'kh_lianxijilu.php';
   }
} catch (Exception $e){
   echo $e->getMessage();
}
?>