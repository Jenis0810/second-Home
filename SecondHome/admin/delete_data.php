<?php 
include_once('includes/connection.php');
if (isset($_POST["email"])) 
{
  
  $query = "DELETE FROM user WHERE email = '" .$_POST["email"]. "'";
 $result= mysqli_query($con,$query);
echo 'Successfully Deleted';
}

 ?>