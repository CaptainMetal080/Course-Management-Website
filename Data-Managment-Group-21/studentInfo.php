<?php

session_start();
$s_Num = $_SESSION['s_Num'];


$First_Name = $_POST['fName'];
$Last_Name = $_POST['lName'];
$Birthday = $_POST['bDay'];
$Phone_Number = $_POST['pNumber'];
$Address = $_POST['address'];
$Year_of_Study = $_POST['year'];
$Program = $_POST['program'];

// INFO FOR CONNECTING TO THE DATABASE
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="course_registeration";
$tablename1="student_information";

// CONNECTING TO THE DATABASE
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql1 = "INSERT INTO $tablename1 (Student_ID,LastName,FirstName,Birthdate,Phone,Address,Year,Program_id) VALUES (
        '{$connection-> real_escape_string($s_Num)}', 
        '{$connection-> real_escape_string($Last_Name)}',
        '{$connection-> real_escape_string($First_Name)}',
        '{$connection-> real_escape_string($Birthday)}',
        '{$connection-> real_escape_string($Phone_Number)}',
        '{$connection-> real_escape_string($Address)}',
        '{$connection-> real_escape_string($Year_of_Study)}',
        '{$connection-> real_escape_string($Program)}')";
        
$insert1 = $connection->query($sql1);




if ($insert1 == TRUE) {

#echo </h3>
} else {
    die("Error: {$connection->errno} : {$connection->error}");
}

mysqli_close($connection);

header("Location: courseRegistration.html");
exit();
?> 