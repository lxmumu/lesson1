
<?php  include "common/header.html"; ?>
<?php
    $host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   if (isset($_GET['id'])){
    $id=$_GET['id'];
    // print_r($id);exit;
   $sql= "SELECT * FROM kh_yg  WHERE id =$id";
   $res =$pdo->query($sql);
   foreach ($res as $value) {
    // print_r($value);exit;
      $name=$value['username'];
      // print_r($name);exit;
      $sex=$value['sex'];
      $age=$value['age'];
      $tel=$value['tel'];
      $email =$value['email'];
      $id_x=$value['id'];
      // print_r($id_1);exit;
     }
 }

}catch (Exception $e){
    echo  $e->getMessage();
}

?>

    <div class="col-md-9">
    <h2>员工信息</h2><hr />
     <div class="panel panel-default">
  <div class="panel-heading"> 修改员工记录
  </div>
  <div class="panel-body">
    <p>
    <div class="row">
    <div class="col-md-6">

      <form action="kh_edit_yg.php?id=<?php echo $id_x;?>" method="post">

       <div class="form-group">
      <label for="exampleInputName2">姓名</label>
       <input type="text" class="form-control" name="username" value="<?php echo $name;?>">
  </div>

    <div class="form-group">
  <label for="exampleInputName2">性别</label>
    <input type="text" class="form-control" name="sex" value="<?php echo $sex;?>">
  </div>
    </div>

    <div class="col-md-6"><div class="form-group">
    <label for="exampleInputName2">年龄</label>
    <input type="text" class="form-control" name="age" value="<?php echo $age;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputName2">电话</label>
    <input type="text" class="form-control" name="tel" value="<?php echo $tel;?>">
  </div>
  </div>
    <div class="form-group">
  <label for="exampleInputName2">邮箱</label>
   <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
  </div>

<button type="submit" class="btn btn-success active" name="update">修改</a></button>
<button type="button" class="btn btn-default  active"><a href="kh_yuangongliebiao.php">返回</a></button>
</div>
</form>
    </p>

</div>
    </div>
</div>

</div>
    </body>
</html>