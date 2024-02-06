<?php
$connect = mysqli_connect("localhost:3306", "exclusi5_TestingApp", "y5C9O0RBqRoh", "exclusi5_Check");
if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE user SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>