<?php
include('config.php');
$id=0;$token=0;
if(isset($_GET['token'])){
  $sql="SELECT * FROM users";
  $token=$_GET['token'];
  if($rs=$conn->query($sql)){
       if($rs->num_rows > 0){
          while ($row=$rs->fetch_assoc()) {
              $id=$row['user_id'];
              if($token==md5($id)){
                $conn->query("DELETE FROM users WHERE user_id=$id");
                break;
              }
          }
            header("location:index.php");
      }

    }
    else{
        echo $conn->error;
    }

}



?>
