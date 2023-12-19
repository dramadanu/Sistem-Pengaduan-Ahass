<?php

$servername = "localhost";
$database = "db-ahass";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>