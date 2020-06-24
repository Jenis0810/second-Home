<?php 
include_once('includes/connection.php');

if (isset($_POST["email"])) {

	$q="UPDATE rooms SET allocated='no',email='' WHERE email='". $_POST['email'] ."'";
  mysqli_query($con,$q);
  $sql="DELETE FROM user WHERE email = '" .$_POST["email"]. "'";
  mysqli_query($con,$sql);
 echo $q;
echo 'Successfully Deallocated';
}

 ?>