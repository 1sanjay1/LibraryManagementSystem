<?php

    session_start();
    $is_active = False;
    $_SESSION['$is_active'] = $is_active;

    session_destroy();
    header("location: ../../home.php");

?>
