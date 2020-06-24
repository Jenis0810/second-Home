<?php 
 session_start();
     if(isset($_POST['passsub'])){
        include("include/dataconnect.php");
       
        // $email=$_POST['email'];
        $password=$_POST['pass'];
        $email = $_SESSION['temp_email'];
        //echo $email."<br>".$password."<br>" ;
        $enc_pass = password_hash($password,PASSWORD_DEFAULT);
        $sql ="UPDATE user 
        SET password = '$enc_pass'
        WHERE email= '$email'
        ";
        $result = mysqli_query($conn,$sql);
        if($result){
            ?>
                
<link rel='stylesheet' href='style.css'>
                <body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'>    
                 <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;margin-left:0px;color:red; '>  PASSWORD CHANGED</p> 
                
                   
                <button><a href="login0.php" > GO BACK</a> </button></div></body>
    
                
            <?php
         session_destroy();   
        }



     }   else {

if(isset($_POST['submit'])){

include("include/dataconnect.php");

    $_SESSION['temp_email'] = $_POST['email'];
    $emaili=$_POST['email'];
    $otp=$_POST['otp'];
    //echo $emaili."<br>";
    $sql= "SELECT * from user where email = '$emaili'";  
    $result= mysqli_query($conn,$sql);
    //  echo $result;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            if($row['otp']==$otp){
        ?>

<link rel='stylesheet' href='style.css'>
                <body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'>    
                 <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;margin-left:50px;'>  enter your new password</p> 
                <form action='<?=$_SERVER['PHP_SELF'];?>' method='POST'> 
                   
                <input style='margin-bottom:30px;border-radius:30px;' type="password" placeholder="password" name="pass" required class='form-control'/><button type='submit' name="passsub">submit </button></form></div></body></form>
    
        
        <?php
            }
            else {
                ?>
                                
<link rel='stylesheet' href='style.css'>
                <body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'>    
                 <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;margin-left:30px;color:red; '> WRONG OTP</p> 
                
                 <?php session_destroy(); ?>  
                <button><a href="login0.php" > GO BACK</a> </button></div></body>
    
            <?php

            }
        }
    }
    else {
        ?>
                                       
<link rel='stylesheet' href='style.css'>
<link rel="stylesheet" href="otpstyle.css">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		
	</head>
                <body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'>    
                 <div class="responsive" style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;color:red; '> NO RECORD FOUND</p> 
                
                 <?php session_destroy(); ?>
                <button><a href="login0.php"> GO BACK</a> </button></div></body>
    

        
    <?php
    }


    }
  else {  
?>
  <link rel='stylesheet' href='style.css'>
  <link rel="stylesheet" href="otpstyle.css">
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		
	</head>
                <body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'>    
                 <div class="responsive" style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;text-align:center'> Pleaser verify your email by entering the otp recieved </p> 
                <form action='<?=$_SERVER['PHP_SELF'];?>' method='POST'> 
    
                <input style='margin-bottom:30px;border-radius:30px;' type="email" placeholder="email" name="email" required class='form-control'/>
                <input  style='margin-bottom:30px;border-radius:30px;'type="text" name="otp" placeholder="otp" require class='form-control' >
                <button type='submit' name='submit'>submit </button></form></div></body>
    

<?php
  } }
?>
