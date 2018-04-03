<?php

$notes = $_REQUEST["notes"];
session_start();
$user = $_SESSION['user'];



$servername = "mysql.cms.waikato.ac.nz";

$username = "afd10";
$password = "my10859566sql";
$database = "afd10";

$con = mysqli_connect($servername, $username, $password);
mysqli_select_db($con, $database);

$notes = mysqli_real_escape_string($con, $notes);
$user = mysqli_real_escape_string($con, $user);



$query = "UPDATE Users SET notes='$notes' WHERE username='$user'";

$result = mysqli_query($con, $query);

mysqli_close($con);


if(mysqli_num_rows($result) > 0){

    echo "Success"; 

    
}else {
   
}


?> 