<?php
    session_start();
    session_destroy();
    header("location:/loginPage,php");


    //echo
    //    '<script> window.location = "../page/loginPage.php" </script>';
?>