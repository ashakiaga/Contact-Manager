<?php
//REPORT ALL PHP ERRORS
error_reporting(E_ALL);
ini_set('display_errors', 1);
//state server & database info
$host = "localhost";
$user = "root";
$password = "kiaga2022";
$db_name = "testDB";

//create connection
$con = mysqli_connect($host, $user, $password, $db_name);

//connection check
if (!$con) {
    echo "Connection Unsuccessful!";
} 
?>