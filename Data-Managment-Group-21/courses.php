<!DOCTYPE html>
<html lang="en">
<style>
    img{
        width: 453.33px;
        height: 400px;
        margin-left: 7%;
    }
</style>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Courses</title>
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="course_registeration";
$tablename2="courses";
$tablename3="student_information";
$tablename4="program_information";
$tablename5="faculty";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//coursename, courseID, programID, type, FacultyName,
$s="SELECT crs.CourseName, crs.ID, pinfo.type, pinfo.Program_ID, fac.Name FROM $tablename2 as crs, $tablename4 as pinfo, $tablename5 as fac Where crs.Program_ID=pinfo.Program_ID and pinfo.Faculty_ID=fac.FacultyID";
    $sel = $connection->query($s);

?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="index.html">Hustlers University</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Courses</h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br><br>
    <tr>
        <td><img src="Classes/Busi.png"></td>
        <td><img src="Classes/Calc.png"></td>
        <td><img src="Classes/DigitalSys.png"></td>
    </tr>
    <br><br><br><br>
    <tr>
        <td><img src="Classes/Comm.png"></td>
        <td><img src="Classes/Calc2.png"></td>
    </tr>
    <br><br><br>

    <table class="table">
<thead class="thead-primary text-white">
<tr>
<th>Courses</th>
<th>Course Name</th>
<th>Course ID</th>
<th>Program Name</th>
<th>Program ID</th>
<th>Faculty Name</th>
</tr>
</thead>
<tbody>
<?php if ($sel->num_rows > 0) {while($view= $sel->fetch_assoc()) {echo "<tr><th></th><td>".$view["CourseName"]."</td> <td>".$view["ID"]."</td>  <td>".$view["type"]."</td> <td>".$view["Program_ID"]."</td><td>".$view["Name"]."</tr>";}} ?>
</tbody>
</table>
</html>
