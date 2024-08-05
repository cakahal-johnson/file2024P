<?php 

$db_host = 'localhost';
$db_user = 'root';
// $db_password = 'root';
$db_password = '';
$db_db = 'healthy_lifestylers';
// $db_port = 8889;


// $connection = mysqli_connect($db_host, $db_user, $db_password, $db_db, $db_port);
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db);

if(!$connection){

   die("Connection Failed: " . mysqli_connect_error());
}

// echo "Connection Successful!";

?>