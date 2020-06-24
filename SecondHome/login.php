<?php
include("include/dataconnect.php");
session_start();
$email=$_POST["email"];
$password=$_POST["password"];
$_SESSION["temp_email"]=$email;

// echo  "".$email. "<br>".$password."<br>";
    
$sql="SELECT * FROM user WHERE email='".$email."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        if (password_verify($password, $row["password"]))
        { 
            if($row["status"]=='v'){
                // echo "helllo world";

                if($row['reg_stat']=='true'){
                    if($row['room_allocated']=='yes'){
                        // if room is allocated
                        header("Location: student/profile.php");
                    }
                    else{
                        //if student registation is successfull but not confirmed by admin
                    header("Location: sucess_registration.php");
                    }
                }
                else {
                    //if the registration is still pending
                header("Location: student_info.html");
                }
            }

            else 
            {
                    // verification  of email is still pending
                echo " <link rel='stylesheet' href='style.css'>";
                echo "<body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'> ";
    
                echo " <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;margin-left:50px;'> Pleaser verify your email</p> ";
                echo "<form action='otp_verify.php' method='POST'> 
    
                <input style='margin-bottom:30px;border-radius:30px;'type='text' placeholder='otp' name='otp' required class='form-control'/><input type='hidden'name='email' value='$email'><button type='submit'>submit </button></form></div></body></form>";
    
                
               
            }
         

        }
        else
        {
          //Password not OK
          echo " <link rel='stylesheet' href='style.css'>";
          echo "<body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'> ";
          echo " <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;'> Wrong Password</p>";
         
          
            echo"<button onclick='back()';>go back</button> ";
            echo "<script type='text/javascript'>";
            echo "function back(){window.history.back()}";
            echo "</script>";
        } 



    }
} else {

        //wrong user details
        echo " <link rel='stylesheet' href='style.css'>";
        echo "<body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'> ";
        echo " <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;'> please enter correct login details</p>";
         
    
        echo"<button style='margin-left:40px;' onclick='back()';>go back</button> ";
        echo "<script type='text/javascript'>";
        echo "function back(){window.history.back()}";
        echo "</script>";
    }
    mysqli_close($conn);  

?>