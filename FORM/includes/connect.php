<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_Password = '';
    $db_db ='php_acc';
    

    $connection = mysqli_connect($db_host, $db_user, $db_Password, $db_db);

    if(!$connection){

        die("Connection failed: " . mysqli_connect());
    }

    // echo "Connection successfully!";

?>