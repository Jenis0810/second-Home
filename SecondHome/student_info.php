<?php
    include("include/dataconnect.php");
    session_start();
    $temp=$_SESSION["temp_email"];
    if(isset($_POST["submit"])){
    $t=0;
    echo $temp."<br>";

     $fname=$_POST["fname"];
     $mname=$_POST["mname"];
     $lname=$_POST["lname"];
     $mobile=$_POST["mobile"];
     $line1=$_POST["line1"];
     $line2=$_POST["line2"];
     $city=$_POST["city"];
     $state=$_POST["state"];
     $DOB=$_POST["DOB"];
     $gender=$_POST["gender"];
     $pname=$_POST["pname"];
     $pmobile=$_POST["pmobile"];
     $pemail=$_POST["pemail"];
     $clg=$_POST["clg"];
     $branch=$_POST["branch"];
     $year=$_POST["year"];
     
    

     
        // echo $fname."<br>";
        // echo $mname."<br>";
        // echo $lname."<br>";
        // echo $mobile."<br>";
        // echo $line1."<br>";
        // echo $line2."<br>";
        // echo $city."<br>";
        // echo $state."<br>";
        // echo $gender."<br>";
        // echo $DOB."<br>";
        // echo $pname."<br>";
        // echo $pmobile."<br>";
        // echo $pemail."<br>";
        // echo $clg."<br>";
        // echo $branch."<br>";
        // echo $year."<br>";




        $sql = ( " UPDATE  user
        SET      
            fname='$fname', mname='$mname', lname='$lname', mobile='$mobile', line1='$line1', line2='$line2', city='$city', state='$state', DOB='$DOB',gender='$gender', pname='$pname', pnumber='$pmobile', pemail='$pemail', college='$clg', branch='$branch', year='$year',reg_stat='true'     
               WHERE email='$temp'");
             
     
     echo $sql;
         if(mysqli_query($conn,$sql)){
             echo "success";
             $t=1;
 
         }
         else {
             echo "fail".mysqli_error($conn);
         }
 

        
        if($t){
         header("Location: sucess_registration.php");
        }
      
    } 
?>