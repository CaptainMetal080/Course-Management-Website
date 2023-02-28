<!DOCTYPE html>


<?php

session_start();
$std_Num = $_SESSION['s_Num'];
session_abort();

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="course_registeration";
$tablename1="class";
$tablename2="courses";
$tablename3="student_information";
$tablename4="program_information";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$s="SELECT courseName, type, Faculty_ID FROM $tablename1 as cls , $tablename2 as crs, $tablename4 as pinfo WHERE cls.Course_ID=crs.ID and $std_Num=cls.StudentID and crs.Program_ID=pinfo.Program_ID";
    $sel = $connection->query($s);

$a="SELECT firstName, lastName FROM $tablename3 WHERE $std_Num=Student_ID";
    $sel2 = $connection->query($a);

$p="SELECT Program_id FROM $tablename3 WHERE $std_Num=Student_ID";
    $sel3 = $connection->query($p);

?>


<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hustlers University</title>
    
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
 
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="index.html">Hustlers University</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Welcome <?php if ($sel2->num_rows > 0) {while($name= $sel2->fetch_assoc()) {echo $name["firstName"]." ".$name["lastName"];}} ?></h1>
                        <p class="lead text-white-50 mb-4">Ready to hustle?</p>
                        <p class="fw-bolder text-white mb-32" style="font-size: 25px">Program: <?php if ($sel3->num_rows > 0) {while($program= $sel3->fetch_assoc()) {echo $program["Program_id"];}} ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5 border-bottom">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Your Courses</h2>

            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                            <div class="d-flex">
                                <div class="ms-4">
                                    <p class="mb-1"> <?php if ($sel->num_rows > 0) {while($row = $sel->fetch_assoc()) {echo "<h3> ". $row["courseName"]. "<br>" . $row["Faculty_ID"]. "<br>" . $row["type"]." </h3>";}}?></p>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">


</body>
</html>