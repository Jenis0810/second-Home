<?php
include("includes/connection.php");

if(isset($_POST["submit"])){
session_start();
	$email=$_POST["email"];
	$password=$_POST["password"];
	//$adminpassword=password_hash($password, PASSWORD_DEFAULT);
	$_SESSION["admin_email"]=$email;

	 $sql="SELECT * FROM admin WHERE email='".$email."'";
	 $result = mysqli_query($con, $sql);
	 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        if (password_verify($password, $row["password"]))
        { 
        		// header("Location :index.php");
        	 header("Location: index.php");
        	// echo '<script>alert("ejha");</script>';
        }
        else {
        	//echo 'failedddddddddddddddddddddd';
        }
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title></title>
	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>

	

	<div class="container py-2">
		
		<h3 class="text-center pt-2 pt-1 font-weight-bold">Admin Login</h3>
		<div class="top-border">
			
		</div>
		<form action="#" class="py-5" method="post" accept-charset="utf-8">
		<input type="text" name="email" class="form-control my-4" placeholder="Username">
		<input type="password" name="password" value="" class="form-control" placeholder="Password">
		<button type="submit" name="submit" class="d-block btn text-white font-weight-bold btn-login">Login</button>
		</form>
		
	</div>
	




     <script src="https://kit.fontawesome.com/d49ee124cd.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>