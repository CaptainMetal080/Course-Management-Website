<?php

// INFO FOR CONNECTING TO THE DATABASE
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="course_registeration";

// CONNECTING TO THE DATABASE
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$responce = array();
if($connection) {
    $sql = "SELECT * FROM student_information";
    $result = mysqli_query ($connection,$sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $responce[$i]['FirstName'] = $row ['FirstName'];
            $responce[$i]['LastName'] = $row ['LastName'];
            $responce[$i]['Birthdate'] = $row ['Birthdate'];
            $responce[$i]['Phone'] = $row ['Phone'];
            $i++;
        }
        echo json_encode($responce,JSON_PRETTY_PRINT);
    }

   
}
else{
    echo "Database connetion failed";
}
?>