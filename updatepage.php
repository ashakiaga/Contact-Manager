<?php 
include("db.php");
//REPORT ALL PHP ERRORS
error_reporting(E_ALL);
ini_set('display_errors', 1);


$cid = $_POST['contactid'];

$sql = "SELECT * FROM contacts WHERE contactid = '$cid'";
$result = mysqli_query($con, $sql);
if (!$result) {
	   echo "Error: " . $sql . "<br>" . $con->error;}
     else
     {while($row= mysqli_fetch_assoc($result)){

          $cid = $row["contactid"];
          $firstname = $row["firstname"];
          $lastname = $row["lastname"];
          $phone = $row["phone"];
          $email = $row["email"];
     }
          print <<<here
          <form method="POST" action="update.php">
            <input type="hidden" name="contactid" id="contactid" value="$cid" />
            <h1>Edit Contact</h1>
          
          <div>
            <label for="firstname">First Name:</label>
            <input class="form-control" type="text" name="firstname" id="firstname" value="$firstname" />
          </div>

          <div>
            <label for="lastname">Last Name:</label>
            <input class="form-control" type="text" name="lastname" id="lastname" value="$lastname" />
          </div>

          <div>
            <label for="phone">Phone:</label>
            <input class="form-control" type="phone" name="phone" id="phone" value="$phone" />
          </div>

          <div >
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value=" $email" />
          </div>

          <div id="submit">
            <input type="submit" name="submit" value="Save" />
          </div>
        </form>
here;
     }
?>