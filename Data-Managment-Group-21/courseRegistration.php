<?php
session_start();
$s_Num = $_SESSION['s_Num'];

$x = 0;

//Prof
$Prof_Comm = '98188899';
$Prof_Math = '98122345';
$Prof_Busi = '98123345';
$Prof_Elee = '98133455';

//Course Id
$Comm = 'COMM1050';
$Math = 'MATH1010';
$Busi = 'BUSI2040';
$Elee = 'ELEE2010';
$Math2 = 'MATH1020';

// INFO FOR CONNECTING TO THE DATABASE
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="course_registeration";
$tablename1="class";


// CONNECTING TO THE DATABASE
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql1 = "INSERT INTO $tablename1 (Course_ID,PSsn,StudentID) VALUES (
    '{$connection-> real_escape_string($Comm)}',
    '{$connection-> real_escape_string($Prof_Comm)}',
    '{$connection-> real_escape_string($s_Num)}')";

$sql2 = "INSERT INTO $tablename1 (Course_ID,PSsn,StudentID) VALUES (
    '{$connection-> real_escape_string($Elee)}',
    '{$connection-> real_escape_string($Prof_Elee)}',
    '{$connection-> real_escape_string($s_Num)}')";

$sql3 = "INSERT INTO $tablename1 (Course_ID,PSsn,StudentID) VALUES (
    '{$connection-> real_escape_string($Math)}',
    '{$connection-> real_escape_string($Prof_Math)}',
    '{$connection-> real_escape_string($s_Num)}')";

$sql4 = "INSERT INTO $tablename1 (Course_ID,PSsn,StudentID) VALUES (
    '{$connection-> real_escape_string($Busi)}',
    '{$connection-> real_escape_string($Prof_Busi)}',
    '{$connection-> real_escape_string($s_Num)}')";

$sql5 = "INSERT INTO $tablename1 (Course_ID,PSsn,StudentID) VALUES (
    '{$connection-> real_escape_string($Math2)}',
    '{$connection-> real_escape_string($Prof_Math)}',
    '{$connection-> real_escape_string($s_Num)}')";



if(isset($_POST['COMM1050'])){
    $query = mysqli_query($connection, $sql1);
    $x++;
}

if(isset($_POST['ELEE2010'])){     
    $query = mysqli_query($connection, $sql2);
    $x++;
}

if(isset($_POST['MATH1010'])){       
    $query = mysqli_query($connection, $sql3);
    $x++;
}

if(isset($_POST['BUSI2040'])){     
    $query = mysqli_query($connection, $sql4);
    $x++;
}

if(isset($_POST['MATH1020'])){        
    $query = mysqli_query($connection, $sql5);
    $x++;
}

if($x!=0){
    header("Location: thanku.html");
}else{
    header("Location: courseRegistration.html");
}

?> 