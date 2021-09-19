<?php
include('../dbconnection.php');
session_start();
if (!isset($_SESSION['is_admin_login'])) {
    header('location:../index.php');
}

?>
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
    <link rel="stylesheet" href="../css/all.min.css">

    <link rel="stylesheet" href="./css/admin.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <!-- nabar  -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
        <a href="admindashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-School <small class="text-white">Admin Area</small></a>
    </nav>
    <!-- nav end  -->
    <!-- side bar  -->

    <div class="container-fluid mb-5" style="margin-top: 50px;">
        <div class="row">
            <nav class="col-sm-3 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="admindashboard.php" class="nav-link">
                                <i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard
                            </a></li>
                        <li class="nav-item"><a href="courses.php" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>&nbsp;Courses
                            </a></li>
                        <li class="nav-item"><a href="#" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>&nbsp;Lessons
                            </a></li>
                        <li class="nav-item"><a href="#" class="nav-link">
                                <i class="fas fa-users"></i>&nbsp;Students
                            </a></li>
                        <li class="nav-item"><a href="#" class="nav-link">
                                <i class="fas fa-table"></i>&nbsp;Self Report
                            </a></li>
                        <li class="nav-item"><a href="#" class="nav-link">
                                <i class="fas fa-table"></i>&nbsp;Payment Status
                            </a></li>
                        <li class="nav-item"><a href="#" class="nav-link">
                                <i class="fas fa-key"></i>&nbsp;Change Password
                            </a></li>
                        <li class="nav-item"><a href="../logout.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>&nbsp;Log Out
                            </a></li>
                    </ul>
                </div>
            </nav>