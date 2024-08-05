<?php 

// starting the session
session_start();

// connecting the database
                // Server URL     Username Password database-name
$mysqli = new mysqli('localhost', 'root', '', 'chidb') or die(mysqli_error($mysqli));

// initializing the variables
$id = 0;
$name = '';
$location = '';

//  here is the function save to database
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];


    $mysqli->query("INSERT INTO students (name, location) VALUES('$name', '$location')") or die($mysqli->error);

    // for message
    $_SESSION['message'] = "Reconrd has been saved!";
    $_SESSION['msg_type'] = "success";

    // for re-direction
    header("location: index.php?success=Record has been saved");
} 


?>