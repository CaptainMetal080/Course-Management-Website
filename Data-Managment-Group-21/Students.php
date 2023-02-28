<?php

$studentNumber = $_POST['studentNUM'];
$psw = $_POST['Passwor'];

session_start();
$_SESSION['s_Num'] = $studentNumber;


// INFO FOR CONNECTING TO THE DATABASE
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="course_registeration";
$tablename1="login";


// CONNECTING TO THE DATABASE
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


$sql1 = "INSERT INTO $tablename1 (StudentID,Pass) VALUES (
        '{$connection-> real_escape_string($studentNumber)}', 
        '{$connection-> real_escape_string($psw)}')";
        
$insert1 = $connection->query($sql1);




if ($insert1 == TRUE) {

#echo </h3>
} else {
    die("Error: {$connection->errno} : {$connection->error}");
}

mysqli_close($connection);

header("Location: studentInfo.html");
exit();
?>
