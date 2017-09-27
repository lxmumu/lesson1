<?php
/**
 * @Author: anchen
 * @Date:   2017-08-29 15:01:05
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-31 09:48:31
 */

if (isset($_GET['action'])) {
  $_GET['action']();
}
function zhukongban(){
    include 'index.php';
}

function  kh_info(){
   include'kh_info.php';
}
function  kh_type(){
   include'kh_type.php';
}
function  kh_care(){

  //显示数据-数据库
$sql="SELECT customer_name,care_id,care_theme,care_way,care_time,care_nexttime,care_remark,care_people FROM customer_care  INNER JOIN customer_info  ON customer_care.customer_id = customer_info.customer_id  WHERE customer_care.is_used=1 ORDER BY customer_care.customer_id DESC";
$res=$pao->query($sql);


  //分页功能-根据数据库的数据做分页功能
}
function  kh_source(){
   include'kh_source.php';
}
function  kh_status(){
   include'kh_status.php';
}
function  kh_connect(){
   include'kh_connect.php';
}
function  kh_distribute(){
   include'kh_distribute.php';
}
function  yg_info(){
   include'yg_info.php';
}
function  announce(){

}

