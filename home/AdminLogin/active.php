<?php
     
      include("connection.php");
      session_start();
      $is_active = $_SESSION['$is_active'];
      $_SESSION['$is_active'] = $is_active;
      
?>
