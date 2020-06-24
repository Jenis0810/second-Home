<?php 

 include("include/dataconnect.php");
    session_start();
    if ($_SESSION["temp_email"]=="") {
    	header('Location: index.html');
    }
    $temp=$_SESSION["temp_email"];
    echo $temp;

 ?>

<!-- <button><a href="logout.php">Logout</a></button> -->

<!DOCTYPE html>
<html>
<head>
	<title>Student Profile</title>
</head>
<body>
		
</body>
</html>