<?php

    session_start();

    //session_destroy();
    unset($_SESSION['admin']['is_active']);

    header("location: ../home.php");
?>
