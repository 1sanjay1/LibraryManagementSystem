<?php
    //echo "Logged out scuccessfully";
    //echo '<script type="text/javascript"> alert("Yor are Logged out!");</script>';
    session_start();

    //$_SESSION['is_active'] = false;

    //session_destroy();
    unset($_SESSION['admin']['is_active']);

    header("location:/stark/home/home.php");
?>
