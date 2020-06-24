<?php include("include/dataconnect.php");

session_start();
$email=$_POST["email"];
$password=$_POST["password"];
$epassword=password_hash($password, PASSWORD_DEFAULT);
$otp=random_int(10000, 99999);
$_SESSION["temp_email"]=$email;

    $sqli = "SELECT email from user WHERE email ='$email' ";
    $res = mysqli_query($conn,$sqli);
    if (mysqli_num_rows($res) > 0){
        ?>
        <link rel='stylesheet' href='style.css'>
                <body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'>    
                 <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><h4 style='margin-bottom:30px;margin-left:0px;color:red; '> Already Registered</h4> 
                
                   
                <button style="margin-left:0px;"><a href="login0.php" > GO BACK</a> </button></div></body>

        <?php
    }
    
    else 
    {

    $mail_body="
<p>Hi ".$_POST['email'].",
    </p><p>Thanks for Registration.</p><p>Your OTP for SECOND HOME registration is ".$otp."
    <p>Best Regards,
    <br />Webslesson</p>";
require 'class/class.phpmailer.php';
    require 'class/class.smtp.php';
    $mail=new PHPMailer;
    $mail->IsSMTP(); //Sets Mailer to send message using SMTP
    $mail->Host='smtp.gmail.com'; //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port='587'; //Sets the default SMTP server port
    $mail->SMTPAuth=true; //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username='###'; //Sets SMTP username or enter your email address
    $mail->Password='###'; //Sets SMTP password or enter your gmail password
    $mail->SMTPSecure='tls'; //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From='###'; //Sets the From email address for the message
    $mail->FromName='SecondHome'; //Sets the From name of the message
    $mail->AddAddress($email); //Adds a "To" address			
    $mail->WordWrap=50; //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true); //Sets message type to HTML				
    $mail->Subject='Email Verification'; //Sets the Subject of the message
    $mail->Body=$mail_body; //An HTML or plain text message body
    if($mail->Send()) //Send an Email. Return true on success or false on error

        {


        $sql="INSERT INTO user (email,password,otp)
VALUES ( '$email', '$epassword', '$otp')";


        if($conn->query($sql)) {
            echo " <link rel='stylesheet' href='style.css'>";
            echo "<body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'> ";

            echo " <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;'> Enter The OTP Received In Your Email</p> ";
            echo "<form action='otp_verify.php' method='POST'> 

            <input style='margin-bottom:30px;border-radius:30px;'type='text'placeholder='otp'name='otp'required class='form-control'/><input type='hidden'name='email'value='$email'><button type='submit'>submit </button></form></div></body>";

        }

        else {
            echo "Error: ". $sql . "<br>". $conn->error;

            $conn->close();

        }

    }
    else{
        echo "<script> alert('Unable to send a mail');</script>";
       header("Location: login0.php");
    }
}



?>