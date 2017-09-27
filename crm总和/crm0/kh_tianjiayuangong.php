
<?php  include "common/header.html"; ?>
    <div class="col-md-9">
    <h2>员工信息</h2><hr />
     <div class="panel panel-default">
  <div class="panel-heading"> 添加员工记录
  </div>
  <div class="panel-body">
    <p>
    <div class="row">
    <div class="col-md-6">

      <form action="kh_addyg.php" method="post">

       <div class="form-group">
      <label for="exampleInputName2">姓名</label>

       <input type="text" class="form-control" name="username">
  </div>

    <div class="form-group">
  <label for="exampleInputName2">性别</label>
    <input type="text" class="form-control" name="sex">
  </div>
    </div>

    <div class="col-md-6"><div class="form-group">
    <label for="exampleInputName2">年龄</label>
    <input type="text" class="form-control" name="age">
  </div>
  <div class="form-group">
    <label for="exampleInputName2">电话</label>
    <input type="text" class="form-control" name="tel">
  </div>
  </div>
    <div class="form-group">
  <label for="exampleInputName2">邮箱</label>
   <input type="text" class="form-control" name="email">
  </div>
<button type="submit" class="btn btn-primary active" name="submit">添加</a></button>
<button type="button" class="btn btn-info  active"><a href="kh_tianjiayuangong.php">重置</a></button>
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