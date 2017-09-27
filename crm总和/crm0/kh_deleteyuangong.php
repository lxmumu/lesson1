<?php
/**
 * @Author: anchen
 * @Date:   2017-08-24 22:26:06
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-26 09:28:56
 */

   $host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   $id =intval($_GET['id']);
   $sql = "DELETE  FROM kh_yg WHERE  id = '$id' ";
    $res = $pdo->query($sql);

   if ($res) {
      echo "<script>alert('删除成功')</script>";
      include 'kh_yuangongliebiao.php';

   }

} catch (Exception $e){
   echo $e->getMessage();
}
?>