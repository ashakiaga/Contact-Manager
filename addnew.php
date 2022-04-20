<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="create.php" method="post">
     	<h2>Add New Contact</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>First Name</label>
          <?php if (isset($_GET['firstname'])) { ?>
               <input type="text" 
                      name="firstname" 
                      placeholder="Enter First Name"
                      value="<?php echo $_GET['firstname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="firstname" 
                      placeholder="First Name"><br>
          <?php }?>

          <label>Last Name</label>
          <?php if (isset($_GET['lastname'])) { ?>
               <input type="text" 
                      name="lastname" 
                      placeholder="Enter Last Name"
                      value="<?php echo $_GET['lastname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="lastname" 
                      placeholder="Enter Last Name"><br>
          <?php }?>

          <label>Phone</label>
          <?php if (isset($_GET['phone'])) { ?>
               <input type="tel" 
                      name="phone" 
                      placeholder="Enter Phone Number"
                      value="<?php echo $_GET['phone']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="phone" 
                      placeholder="Enter Phone"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Enter Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="email" 
                      placeholder="Enter Email"><br>
          <?php }?>
          
          <button type="submit" name= "submit">Create</button>
          <button type="button" onclick= "location.href='home.php'" class="ca">Back</button>
     </form>
</body>
</html>
     
     