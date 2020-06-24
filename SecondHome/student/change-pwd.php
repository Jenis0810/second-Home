<?php 
	include_once('../include/dataconnect.php');
	   session_start();
    if ($_SESSION["temp_email"]=="") {
      header('Location: ..//index.html');
    }
    $temp_email=$_SESSION["temp_email"];
	$pwd = $_POST['current-pwd'];
	$newpwd = $_POST['new-pwd'];
	$hashpwd=password_hash($newpwd, PASSWORD_DEFAULT);
    
$sql="SELECT * FROM user WHERE email='".$temp_email."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        if (password_verify($pwd, $row["password"]))
        { 
          	
          	$q="UPDATE user SET password ='".$hashpwd."' WHERE email='".$temp_email."'";
          	$res=mysqli_query($conn,$q);
          	if ($res) {
          		echo '<h3 class="text-danger">PASSWORD CHANGED SUCCESSFULLY</h3>';
          	}
          	else {
          		echo '<h3 class="text-primary text-center">Try Again Later</h3>';
          	}
          	
 	

        }
        else{
        	echo '<h3 class="text-danger text-center">Wrong Password<h3>';
        }
    }
}
        // else
        // {
        //   //Password not OK
        //   echo " <link rel='stylesheet' href='style.css'>";
        //   echo "<body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'> ";
        //   echo " <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;'> Wrong Password</p>";
         
          
        //     echo"<button onclick='back()';>go back</button> ";
        //     echo "<script type='text/javascript'>";
        //     echo "function back(){window.history.back()}";
        //     echo "</script>";
        // } 




	
// 	$q="SELECT * FROM user WHERE email='".$temp_email."'";
// 	$query = mysqli_query($conn,$q);
// if (mysqli_num_rows($query) > 0) {
//     // output data of each row
//     while($row = $query->fetch_assoc()) {
//        	echo $row['password'];
//         if (0)
//         { 
//         	echo 'success';
        
//         }
//         else {
//         	echo 'failed';
//         }
// }
// }

 ?>
