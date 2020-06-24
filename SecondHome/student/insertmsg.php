<?php
session_start();
// $uname = $_REQUEST['uname'];
$email = $_SESSION['temp_email'];


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'hms_project');
$msg = mysqli_real_escape_string($con,$_REQUEST['msg']);
 mysqli_query($con,"INSERT INTO messages (`email`,`message`) VALUES ('$email','$msg')");
// if($res){
//     echo "success";
// }
// else {
//     echo "fail";
// }
// $result1 = mysqli_query($con,"SELECT * FROM message WHERE email= '$email' ORDER BY chatid DESC");

// echo $result1;

// while($extract = mysqli_fetch_array($result1)) {
// 	echo " ".$extract['email']." :<span>  " . $extract['message'] . "</span><br />";
// }

?>