<?php 
include_once('includes/connection.php');

if (isset($_POST["msgid"])) 
{
   
   $msgid = $_POST['msgid'];
    echo $_POST["msgid"];
    // echo $msg;
    $stmt = $con->prepare("UPDATE messages SET reply=(?) WHERE msgid='$msgid'");
$stmt->bind_param("s", $msg);
 $msg = $_POST['message'];
 $stmt->execute();

 if ($stmt) {
 	  echo 'success';
 }
     //  $q = "UPDATE messages SET reply='$msg' WHERE msgid='$msgid'";
     //  echo $q;
     // $sql = mysqli_query($con,$q);
   


}


    ?>