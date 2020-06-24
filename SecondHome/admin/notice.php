<?php

include_once('includes/connection.php');
include('sidebar-nav.php');


?>

<style type="text/css">
  .notice-active{
    border-left: 3px solid #007bff;
   
  }
.notice-active > a >i {
   color: #007bff !important;
}
.notice-active > a {
   color: #007bff !important;
  

}
.notice{
    border-radius: 12px;
background-image: linear-gradient(230deg, #ffc480, #ff763b);

}
  
</style>
<div class="main-content">
    <div class="container py-4">
              <h4 class="font-weight-bold my-4 mx-2 text-primary">Notice</h4>
<hr>
<form action="noticered.php" method="POST" id="form" class="mx-5">

<!-- <textarea id="notice_area" name="notice" class="" placeholder="Enter Your Notice Here" rows="4"> </textarea> -->
<textarea rows="4" style="resize:none;text-align: center;" cols="50" id="notice_area" name="notice" class="form-control" placeholder="Enter Your Notice Here"></textarea><br />

<button  type="submit" name="submit" class="btn d-block m-auto btn-outline-primary" >Send</button>

</form>
</div>
        <div class="container">
          <h4 class="font-weight-bold text-info">Previous Notices</h4>
          <hr>
          <?php
    
    if(isset($_POST['submit'])){
        
        
       // $r=mysqli_query($con,"INSERT INTO notice (`message`) VALUES ('$notice') ");
       $stmt = $con->prepare("INSERT INTO notice (`message`) VALUES ('?') ");
$stmt->bind_param("s", $notice);
 $notice=$_POST['notice'];
 $stmt->execute();
    }
    

    $s=mysqli_query($con,"SELECT * FROM notice ORDER BY noticeid DESC ");
    while($row = mysqli_fetch_array($s)) {
        //echo $row['message']." &nbsp ".$row['time']."<br>";
        ?>

                <div class="container p-2 py-3 my-3 notice mx-auto" style="overflow-wrap: break-word; ">

                    <h6 class="text-center font-weight-bold text-danger">NOTICE :</h6>
                    <p class="text-center font-weight-bold "><?php
                       $time= date( 'd-M-y g:i A', strtotime($row['time']));
                        echo $time;
                     //echo $row['time']; ?></p>
                    <p class="text-center font-weight-bold" style="" id="msg"><?php
                     $msg = nl2br($row['message']);

                      echo $msg; ?></p>
                </div>

        <?php

    }
?>



</div>
</div>