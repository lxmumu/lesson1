<?php  include "common/header.html"; ?>
    <div class="col-md-9">
    <h2>客户状态</h2><hr />
     <div class="panel panel-default">
  <div class="panel-heading"> 客户状态列表
  <button class="btn btn-default "><a href="kh_zhuangtai2.php">添加</a></button>

  </div>
  <div class="panel-body">

        <table  class="table table-bordered"" >
        <tr>
            <th>序号</th>
            <th>客户状态</th>
            <th>状态描述</th>
            <th>操作</th>

        </tr>
 <?php
        // include_once 'link.php';
  $host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   $sql = "SELECT * FROM  kh_status";
   $res=$pdo->query($sql);
       echo "<tr>";
  foreach ( $res as $key => $value ){
         // print_r($value);
     if(is_numeric($key)){
        for ($key=0; $key <count($value)/2 ; $key++) {
            echo "<td>$value[$key]</td>";
        }
        $id=$value['id'];
        // print_r($id);
        echo "<td><a href='kh_deletzhuangtai.php?id=$id'>删除</a></td>";
      }
       echo "</tr>";
    }
    }catch (Exception $e){
       echo $e ->getMessage();
    }
?>
   </table>
  <div class="row ">
                <div class="col-md-6 ">
             <?php
                $rs = $res->rowCount();
                echo "<span>共有".$rs."条记录，当前1/".ceil($rs/3)."页</span>";
                ?>
                </div>
                <div class="col-md-6" style="float: right">
                    <ul class="pager">
                        <li><a href="#">首页</a></li>
                        <li><a href="#">上一页</a></li>
                        <li><a href="#">下一页</a></li>
                        <li><a href="#">尾页</a></li>

                    </ul>
                </div>
            </div>

  </div>
</div>
    </div>
</div>

</div>
    </body>
</html>