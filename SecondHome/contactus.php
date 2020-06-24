<?php 
include("include/dataconnect.php");
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email =$_POST['email'];
 $msg =$_POST['msg'];
 $mobile= $_POST['mobile'];

 $q = "INSERT INTO contact(name,email,message,mobile) VALUES('$name','$email','$msg','$mobile')";
echo $q;
$sql =mysqli_query($conn,$q);
header("location: index.html");

}

 ?>