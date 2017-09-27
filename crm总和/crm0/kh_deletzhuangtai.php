<?php
/**
 * @Author: anchen
 * @Date:   2017-08-24 16:00:55
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-25 09:28:21
 */
   $host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   $id =intval($_GET['id']);
   $sql = "DELETE  FROM kh_status WHERE  id = '$id' ";
    $res = $pdo->query($sql);

   if ($res) {
      echo "<script>alert('删除成功')</script>";
      include 'kh_zhuangtai1.php';

   }

} catch (Exception $e){
   echo $e->getMessage();
}
?>

