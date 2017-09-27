<?php
/**
 * @Author: anchen
 * @Date:   2017-08-29 15:48:30
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-29 19:27:00
 */


public static   function _connect()
{
    $host = 'localhost';
    $dbname = 'crm_db1';
    $dbuser = 'root';
    $dbpwd = '123456';
    try {
        $_conn= new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpwd);
        $_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if (!$_conn) {
            exit('数据库调用失败');
        } else {
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $_conn;
}