<?php include '../includes/connect.php'; ?>

<?php ob_start(); ?>

<?php session_start(); ?>

<?php

// Redirect to home page if users are not logged in 

if(!isset($_SESSION['user_role'])){
   header("Location: ../index.php");
}

// Redirect to homepage if users are not admins 

if($_SESSION['user_role'] === 'subscriber'){
   header("Location: ../index.php");
}

?> 


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Dashboard - Health Lifestylers Admin</title>
      <link rel="icon" href="../img/food/site iconc.png" />
      <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
      <link href="css/styles.css" rel="stylesheet" />
      <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>
   </head>
   <body class="sb-nav-fixed">