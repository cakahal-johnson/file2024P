<?php
    // require 'config/database.php';
    // require 'config/constants.php';
    require __DIR__ . '/../admin/config/constants.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Cakahal|HK</title>

     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->

    <!-- Bootstrap core CSS -->
    <link href="/../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?= ROOT_URL ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="/partials/test.css">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/../assets/css/fontawesome.css">
    <link rel="stylesheet" href="/../assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="/../assets/css/owl.css">


  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Cakahal||HK<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?= ROOT_URL ?>">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?= ROOT_URL ?>about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= ROOT_URL ?>blog.php">Blog Entries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= ROOT_URL ?>post-details.php">Post Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= ROOT_URL ?>contact.php">Contact Us</a>
              </li>

              <!-- <li class="nav_profile"> 
                    <div class="avatar">
                        <img src="/../avatar1.jpg" alt="DPimage">
                    </div>
                    <ul>
                      <li><a href="<?= ROOT_URL ?>admin/dashboard.php">Dashboard<a></li>
                      <li><a href="<?= ROOT_URL ?>admin/Logout.php">Logout<a></li>
                    </ul>

              </li> -->

            </ul>
          </div>
        </div>
      </nav>
    </header>