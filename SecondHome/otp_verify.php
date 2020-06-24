
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

    <title></title>
    <link rel="stylesheet" href="">
</head>


<?php
include("include/dataconnect.php");

$email = isset($_POST['email']) ? $_POST['email'] : '';
$otp=isset($_POST['otp']) ? $_POST['otp'] : '';
// echo $email.'<br>';
// echo $otp.'<br>';
$_SESSION["temp_email"]=$email;
  
    $sql="SELECT * FROM user WHERE email ='".$email."'";
    $result = mysqli_query($conn, $sql);
    
    // echo $sql;
    echo '<style>
        #otp{
    margin-bottom:30px;border-radius:30px;
}
#otp:focus{
      
      outline:none;
}
form input:focus {

}
    </style>';
    if(mysqli_num_rows($result)>0)
    {
        while($row = $result->fetch_assoc()) {
        // echo $row["email"]."<br>".$row["otp"]."<br> ";
            if($otp==$row["otp"]){

                $sqli="UPDATE user SET status = 'v' WHERE email = '".$email."'";
                if($conn->query($sqli)) {
                    echo '<script>alert("you are verified");</script>'; 

                    header("Location: student_info.html");    
                }
                   
            }
            else{echo " <link rel='stylesheet' href='style.css'>";
                echo "<body style='background:linear-gradient(to right,#0f2027,#2c5364); overflow:hidden;'> ";
    
                echo " <div style='background:white;padding:34px;border-radius:12px;text-align:centre;'><p style='margin-bottom:30px;text-align:center;font-weight:bold;'> ENTER CORRECT OTP</p> ";
                echo "<form action='otp_verify.php' method='POST'> 
    
                <input id='otp' style=''type='text'placeholder='Enter OTP Here'name='otp'required class='form-control'/><input type='hidden'name='email'value='$email'><button type='submit'>submit </button></form></div></body>";
    
            }
        }
    }
    else
    {
        echo "not";
    }

?>