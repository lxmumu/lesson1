<?php  include "common/header.html"; ?>

    <div class="col-md-9">
    <h2>员工列表</h2><hr />
     <div class="panel panel-default">
  <div class="panel-heading"> 员工列表
  <button class="btn btn-default "><a href="kh_tianjiayuangong.php">添加</a></button>
  </div>
  <div class="panel-body">
   <table  class="table table-bordered"" >
        <tr>
            <th>序号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>电话</th>
            <th>邮箱</th>
            <th>操作</th>
        </tr>
<?php
    $host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   $sql_1="SELECT count(*) FROM kh_yg";
   $res_1 =$pdo ->query($sql_1);
   foreach ($res_1 as $value) {
     $rowcount=$value[0];
     // print_r($value);exit;
   }
 $page=@$_GET['page']?$_GET['page']:1;
    $pagesize =3;
    $pagebegin=($page-1)*$pagesize;
    $pr=$page-1;
    $ne=$page+1;
    $pageNUm= ceil($rowcount/$pagesize);
    if ($ne>=$pageNUm) {
         $ne =$pageNUm;
      }
   $sql = "SELECT  * FROM  kh_yg order by id limit $pagebegin,$pagesize";

   $res=$pdo->query($sql);
       echo "<tr>";
    foreach ( $res as $key => $value ){
         // print_r($value);exit;
     // if(is_numeric($key)){
        // for ($key=0; $key <count($value)/2 ; $key++) {
            echo "<td>$value[0]</td>
                  <td>$value[2]</td>
                  <td>$value[3]</td>
                  <td>$value[4]</td>
                  <td>$value[5]</td>
                  <td>$value[6]</td>";
        // }
        $id=$value['id'];
        // print_r($id);
         echo "<td><a href='kh_xiugai.php?id=$id'>编辑</a>
               <a href='kh_deleteyuangong.php?id=$id'>删除</a>
            </td>";
     // }
     //
   echo "</tr>";
}
   }catch (Exception $e){

    echo $e ->getMessage();
   }
?>
   </table>
    <div class="row ">
               <div class="col-md-6 ">
               共有<?php echo $pageNUm;?>条记录,当前为第<span><?php echo $page ;?></span>/<span><?php echo $pageNUm;?></span>页;
                </div>
                <div class="col-md-6" style="float: right">
                    <ul class="pager">
                      <li><a href='kh_yuangongliebiao.php?page=1'>首页</a></li>
                      <li><a href='kh_yuangongliebiao.php?page=<?php echo $pr;?>'>上一页</a></li>
            <li><a href='kh_yuangongliebiao.php?page=<?php echo $ne;?>'>下一页</a></li>
            <li><a href='kh_yuangongliebiao.php?page=<?php echo $pageNUm;?>'>尾页</a></li>
                    </ul>
                </div>
            </div>

</div>
    </div>
</div>
</body>
</html>
