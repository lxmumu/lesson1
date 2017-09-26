<?php
/**
 * @Author: anchen
 * @Date:   2017-09-23 16:32:23
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-24 15:03:40
 */
  require_once './MySQLDB.class.php';
class Usermodel{
   public  $conf= array(
          "host"=>"localhost",
          "port"=>"3306",
          "user"=>"root",
          "paw"=>"123456",
          "dbname"=>"表名",
            )
    function Getalluser(){
        $db1=MySQLDB::GetDB($this->$conf);
        $sql='select*from student where id=1';
        $result=$db1->GetRows($sql);
        return $num;
    }
    function Getallusercount(){
      $db1=MySQLDB::GetDB($this->$conf);
      $sql="select count(*) from student ";
      $num=$db1->GetOneData($sql);
      return $num;
    }
}