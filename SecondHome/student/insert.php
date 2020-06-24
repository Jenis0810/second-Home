<?php
session_start();
// $uname = $_REQUEST['uname'];
$email = $_SESSION['temp_email'];

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'hms_project');
$msg = mysqli_real_escape_string($con,$_REQUEST['msg']);
mysqli_query($con,"INSERT INTO forum (`email`,`message`) VALUES ('$email','$msg')");

$result1 = mysqli_query($con,"SELECT * FROM forum ORDER BY chatid DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo " ".$extract['email']." :<span>  " . $extract['message'] . "</span><br />";
}