<?php
  include('config.php');

  if (isset($_POST['btnLogIn'])) {
    $username = $_POST['txtUserName'];
    $password = $_POST['txtUserPass'];

    $sql="SELECT * FROM user_account WHERE user_name='$username' AND user_pass='$password'";

    if ($result = $conn->query($sql)) {
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          switch ($row['user_type']) {
            case '1': header("location:applicant_dashboard.php"); break;
            case '2': header("location:employee_dashboard.php"); break;
            case '3': header("location:manager_dashboard.php"); break;
            case '4': header("location:admin_dashboard.php"); break;

            default:
              echo "Web not Available";
              break;
          }
        }
      } else {
          header("location:login_panel.php?error=1");
          exit();
      }
    } else {
      echo "<p>Query error: " . $conn->error . "</p>";
    }

    $conn->close();
  }
?>
