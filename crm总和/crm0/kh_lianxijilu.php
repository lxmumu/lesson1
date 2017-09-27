<?php  include "common/header.html"; ?>

    <div class="col-md-9">
    <h2>联系记录表</h2><hr />
     <div class="panel panel-default">
  <div class="panel-heading"> 联系记录列表
  <button class="btn btn-default "><a href="kh_tianjialianxi.php" onclick="confirm('是否确定添加？')">添加</a></button>
  </div>
  <div class="panel-body">
   <table  class="table table-bordered" >
        <tr>
            <th>#</th>
            <th>客户</th>
            <th>联系时间</th>
            <th>下次联系时间</th>
            <th>联系类型</th>
            <th>联系主题</th>
            <th>备注</th>
            <th>操作</th>
        </tr>
            <?php
    $host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   $sql = "SELECT * FROM  kh_connect";
   $rs = $pdo->query($sql);
       echo "<tr>";
    foreach ( $rs as $key => $value ){
         // print_r($value);
     if(is_numeric($key)){
        for ($key=0; $key <count($value)/2 ; $key++) {
            echo "<td>$value[$key]</td>";
        }
         $id_t =  $value['id'];
          echo "<td><a href='kh_deletelianxi.php?id= $id_t'>删除</a><br>
          </td>";
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
                $res = $rs->rowCount();
                echo "<span>共有".$res."条记录，当前1/".ceil($res/3)."页</span>";
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
    </body>
</html>