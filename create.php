<?php
session_start();
include("db.php");
//REPORT ALL PHP ERRORS
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_SESSION['subid'])){
	$subid = $_SESSION['subid'];
echo $subid;
while(isset($_POST['firstname']) && isset($_POST['lastname'])
&& isset($_POST['phone'])  && isset($_POST['email']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

$sql ="INSERT INTO contacts(firstname, lastname, phone, email, subid) 
VALUES('$firstname', '$lastname', '$phone', '$email', '$subid')"; 

$result = mysqli_query($con, $sql);
header("Location: home.php");
//if ($result) {
	$last_id = $con->insert_id;
	echo"successful";
 exit();
//}else {
//	   echo "Error: " . $sql . "<br>" . $con->error;
}}
?>
