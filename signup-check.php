<?php 
//REPORT ALL PHP ERRORS
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start(); 
include "db.php";

if (isset($_POST['username']) && isset($_POST['phone'])
    && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$phone = validate($_POST['phone']);
	$email = validate($_POST['email']);
    $pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	

	$user_data = 'username='. $uname. '&phone='. $phone. '&email='. $email ;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}

	else if(empty($phone)){
        header("Location: signup.php?error=Phone is required&$user_data");
	    exit();
	}
	
	else if(empty($email)){
	header("Location: signup.php?error=Email is required&$user_data");
	exit();
    }
    else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

    else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM subscribers WHERE password='$pass' ";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) { 
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO subscribers(username, phone, email, password) VALUES('$uname', '$phone', '$email', '$pass')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
            echo 
            
            "Error: " . $sql . "<br>" . $con->error;
	           	
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}
