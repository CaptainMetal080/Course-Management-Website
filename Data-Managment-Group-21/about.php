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
    $tablename2="faculty";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $s="SELECT p.Firstname, p.Lastname, p.Salary, faculty.Name FROM $tablename1 as p,$tablename2 as faculty WHERE faculty.FacultyID=Faculty_ID ";
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
                        <h1 class="display-5 fw-bolder text-white mb-2">About</h1>
                        <p class="lead text-white-50 mb-4"></p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </header>
       <div class="row text-center my-5 about">
       The  “Hustler’s university” is one of the best universities in the world, <br>and to maintain its position, the university decided to attract more students, <br>by adding new courses, and new professors to teach those courses. <br>In order to do that, we have to design a database system with multiple view.<br> We are open to how much our professors make.
      </div>
      <p class="text-center my-5 about ">
        <?php if ($sel->num_rows > 0) {while($name= $sel->fetch_assoc()) {echo " Hello I am ".$name["Firstname"]." ".$name["Lastname"]." <br>  I make ".$name["Salary"]." CAD a year  <br> and my Faculty is : ".$name["Name"]."<br><br><br>";}} ?>
      </p>
</body>
</html> 