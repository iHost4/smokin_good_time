<?php
    session_start();
    unset($_SESSION['user_name']);

    echo "Logout succesful";
    header('Refresh: 1; URL = sign_in.php');
?>