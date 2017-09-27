<?php  include "common/header.html"; ?>
<?php
$host='localhost';
$dbname='crm_db1';
$user ='root';
$pwd='123456';
$pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
if(isset($_GET['care_id'])){
    $id=$_GET['care_id'];
    // print_r($id);exit;
  $sql = "SELECT customer_name,care_id,care_theme,care_way,care_time,care_nexttime,care_remark,care_people FROM customer_care  INNER JOIN  customer_info  ON customer_care.customer_id = customer_info.customer_id  WHERE care_id=$id";
  $res =$pdo->query($sql);
  // $arr=array();
  foreach ($res as $value) {
      $c_id=$value['care_id'];
      var_dump($c_id);
      // $arr[]=$value;
      // var_dump($value);exit;
 // echo ($arr[0]['care_id']);exit;
 //  var_dump($arr[0]['customer_name']);
 // var_dump($value);
  }
      // print_r($id);exit;

}

?>
    <div class="col-md-9">
    <h2>修改关怀</h2><hr />
     <div class="panel panel-default">
  <div class="panel-heading"> 修改关怀信息
  </div>
  <div class="panel-body">
    <form action="action.php?action=kh_care&step=edit&id=<?php echo $value['care_id']?>" method="post">
    <div class="row">
    <div class="col-md-6">



       <div class="form-group">
      <label for="exampleInputName2">关怀主题</label>
       <input type="text" class="form-control" name="care_theme" value="<?php echo $value['care_theme'];?>">
  </div>

    <div class="form-group">
  <label for="exampleInputName2">下次关怀时间</label>
<input type="text" class="form-control" name="care_nexttime" value="<?php echo $value['care_nexttime'];?>">

  </div>
    </div>

    <div class="col-md-6"><div class="form-group">
    <label for="exampleInputName2">关怀对象</label>

    <select class="form-control" name="customer_name">
<?php

  $host="localhost";
   $db = "crm_db1";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   $sql = "SELECT  i.customer_id,i.customer_name,care_way FROM customer_care  INNER JOIN  customer_info as i ON customer_care.customer_id = i.customer_id ";
  $res =$pdo->query($sql);
       // print_r($res);exit;
  foreach ($res as $key => $value) {
     $username =  $value['customer_name'];
     $id=$value['customer_id'];
   echo "<option value='$id'>$username</option>";
  }
}catch (Exception $e){
    echo $e ->getMessage();
  }
?>

</select>
  </div>
  <div class="form-group">
    <label for="exampleInputName2">关怀方式</label>
   <select class="form-control" name="care_way" value="<?php echo $value['care_way'];?>">
   <option>送礼品</option>
   <option>上门拜访</option>
   <option>发短信</option>
    <option>22</option>
   </select>
  </div>
  </div>
    <div class="form-group">
  <label for="exampleInputName2">备注</label>
  <textarea class="form-control" rows="3" name="care_remark"></textarea>
  </div>
<button type="submit" class="btn btn-primary active" name="submit">修改</a></button>
<button type="button" class="btn btn-info  active"><a href="kh_editcare.php">重置</a></button>
<button type="button" class="btn btn-default  active"><a href="kh_care.php">返回</a></button>
</div>
</form>

</div>
    </div>
</div>
    </body>
</html>