<?php
// // live Server Credentials
// $servername = "localhost";
// $username = "u526730828_city";
// $password ="tapa7866@A";
// $database = "u526730828_city";

// Local Server Credentials
$servername = "localhost";
$username = "root";
$password ="";
$database = "referral_system";

$database_connect = mysqli_connect($servername, $username, $password, $database);

if(!$database_connect){
    echo "Error! Server connections is problem.";
}

?>