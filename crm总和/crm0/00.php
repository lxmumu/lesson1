<?php
/**
 * @Author: anchen
 * @Date:   2017-08-28 14:19:50
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-28 14:20:11
 */

$host = 'localhost';
$user = 'root';
$psd  ='123456';

$conn = new pdo("mysql:host=$host;dbname=test",$user,$psd);
       $sq = "select count(*) from test_table";
       $r = $conn->query($sq);
       foreach ($r as  $va) {
           $rowtot = $va[0];
       }

        $rownum = 5;
        $page=$_GET['p']?$_GET['p']:1;

        $pagenum = ceil($rowtot/$rownum);


        if ($page>=$pagenum) {
            $page=$pagenum;
        }

        $pagebegin =($page-1)*$rownum;
        $pr=$page-1;
        $ne=$page+1;


        $sql = "select  * from test_table order by id limit $pagebegin,$rownum";

        $rs = $conn->query($sql)->fetchALL(PDO::FETCH_ASSOC);

       echo"<table style='margin:0 auto;' border='1px' rules:all;>";

    foreach ($rs as $value) {
        $aa = $value;
        echo "<tr>";

        foreach ($aa as $val) {
         echo "<td>";
         echo $val;
         echo"</td>";
         }

        echo " <td><a href=''>修改</a></td> ";
        echo " <td><a href=''>删除</a></td> ";

         echo"</tr>";
    }
         echo" <tr>
             <td><a href='fenyelianxi.php?p=$pr'>上一页</a>
             <a href='fenyelianxi.php?p=$ne'>下一页</a></td>
            </tr> ";
         echo"</table>";
