<?php

include('db.php');

if(isset($_POST['del'])){
	$cid = $_POST['contactid'];

$sql = "DELETE FROM contacts WHERE contactid = '$cid'"; 
$result = mysqli_query($con, $sql);
header("Location: home.php");
}
//if ($result) {
//	echo"Contact Deleted";
 //exit();
//}else {
//	   echo "Error: " . $sql . "<br>" . $con->error;
//}
//require('db.php');  

//$sql= "SELECT * FROM contacts ORDER BY contactid ASC";
//$cid = trim($_POST['contactid']);
//delete 
//$result=mysqli_query($con, "DELETE FROM contacts WHERE contactid='$cid'" );
//if(mysqli_error($con)==" "){
//	echo '<p style="color: #4F8A10;font-weight: bold;">Person Removed Successfully!</p>';
//}
//else{
  //  echo '<p style="color: #D8000C;font-weight: bold;">Something Went Wrong, Try Again.</p>';
//}
?>