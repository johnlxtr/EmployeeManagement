<?php
  include('config.php');
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="nav-bar" style="height: 75px; background-color: lightblue; opacity: 0.5;">
      <div class="login-profile" style="height: 20px; width: 20px; background-color: lightblue; border: 10px solid black; border-radius: 50%; float: left; cursor: pointer;" onclick="location.href='index.php';">
      </div>
    </div>
    <div class="">
      <?php
        if (isset($_GET['error']) && $_GET['error'] == 1) {
          echo "<p style='color:red;'>No account found or incorrect credentials</p>";
        }
      ?>
      <form name="frmSign" method="post" action="login_user.php">
          <input type="text" name="txtUserName" placeholder="Enter Username" required/><br/>
          <input type="password" name="txtUserPass" placeholder="Enter Password" required/><br/>
          <input type="submit" name="btnLogIn" value="Log In" />
      </form>
    </div>
  </body>
</html>
