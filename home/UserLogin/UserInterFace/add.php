<?php

  include("active.php");

  if(!$is_active){
      header("location: ../../home.php");
  }

  $user_id = $_SESSION['$user_id'];
  $_SESSION['$user_id'] = $user_id;


  @$FIRST_NAME     = $_POST['first_name'];
  @$LAST_NAME      = $_POST['last_name'];
  @$FATHER_NAME    = $_POST['father_name'];
  @$VILLAGE_CITY   = $_POST['village_city'];
  @$STATE          = $_POST['state'];
  @$EMAIL          = $_POST['email_id'];
  @$DOB            = $_POST['dob'];
  @$MOB            = $_POST['mobile_no'];

  if(strlen($FIRST_NAME)!=0) {
    $q = "UPDATE user SET firstname= '$FIRST_NAME' WHERE id = '$user_id' ";
    mysqli_query($db,$q);
  }
  if(strlen($LAST_NAME)!=0) {
    $q = "UPDATE user SET lastname= '$LAST_NAME' WHERE id = '$user_id' ";
    mysqli_query($db,$q);
  }
  if(strlen($FATHER_NAME)!=0) {
    $q = "UPDATE user SET Father_name= '$FATHER_NAME' WHERE id = '$user_id' ";
    mysqli_query($db,$q);
  }
  if(strlen($VILLAGE_CITY)!=0) {
    $q = "UPDATE user SET Village_city= '$VILLAGE_CITY' WHERE id = '$user_id' ";
    mysqli_query($db,$q);
  }
  if(strlen($STATE)!=0) {
    $q = "UPDATE user SET state= '$STATE' WHERE id = '$user_id' ";
    mysqli_query($db,$q);
  }
  if(strlen($EMAIL)!=0) {
    $q = "UPDATE user SET email = '$EMAIL' WHERE id = '$user_id' ";
    mysqli_query($db,$q);
  }
  if(strlen((string)$DOB)!=0) {
    $q = "UPDATE user SET DOB = '$DOB' WHERE id = '$user_id' ";
    mysqli_query($db,$q);
  }
  if(strlen($MOB)!=0) {
    $q = "UPDATE user SET Mobile_No = '$MOB' WHERE id = '$user_id' ";
    mysqli_query($db,$q);
  }

  mysqli_close($db);

  header('location: user.php');
?>
