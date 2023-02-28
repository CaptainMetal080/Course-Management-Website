
<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="course_registeration";
$tablename1="login";



$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

session_start();
if($_POST!=NULL){
    $studentNumber = $_POST['studentNUM'];
    $psw = $_POST['pass'];
    $_SESSION['s_Num'] = $studentNumber;

    $s="SELECT Pass FROM $tablename1 WHERE $studentNumber=StudentID";
    $insert1 = $connection->query($s);
    $row = mysqli_fetch_assoc($insert1);
      
    if($psw == $row["Pass"]){
        header("Location: mainpage.php");
}
else{
    header("Location: login.html");
}
}


mysqli_close($connection);

exit();

?>