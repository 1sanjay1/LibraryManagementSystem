<?php
    //echo "Logged out scuccessfully";
    // echo '<script type="text/javascript"> alert("Yor are Logged out!");</script>';

    session_start();
    $is_active = False;
    $_SESSION['$is_active'] = $is_active;

    session_destroy();
    header("location:/stark/home/home.php");
    exit;
?>
