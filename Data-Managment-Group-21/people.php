<!DOCTYPE html>
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
    <?php

    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="course_registeration";
    $tablename1="professors_information";
    $tablename2="student_information";
    $tablename3="faculty";
    $tablename4="program_information";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $p="SELECT p.Firstname, p.Lastname, p.Birthdate, p.Phone, f.Name FROM $tablename1 as p, $tablename3 as f WHERE  p.Faculty_ID=f.FacultyID";
    $sel = $connection->query($p);
    
    $s="SELECT s.FirstName, s.LastName, s.Birthdate, s.Phone, s.Year, pro.Program_Name FROM $tablename2 as s, $tablename4 as pro WHERE s.Program_ID=pro.Program_ID";
    $sel2=$connection->query($s);

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
                        <h1 class="display-5 fw-bolder text-white mb-2">People</h1>
                        <p class="lead text-white-50 mb-4"></p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <p class="text-center "> 
        
</p>
<table class="table">
<thead class="thead-primary text-white">
<tr>
<th>Hustlers Professors</th>
<th>First Name</th>
<th>Last Name</th>
<th>Birth date</th>
<th>Phone Number</th>
<th>Faculty</th>
</tr>
</thead>
<tbody>
<?php if ($sel->num_rows > 0) {while($name= $sel->fetch_assoc()) {echo "<tr><th></th><td>".$name["Firstname"]."</td> <td>".$name["Lastname"]."</td>  <td>".$name["Birthdate"]."</td> <td>".$name["Phone"]."</td> <td>".$name["Name"]."</td></tr>";}} ?>
</tbody>
</table>

<br>

<table class="table">
<thead class="thead-primary text-white">
<tr>
<th>Hustlers Students</th>
<th>First Name</th>
<th>Last Name</th>
<th>Birth date</th>
<th>Phone Number</th>
<th>Year</th>
<th>Program</th>
</tr>
</thead>
<tbody>
<?php if ($sel2->num_rows > 0) {while($std= $sel2->fetch_assoc()) {echo "<tr><th></th><td>".$std["FirstName"]."</td> <td>".$std["LastName"]."</td>  <td>".$std["Birthdate"]."</td> <td>".$std["Phone"]."</td><td>".$std["Year"]."</td> <td>".$std["Program_Name"]."</td></tr>";}} ?>
</tbody>
</table>

<br><br><br><br>
</body>
</html>
