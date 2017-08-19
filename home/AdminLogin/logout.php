<?php
    //echo "Logged out scuccessfully";
    echo '<script type="text/javascript"> alert("Yor are Logged out!");</script>';
    session_start();
    session_destroy();
    header("location:/stark/home/home.php");
    exit;
?>
