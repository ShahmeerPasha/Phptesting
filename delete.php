<?php
$connect = mysqli_connect("localhost:3306", "exclusi5_TestingApp", "y5C9O0RBqRoh", "exclusi5_Check");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM user WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>