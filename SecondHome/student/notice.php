<?php
include_once('../include/dataconnect.php');
include('nav.php');
    session_start();
    // if(!isset($_SESSION['logged_in'])) {
    //   header("Location: ../login.php"); 
      
    // }
    // if ($_SESSION["temp_email"]=="") {
    //   header('Location: ../index.html');
    // }
    $temp_email=$_SESSION["temp_email"];
 ?>

 <style type="text/css">
 body{
  /* background: #000046;  
background: -webkit-linear-gradient(to right, #1CB5E0, #000046);
background: linear-gradient(to right, #1CB5E0, #000046);  */


 }
    .notice-active{
        background-color: deepskyblue;
    }
    .notice{


      border-radius: 30px;
    background: #16222A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3A6073, #16222A);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3A6073, #16222A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }
</style>
<div id="content-wrapper">
  <h2 class="text-center my-3 font-weight-bold">NOTICE</h2>
  <div class="container">
      <div class="row">
  <?php

$s=mysqli_query($conn,"SELECT * FROM notice ORDER BY noticeid DESC ");
while($row = mysqli_fetch_array($s)) {
  ?>
    <!-- echo $row['message']." &nbsp ".$row['time']."<br>"; -->

  
        <div class="col-md-12">
          <div class="notice my-2 pt-3 pb-1 text-capitalize text-white font-weight-bold text-center px-5">
            <!-- <h5 class="text-center font-weight-bold">NOTICE :</h5> -->
                    <p class="text-center font-weight-bold "><?php
                       $time= date( 'd-M-y g:i A', strtotime($row['time']));
                        echo $time;
                        echo '<br><br>';

                    
                     $msg = nl2br($row['message']);

                      echo $msg;
            // echo '<p class="text-center pt-3"><sub>'.$row['time'].'</sub></p>';
              ?>
            
          </div>
        </div>
     

    <?php

}

?>
 </div>
    </div>
</div>

</div>
