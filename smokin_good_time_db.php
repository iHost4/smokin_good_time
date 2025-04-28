<?php
    $dsn = 'mysql:host=localhost; port=3306; dbname=uoqwrite_smokin_good_time; charset=utf8'; //the sql hostname is the localhost
    $username = 'uoqwrite_web_user';
    $password = 'goodbbq_123';

    try{
        $db = new PDO($dsn, $username, $password);
       // echo "Successfully connected to 'smokin_good_time' database <br>\n";
    }
    catch(PDOException $e){
        $error_message = $e->getMessage();
        //echo $error_message;
        include('index.php');
        exit();
    }
?>