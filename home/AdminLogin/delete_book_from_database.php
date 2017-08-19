<?php

include("session.php");

$title     = $_POST['TITLE'];
$isbn      = $_POST['ISBN'];
 
$check = "SELECT * FROM Book WHERE '$title' = Title or '$isbn' = ISBN_No";
$result = mysqli_query($db,$check);
$num = mysqli_num_rows($result);

if($num == 0)
  die('Invalid Data OR This Book is not available in the library!');
else
  echo 'Book is deleted successfully!';
  
  
if(strlen($title) != 0 && strlen((string)$isbn) != 0)
{
  $query = "DELETE FROM Book WHERE '$title' = Title and '$isbn' = ISBN_No";
}
else if(strlen($title) != 0)
{
  $query = "DELETE FROM Book WHERE '$title' = Title ";
}
else if(strlen($isbn) != 0)
{
  $query = "DELETE FROM Book WHERE '$isbn' = ISBN_No";
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
