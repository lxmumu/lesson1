<?php  include "common/header.html"; ?>
    <div class="col-md-9">
    <h2>客户状态</h2><hr />
     <div class="panel panel-default">
  <div class="panel-heading"> 添加客户状态
  </div>
  <div class="panel-body">
<form class="form-horizontal" action="kh_addzhuangtai.php"  method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">客户状态</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="status" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">状态描述</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="describe" ><br />
    <button type="submit" class="btn btn-primary" name="submit">提交  </button>
    </div>
</div>
</form>
</div>
    </div>
</div>


    </body>
</html>
