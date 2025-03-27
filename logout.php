<?php
    session_start();
    //error handling
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    unset($_SESSION['username']);

    echo "You have cleaned session.";
    header('Refresh: 3; URL = index.php');//refresh in 1sec
?>