<?php

$servername = "mysql.cms.waikato.ac.nz";

$username = "afd10";
$password = "my10859566sql";
$database = "afd10";

$con = mysqli_connect($servername, $username, $password);



// login


$usr = $_REQUEST["usr"];
$pass = $_REQUEST["pass"];

$usr = mysqli_real_escape_string($con, $usr);
$pass = mysqli_real_escape_string($con, $pass);
     // Query
//echo $usr;
//echo $pass;



mysqli_select_db($con, $database);

$query="SELECT username, notes FROM Users WHERE username='$usr' and password='$pass'"; 

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
 while($row = $result->fetch_assoc()){


     //           echo "username: " .$row['notes'];
   
     
     echo '<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Current Stocks</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
	<script type="text/javascript" src="javascript/process.js"></script>
    </head>
    <body>
<div id="output" class="stye"> </div>


	<textarea id="notes" rows="4" cols="50">'. $row["notes"] .' </textarea> 
	<input type="button" value="update" onClick="ajaxUpdate()";>
	<input type="button" value="stocks" onClick="ajaxStocks()";>
	<h1 id="response"> </h1>
</body>
</html>';

       session_start();
          $_SESSION['user'] = $row["username"];




 //ajaxUpdate('. $row['username'] .')
 }
}else {
    
}

mysqli_close($con);

// Store notes 





?>
