<?php
   include("include/dataconnect.php");
   session_start();
  if(isset($_SESSION['temp_email'])){
   
   $email=$_SESSION['temp_email'];

   $sql = "SELECT * FROM  user WHERE email = '$email'";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) == 1){
    $row=mysqli_fetch_array($result);
    echo $row['email']."<br>";
    $status= $row['status'];
    $reg_stat = $row['reg_stat'];
    $room_allocated = $row['room_allocated'];
    // echo $mail;
    if($room_allocated == 'yes'){
    header("Location: student/profile.php");}
    elseif($reg_stat== 'true'){
    header("Location: sucess_registration.html");}
    elseif($status == 'v'){
        header("Location: student_info.html");
    }
    else{
        echo " <link rel='stylesheet' href='style.css'>";
                echo "<body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'> ";
    
                echo " <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;margin-left:50px;'> Pleaser verify your email</p> ";
                echo "<form action='otp_verify.php' method='POST'> 
    
                <input style='margin-bottom:30px;border-radius:30px;'type='text' placeholder='otp' name='otp' required class='form-control'/><input type='hidden'name='email' value='$email'><button type='submit'>submit </button></form></div></body></form>";
    
    }

} 
      
   else {
       session_unset();
       session_destroy();
       header("Location: login0.php");
   }

}else{
    // session_start();
    header("Location: login0.php");
}

?>