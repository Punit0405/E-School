<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@700&display=swap" rel="stylesheet">

          <!-- font awsone css -->
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>E-School</title>
</head>
<body>
    <!-- Start Nav  -->

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark px-5 ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">E-School</a>
    <span class="navbar-text">Learn And Develop</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav px-5">
        <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="courses.php">Course</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="./paymentstatus.php">Payment Status</a>
        </li>
        <?php 
        session_start();
        if(isset($_SESSION['is_login'])){
          echo '<li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">My Profile</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>';
        }
        else{
          echo '<li class="nav-item custom-nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginmodal">Log In</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registrationmodal">Sign Up</a>
        </li>';

        }
        
        
        ?>
        
        
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#Contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav> <!-- End Nav  -->