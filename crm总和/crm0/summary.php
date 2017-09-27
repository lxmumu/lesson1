<?php
/**
 * @Author: anchen
 * @Date:   2017-08-28 21:49:34
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-28 22:51:10
 */
//定义数据库函数
function  _connect(){
$host ='localhost';
$dbname='crm_db';
$user = 'root';
$pwd ='123456';
try{
$conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
// 设置 Error 处理的模式  发生错误时抛出一个PDOException
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 if(!$conn){
    exit('数据库调用失败');
 }else{

 }

}catch (Exception $e){
    echo $e ->getMessage;
}

return $conn;
}
// 需要时调用函数
$_conne = _connect();

//插入
if (isset($_POST['submit'])) {
//接收参数
$name=$_POST['name'];
..
//判断是否为空
if ($name !=null || ..) {
//插入语句 要与表内值顺序一样
$sql = "INSERT INTO 表名() VALUES ('$name',..)"
$res ->$_conn->query($sql);
echo "<script>alert('插入成功')</script>"
include'跳转页面';
}else{
   echo "<script>alert('插入失败')</script>"
}
}

//删除
$_conn = _connect();
//删除需要获取id
$sql = "SELECT * FROM 表名";
$res = $_conn ->query($sql);
foreach($res as $value){
 $id =$value['id'];
}
$id=intval($_GET['id']);
$sql_1 = "DELETE * FROM 表名 WHERE id=$id";
$res_1 = $_conn->query($sql_1);
if($res_1){
    echo "<script>alert('删除成功')</script>"
    include '..';
}else{
    ...
}

//编辑
// 获取id 两次
$_conn =_connect();
$sql = "SELECT * FROM 表名";
$res = $_conn ->query($sql);
foreach($res as $value){
 $id =$value['id'];
}
?>
....id=$id
<?php
$_conn =_connect();
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql = "SELECT * FROM 表名 WHERE  id=$id";
    $res = $_conn->query($sql);
    foreach ($res as $value) {
      $name = $value['name'];
      $id=$value['id'];
      ....
    }
}
//把得到的值赋值给对应的input 的value；
//id = $id
?>
<?php
$_conn =_connect();
if (isset($_POST['submit'])) {
  $id=intval($_GET['id']);
  $name =$_POST['name'];
  ....

$sql = "UPDATE 表名 SET username = '$name',...";
$res =$_conn ->query($sql);
echo "<script>alert('编辑成功')</script>";
include '';
}else{
    ..
}


?>