  <?php
  include('config.php');
  if(isset($_POST['txtUserName'])){

    $u=addslashes($_POST['txtUserName']);
    $p=addslashes($_POST['txtUserPass']);
    $r=addslashes($_POST['txtRePass']);
    if($p==$r){
      $p=md5($p);
      $sql="INSERT INTO users SET user_name='$u', user_pass='$p', user_type=3";
      if($rs=$conn->query($sql)){
          header("location:index.php");
      }else{
        echo $conn->error;
      }
    }else{
        echo "Password MisMatched!";
    }
  }
  ?>
