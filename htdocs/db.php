<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Reglage";

$conn = mysqli_connect($servername, $username, $password, $dbname); 

if(!$conn){
    die("Connection Fialed" .mysqli_connect_error()); 
} else {
     echo "!!";
}
?>