
<?php  include "common/header.html"; ?>
    <div class="col-md-9">
    <h2>主控板</h2><hr />
    <h4>欢迎你，销售经理-张三,现在是
<span id="timeshow"></span>
<script>
var nowtime;
function time(){
 var dt = new Date();
 var M =  dt.getMonth()+1;
 var h= dt.getHours();
 var m = dt.getMinutes();
 var s =dt.getSeconds();
 nowtime =   dt.getFullYear()+"年"+M+"月"+dt.getDate()+"日"+h+"时"+m+"分"+s+"秒";
 document.getElementById("timeshow").innerHTML = nowtime;
}

setInterval(time, 1000);
// time();
</script></h4>

     <div class="panel panel-default">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading"> 关怀提醒</div>
                     <div class="panel-body">
                         <table  class="table table-bordered" >
                               <tr>
                                   <th>关怀主题</th>
                                   <th>关怀时间</th>
                                   <th>关怀对象</th>
                               </tr>
                           </table>
                     </div>
             </div>
            <div class="panel panel-default">
                <div class="panel-heading"> 联系提醒</div>
                    <div class="panel-body">
                        <table  class="table table-bordered">
                           <tr>
                                   <th>公告主题</th>
                                   <th>公告内容</th>
                                   <th>截止时间</th>
                                   <th>公告人</th>
                            </tr>

                            <tr>
                                   <td>Lorem</td>
                                   <td>ipsum</td>
                                   <td>dolor</td>
                                   <td>sit</td>
                            </tr>
                        </table>
                     </div>
                 </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading"> 公告提醒</div>
                    <div class="panel-body">
                         <table  class="table table-bordered" >
                           <tr>
                               <th>联系主题</th>
                               <th>联系方式</th>
                               <th>应联系时间</th>
                               <th>联系对象</th>
                  </table>
                    </div>
                </div>

            <div class="panel panel-default">
                <div class="panel-heading"> 生日提醒</div>
                     <div class="panel-body">
                        <table  class="table table-bordered" >
                           <tr>
                               <th>过生日的人</th>
                               <th>生日时间</th>
                               <th>手机号码</th>
                               <th>客户状态</th>
                           </tr>
                </table>
                    </div>
                </div>
            </div>

    </div>

</div>
</div>
</div>
</div>
    </body>
</html>
