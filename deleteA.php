<?php
$connect = mysqli_connect("localhost:3306", "qasim", "y5C9O0RBqRohRoh@_RohRoh", "brotherhood");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM userr WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>