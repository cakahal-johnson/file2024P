<?php

// session to hold the messages
session_start(); 


// for connection to Mysqli
  $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

  $id = 0;
  $update = false;
  $name = '';
  $location = '';
//   $count = false;

//   for save btn
  if(isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or die($mysqli->error);

    // for message
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";





    // for re-direct
    header("location: index.php?success=Record has been saved!"); 
  }

  // for deletE btn
  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);

    // for message
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    // for re-direct
    header("location: index.php");
  }

//   for edit btn
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);
    if (mysqli_num_rows($result) > 0){
        $row = $result->fetch_array();
        $name = $row['name'];
        $location = $row['location'];
    }
}

//  update
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("UPDATE data SET name='$name', location='$location' WHERE id=$id ")or die ($mysqli->error);

     $_SESSION['message'] = "Record has been updated!";
     $_SESSION['msg_type'] = "warning";

     header('location: index.php');
}

?>