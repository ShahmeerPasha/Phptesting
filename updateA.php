<?php
$connect = mysqli_connect("localhost:3306", "qasim", "y5C9O0RBqRohRoh@_RohRoh", "brotherhood");
if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE userr SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>