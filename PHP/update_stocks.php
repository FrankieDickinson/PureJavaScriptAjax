<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);



session_start();
$user = $_SESSION['user'];




$servername = "mysql.cms.waikato.ac.nz";

$username = "afd10";
$password = "my10859566sql";
$database = "afd10";

$con = mysqli_connect($servername, $username, $password);
//$user = mysqli_real_escape_string($con, $user);

if(!$con) {
    die('Could not connect: ' . mysqli_error($con));

}


mysqli_select_db($con, $database);
$query = "SELECT companyname FROM Stocks INNER JOIN UserStocks ON Stocks.id=UserStocks.id WHERE UserStocks.username='$user'";

$result = mysqli_query($con, $query);


    
echo "<ul>";

while($row  = $result->fetch_assoc()){
        echo "<li   onClick='moreStockInfo()'>" . $row["companyname"] . "</li>";
    }

echo "</ul>";

mysqli_close($con);


?>
