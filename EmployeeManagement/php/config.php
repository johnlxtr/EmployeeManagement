<?php
$server="localhost";
$user="root";
$pass="";
$dbname="employee_management";
$conn = new mysqli($server,$user,$pass,$dbname);
if($conn->connect_error){
  die("Unable to Connect to the Server ".$conn->connect_error);
}
?>
