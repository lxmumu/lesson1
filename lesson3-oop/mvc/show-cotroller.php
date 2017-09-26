<?php
/**
 * @Author: anchen
 * @Date:   2017-09-23 16:30:53
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-24 15:28:03
 */
$id=$_GET['id'];
require_once './show-model.php';
$obj1=new Usermodel();
$user_data=$obj->Getalluser();
include 'show-view.php';