<?php 
include("db.php");

if(isset($_POST['submit'])){

    $cid = $_POST['contactid'];
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

$sql = "UPDATE contacts SET firstname = '$firstname', lastname = '$lastname', phone = '$phone', email = '$email' WHERE contactid = '$cid'";

$result =mysqli_query($con, $sql);
header("Location: home.php");
//if ($result) {
//	echo"contact updated";
 //exit();
//}else {
//	   echo "Error: " . $sql . "<br>" . $con->error;
}

?>