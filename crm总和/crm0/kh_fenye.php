<?php
/**
 * @Author: anchen
 * @Date:   2017-08-26 16:15:24
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-28 23:10:45
 */
$host = 'localhost';
$user = 'root';
$pwd = '123456';
$db= 'crm_db';

 $pdo = new pdo("mysql:host=$host;dbname=$db", $user,$pwd);
 $sql = "SELECT count(*) FROM kh_yg";//查询总的行数
 $res =$pdo ->query($sql);
 // print_r($res);exit;
 foreach ($res as  $value) {
    $rowcount = $value[0];//获取总的行数
 }
$pagesize=3;//定义每一页显示几条
$page =@$_GET['page']?$_GET['page']:1;//接收page
$pageNUm =ceil($rowcount/$pagesize);//向上取整，总行数除以显示条数 求总页数
if ($page>=$pageNUm) {
    $page = $pageNUm;//如果页数大于总页数，页数等于总页数
}

 $pagebegin = ($page-1)*$pagesize;//定义从第几条记录开始
 $pr=$page-1;//上一页
 $ne=$page +1;//下一页
//根据id排序，通过limit进行分页，从第几条开始，每页显示长度
 $sql_1="SELECT * FROM kh_yg order by id limit $pagebegin,$pagesize ";
 $res_1 = $pdo->query($sql_1);//->fetchALL(PDO::FETCH_ASSOC);
// print_r($res_1);exit;
 echo"<table style='margin:0 auto;' border='1px' rules:all;>";
      echo "<tr>";
foreach ($res_1 as $key =>$value) {
        if(is_numeric($key)){
         for ($key=0;$key<count($value)/2;$key++){
            // print_r($value[0]);exit;
             echo" <td>$value[$key]</td>";
         }
            echo " <td><a href=''>修改</a></td> ";
             echo " <td><a href=''>删除</a></td> ";
         }
              echo"</tr>";
        }


         echo" <tr>
             <td>
              <a href='kh_fenye.php?page=1'>首页</a>
             <a href='kh_fenye.php?page=$pr'>上一页</a>
             <a href='kh_fenye.php?page=$ne'>下一页</a>
             <a href='kh_fenye.php?page=$pageNUm'>尾页</a></td>
            </tr> ";
         echo"</table>";