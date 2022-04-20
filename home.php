<?php 
session_start();
include('db.php');
if (isset($_SESSION['subid']) && isset($_SESSION['username'])) {
$subid = $_SESSION['subid'];
//echo $subid;
//REPORT ALL PHP ERRORS
error_reporting(E_ALL);
ini_set('display_errors', 1);
//$subid = $_SESSION['subid'];
//select table to view 
$sql = "SELECT * FROM contacts WHERE subid = '$subid'";
$result = mysqli_query($con, $sql);

print <<<here
<div class="container panel panel-default">
  <div class="row panel-heading">
      <h1 class="panel-title">Arnama</h1>
      <h3 class="panel-title">Contacts</h3>
  </div>
  
  <div id="container-floating">
    <a href='addnew.php'" >Add Contact</a> 
  </div>

</div>
here;
//fetch array, store in variables
if(mysqli_num_rows($result) >0 )
{while($row= mysqli_fetch_assoc($result)){

  $cid = $row["contactid"];
  $firstname = $row["firstname"];
  $lastname = $row["lastname"];
  $phone = $row["phone"];
  $email = $row["email"];

print <<< HERE
<tr>
<td><strong>$firstname $lastname</strong><br>
 Phone: $phone<br>
 <a href=" E-mail: $email">$email</a></td>
<td>
    <form method="POST" action="delete.php">
    <input type="hidden" name="contactid" value="$cid">
    <input type="submit" name="del" value="Delete">
    </form>

    <form method="POST" action="updatepage.php">
    <input type="hidden" name="contactid" value="$cid">
    <input type="submit" name="update" value="Edit">
    </form>
  </td> </tr>

HERE;
}}}else{
  header("Location: index.php");
  exit();
}
?>
<a href="logout.php">Logout</a>