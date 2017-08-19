<?php

include("session.php");

$first_name     = $_POST['First_Name'];
$id             = $_POST['ID'];
 
$check = "SELECT * FROM user WHERE '$first_name' = firstname and '$id' = id ";
$result = mysqli_query($db,$check);
$num = mysqli_num_rows($result);



if($num == 0)
  die('Invalid Data OR This User is not available in the library Database!');
else
  echo 'User is deleted successfully!';
  
  
if(strlen($first_name) != 0 && strlen((string)$id) != 0)
{
  $query = "DELETE FROM user WHERE '$first_name' = firstname and '$id' = id";
}
else if(strlen($first_name) != 0)
{
  $query = "DELETE FROM user WHERE '$first_name' = firstname ";
}
else if(strlen($id) != 0)
{
  $query = "DELETE FROM user WHERE '$id' = id ";
}
else
{
  die("Please fill at least one field!");
}

if(!mysqli_query($db,$query))
{
  die("Error:Connection is not establsihed");
}

mysqli_close($db);
 
?>
