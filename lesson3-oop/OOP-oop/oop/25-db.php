<?php
/**
 * @Author: anchen
 * @Date:   2017-09-19 20:33:16
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-19 20:42:33
 */
interface iDB{
    public function connect();
    public function insert();
    public function  update();
    public function  delete();
    // public function  select();
    public function  close();
}
class mysql implements iDB{
    public function connect(){
        echo 'mysql数据库连接成功';
    }
    public function insert(){
        echo'插入成功';
    }
    public function update(){
        echo'更新成功';
    }
    public function delete(){
        echo '删除数据成功';
    }
    public function close(){
        echo'关闭成功';
    }
}
class sqlsever implements iDB{

    public function connect(){
        echo 'sqlsever数据库连接成功';
    }
    public function insert(){
        echo'插入成功';
    }
    public function update(){
        echo'更新成功';
    }
    public function delete(){
        echo '删除数据成功';
    }
    public function close(){
        echo'关闭成功';
    }
}

function conn($obj){
    if($obj instanceof iDB){
        $obj->connect();
        $obj->insert();
        $obj->update();
        $obj->delete();
        $obj->close();

    }else{
        echo '操作失败';
    }
}
$mysql=new mysql;
conn($mysql);
echo'<hr>';
$sqlsever=new sqlsever;
conn($sqlsever);