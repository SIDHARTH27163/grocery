<?php
    include('./connect.php');
    session_start();
    session_destroy();

    if (isset($_GET['sessionExpired'])) {
        header("location:../index.php");
    }
    else {
        header("location:../index.php");        
    }
?>
