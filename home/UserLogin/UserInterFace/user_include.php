<?php
    include("connection.php");
    session_start();
    $id = $_SESSION['$id'];
    $_SESSION['$user_id'] = $id;
      
?>
