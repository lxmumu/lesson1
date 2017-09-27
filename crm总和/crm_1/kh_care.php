<?php include 'common/header.html' ?>

<div class="col-md-9">
    <h2>客户关怀</h2><hr />
     <div class="panel panel-default">
      <div class="panel-heading">
      <div class="row">
        <div class="col-md-10">
         客户关怀列表
       </div>
    <div class="col-md-2">
       <button class="btn btn-default" ><a href="action.php?action=kh_care&step=add">添加</a></button>
    </div>
    </div>
  </div>

  <div class="panel-body">
      <table  class="table table-bordered"" >
        <tr>
            <th>#</th>
            <th>客户</th>
            <th>关怀主题</th>
            <th>关怀方式</th>
             <th>关怀时间</th>
            <th>下次关怀时间</th>
            <th>备注</th>
            <th>关怀人</th>
            <th>基本操作</th>
        </tr>
<?php
// $_conn=_connect();
$host='localhost';
$dbname='crm_db1';
$user ='root';
$pwd='123456';
try{
$pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
$sql ="SELECT customer_name,care_id,care_theme,care_way,care_time,care_nexttime,care_remark,care_people FROM customer_care  INNER JOIN customer_info  ON customer_care.customer_id = customer_info.customer_id  WHERE customer_care.is_used=1 ORDER BY customer_care.customer_id DESC;";
$res=$pdo->query($sql);

// print_r($res);exit;
echo"<tr>";
foreach ($res as  $value) {
  // print_r($value);exit;
   echo "<td>$value[care_id]</td>
   <td>$value[customer_name]</td>
   <td>$value[care_theme]</td>
   <td>$value[care_way]</td>
   <td>$value[care_time]</td>
   <td>$value[care_nexttime]</td>
   <td>$value[care_remark]</td>
   <td>$value[care_people]</td>
   ";
    $care_id=$value['care_id'];
   echo"<td><a href='action.php?action=kh_care&step=delete&care_id=$care_id'>删除</a>&nbsp
   <a href='kh_editcare.php?care_id=$care_id'>编辑</a></td>";
   echo "</tr>";
}

}catch (Exception $e){
    echo $e->getMessagg;
}

?>
</table>
</div>
</div>
</div>