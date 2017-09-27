<?php  include "common/header.html"; ?>
    <div class="col-md-9">
    <h2>添加联系</h2><hr />
     <div class="panel panel-default">
  <div class="panel-heading"> 添加联系记录
  </div>
  <div class="panel-body">
    <p>
    <div class="row">
    <div class="col-md-6">

      <form action="kh_addconnect.php " method="post">

       <div class="form-group">
      <label for="exampleInputName2">联系主题</label>
       <input type="text" class="form-control" name="connect">
  </div>

    <div class="form-group">
  <label for="exampleInputName2">下次联系时间</label>
    <input type="text" class="form-control" name="next_time">
  </div>
    </div>

    <div class="col-md-6"><div class="form-group">
    <label for="exampleInputName2">联系对象</label>

    <select class="form-control" name="username">
<?php

  $host="localhost";
   $db = "crm_db";
   $user = 'root';
   $pwd = '123456';
   try{
   $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
   $sql = "SELECT * FROM kh_connect";
  $res =$pdo->query($sql);
       // print_r($res);exit;
  foreach ($res as $key => $value) {
     $username =  $value['username'];
   echo "<option>$username</option>";
  }
}catch (Exception $e){
    echo $e ->getMessage();
  }
?>

</select>
  </div>
  <div class="form-group">
    <label for="exampleInputName2">联系方式</label>
    <input type="text" class="form-control" name="connect_type">
  </div>
  </div>
    <div class="form-group">
  <label for="exampleInputName2">备注</label>
  <textarea class="form-control" rows="3" name="notes"></textarea>
  </div>
<button type="submit" class="btn btn-primary active" name="submit">提交</a></button>
<button type="button" class="btn btn-info  active"><a href="kh_tianjialianxi.php">重置</a></button>
<button type="button" class="btn btn-default  active"><a href="kh_lianxijilu.php">返回</a></button>
</div>
</form>
    </p>

</div>
    </div>
</div>

</div>
    </body>
</html>