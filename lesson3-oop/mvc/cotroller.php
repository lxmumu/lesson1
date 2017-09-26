<?php
/**
 * @Author: anchen
 * @Date:   2017-09-23 15:50:47
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-23 16:00:08
 */
  require_once './model.php';

  if(!empty($_GET['type'])&& $_GET['type']=='2'){
    $obj1=new DateTimeModel();
     $t1=$obj1->GetDate();
  }elseif (!empty($_GET['type'])&& $_GET['type']=='3') {
    $obj1=new DateTimeModel();
     $t1=$obj1->GetDateTime();
  }else{
    $obj1=new DateTimeModel();
    $t1=$obj1->GetTime();
  }
   include'./view.html';
 ?>
