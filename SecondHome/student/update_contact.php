<?php 
include_once('../include/dataconnect.php');
	   session_start();
    if ($_SESSION["temp_email"]=="") {
      header('Location: ../index.html');
    }
    $temp_email=$_SESSION["temp_email"];


    $sql="UPDATE user SET line1='".$_POST['line1']."',line2='".$_POST['line2']."',city='".$_POST['city']."',state='".$_POST['state']."',mobile='".$_POST['mobile']."' WHERE email='".$temp_email."'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
          		echo '<h3 class="text-center">Contact Updated Successfully</h3>';
          	}
          	else {
          		echo '<h3 class="text-primary text-center">Try Again Later</h3>';
          	}

 ?>