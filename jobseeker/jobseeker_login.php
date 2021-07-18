


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">

	<title>Sign up for JobSeeker</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<head>
	
	<style type="text/css">
		.error{
			color: red;
		}
	</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<link rel="icon" href="../images/logo.png" type="image/x-icon" />
		<!---- Icon link local ----->
		<link rel="stylesheet" type="text/css" href="css/jobseeker_login.css">
		
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<!---- Font awesom link local ----->
	</head>
	<body>
		<div class="container-fluid">
		<div class="container">
			
<div align="middle">
	<img class="mb-4" src="../images/logo2.png" alt="" width="400" height="100">
</div>
			
			 <p class="text-center">
				<small id="passwordHelpInline" class="text-muted">Follow us on-<a href="facebook.com/sadbin.s">facebook</a> </small>
			</p>
 			<hr>

			<div class="row">

				<div class="col-md-5">
 					<form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<fieldset>							
							<p class="text-uppercase pull-center"> SIGN UP.</p>	
 							<div class="form-group">
								<input type="text" name="username" class="form-control input-lg" placeholder="username">
								<span class="error">*<?php if (isset($nameErr)) echo $nameErr; ?></span>
							</div>

							<div class="form-group">
								<input type="email" name="email" class="form-control input-lg" placeholder="Email Address">
								<span class="error">*<?php if (isset($emailErr)) echo $emailErr; ?></span>
							</div>
							<div class="form-group">
								<input type="password" name="password"  class="form-control input-lg" placeholder="Password">
								<span class="error">*<?php if (isset($passErr)) echo $passErr; ?></span>
							</div>
								<div class="form-group">
								<input type="phone" name="phone" class="form-control input-lg" placeholder="Phone">
								<span class="error">*<?php if (isset($phnErr)) echo $phnErr; ?></span>
							</div>
							<div class="form-check">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  By Clicking register you're agree to our policy & terms
								</label>
							  </div>
 							<div>
 									  <input type="submit" class="btn btn-lg btn-primary"   value="Register">
 							</div>
						</fieldset>
					</form>
				</div>
				
				<div class="col-md-2">
					<!-------null------>
				</div>
				
				<div class="col-md-5">
 				 		<form role="form" method="POST" action="login_validate.php">
						<fieldset>							
							<p class="text-uppercase"> Login using your account: </p>	
 								
							<div class="form-group">
								<input type="text" name="username" class="form-control input-lg" placeholder="username">
								
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control input-lg" placeholder="Password">
								
							</div>
							<div>
								<input type="submit" name="submit2" class="btn btn-lg btn-primary" value="Sign in">
							</div>
								 
 						</fieldset>
				</form>	
				</div>
			</div>
		</div>
		
	</div>
	</body>
	 

</html>


<!-- for registration -->

<?php
include("../connection/connection.php");

error_reporting(0);
?>


<?php

function input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return $data;
}

$nameErr = $passErr = $phnErr= $emailErr ="";
 $name = $pass = $phn = $email = "";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{


if (empty($_POST["username"])) {
    $nameErr = 'Name is requred';
} else {
    $name = input($_POST["username"]);
}

if (empty($_POST["password"])) {
    $passErr = "Enter password";
} else {
    $pass = input($_POST['password']);
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,20}$/', $pass)) {
        $passErr = "Use at least one Upper and one Lower case and a number. Should be in between 8-20 character'";
    }
}

if (empty($_POST["phone"])) {
    $phnErr = "Please Enter phone number";
} else {
    $phn = input($_POST["phone"]);
    if (!preg_match('/^\+?(88)?0?1[356789]+[0-9]{8}$/', $phn)) {
        $phnErr = "Enter a valid BD phone number";
    } 
}

if (empty($_POST["email"])) {
    $emailErr = "Email is requred";
} else {
    $email = input($_POST['email']);
    if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)) {
        $emailErr = "Enter a valid email";
    } 
}





if (empty($nameErr) && empty($passErr) && empty($emailErr) && empty($phnErr)) {

     //$password_encrypted = password_hash($password, PASSWORD_BCRYPT);
    
    $query= "INSERT INTO jobseeker(name,email,phone,password) VALUES('$name','$email','$phn','$pass')";
    $data=mysqli_query($conn,$query);

    if($data){

     echo "<script type='text/javascript'>alert('Added successfully!')</script>";
       //header('location:teacherF.php');
 }
 else{
     echo "<script type='text/javascript'>alert('Added unsuccessfull!')</script>";
 }

}
}

?>
