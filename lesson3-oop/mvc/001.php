
<?php
  if(!empty($_GET['type'])&& $_GET['type']=='2'){
     $t1=date('H:i:s');
  }elseif (!empty($_GET['type'])&& $_GET['type']=='3') {
      $t1= date('Y/m/d H:i:s');
  }else{
    $t1=date('Y-m-d');
  }
 ?>


<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8" />
     <title>Document</title>
 </head>
 <body>
     <p>
         <a href="?type=1">形式1</a>
         <a href="?type=2">形式2</a>
         <a href="?type=3">形式3</a>
         <h1><?php echo $t1;?></h1>
          </p>
 </body>
 </html>


