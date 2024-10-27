<?php
include('config.php');
$tbl='';$num=0;$type="";
$sql="SELECT * FROM user_account";
if($rs=$conn->query($sql)){
     if($rs->num_rows > 0){
        while ($row=$rs->fetch_assoc()) {
            $num++;
            switch($row['user_type']){
              case 1: $type='Applicant';break;
              case 2: $type='Employee';break;
              case 3: $type='Manager';break;
              case 4: $type='Administrator';break;
            }
            $tbl.='<tr>';
            $tbl.='<td>'.$num.'</td>';
            $tbl.='<td>'.$row['user_name'].'</td>';
            $tbl.='<td>'.$type.'</td>';
            $tbl.='<td><a href="del.php?token='.md5($row['user_id']).'">DELETE</a></td>';
            $tbl.='</tr>';
        }
     }
     else{
        $tbl='<tr><td colspan="4" id=""> No Record(s) Found!</td></tr>';
     }
}
else{
  echo $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    body{
      margin: 0;
      padding: 0;
    }
  </style>
  <body>
    <div class="nav-bar" style="height: 75px; background-color: lightblue; opacity: 0.5;">
      <div class="login-profile" style="height: 20px; width: 20px; background-color: lightblue; border: 10px solid black; border-radius: 50%; float: right; cursor: pointer;" onclick="location.href='login_panel.php';">
      </div>
    </div>
<table border="1">
  <tr>
    <th>NO</th>
    <th>USERNAME</th>
    <th>TYPE</th>
    <th>ACTION</th>
  </tr>
  <?php
      echo $tbl;
  ?>
</table>
    <a href="#">Apply Now</a>
  </body>
</html>
