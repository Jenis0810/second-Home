<?php
include_once('sidebar-nav.php');
include_once('includes/connection.php');


?>

<style type="text/css">
  .dashboard-active{
    border-left: 3px solid #007bff;
   
  }
.dashboard-active > a >i {
   color: #007bff !important;
}
.dashboard-active > a {
   color: #007bff !important;
  

}

  
</style>


   <div class="main-content py-2">
        <div class="container ">
          <h4 class="font-weight-bold my-4 mx-2 text-primary">Dashboard</h4>
          <hr>
          <div class="row ">
            
         <div class="col-md-4 mb-3">


          <div class="card py-3 px-2" onclick="location.href='rooms.php'" style="background-image: linear-gradient(230deg, #759bff, #843cf6);cursor: pointer;">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Students</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white ml-2">
                                      
                                       <?php  

                    $q="SELECT COUNT(*) FROM user WHERE reg_stat='true' AND room_allocated='yes'";
                    $result = mysqli_query($con,$q);
                    $row = mysqli_fetch_array($result);
                    echo $row['COUNT(*)'];  

                  ?>
                                    </h2>
                                  
                                </div>
                                <span class="float-right display-5"><i class="fas fa-3x  text-white fa-user-graduate" style="opacity: 0.7;"></i></span>
                            </div>
                        </div>
                </div>

                 <div class="col-md-4 mb-3">


          <div class="card py-3 px-2" onclick="location.href='pending.php'" style="background-image: linear-gradient(230deg, #fc5286, #fbaaa2);cursor: pointer;">
                            <div class="card-body">
                                <h3 class="card-title text-white">Pending Requests</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white ml-2">
                                      
                                   <?php  

                    $q="SELECT COUNT(*) FROM user WHERE reg_stat='true' AND room_allocated='no'";
                    $result = mysqli_query($con,$q);
                    $row = mysqli_fetch_array($result);
                    echo $row['COUNT(*)'];  

                  ?> 
                                    </h2>
                                  
                                </div>
                                <span class="float-right display-5"><i class="fa-3x  text-white fas fa-hourglass" style="opacity: 0.7;"></i></span>
                            </div>
                        </div>
                </div>

                 <div class="col-md-4 mb-3">


          <div class="card py-3 px-2" onclick="location.href='messages.php'" style="background-image: linear-gradient(230deg, #ffc480, #ff763b);cursor: pointer;">
                            <div class="card-body">
                                <h3 class="card-title text-white">New Messages</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white ml-2">
                                      
                                       <?php  

                    $q="SELECT COUNT(*) FROM messages WHERE reply=''";
                    $result = mysqli_query($con,$q);
                    $row = mysqli_fetch_array($result);
                    echo $row['COUNT(*)'];  

                  ?>
                                    </h2>
                                  
                                </div>
                                <span class="float-right display-5"><i class=" fa-3x  text-white fas fa-comment" style="opacity: 0.7;"></i></span>
                            </div>
                        </div>
                </div>

                <div class="notice card d-block py-3">
                  <h4 class="text-center text-primary">Your Latest Posted Notice</h4>
                  <h5 class="p-2 text-center">
                         <?php 
$q = "SELECT * 
FROM notice
WHERE noticeid IN (SELECT noticeid FROM notice WHERE time = (SELECT MAX(time) FROM notice))
ORDER BY noticeid DESC
LIMIT 1";
$sql = mysqli_query($con,$q);
$row = mysqli_fetch_array($sql);

                       $time= date( 'd-M-y g:i A', strtotime($row['time']));
                        echo '<sub class="font-weight-bold">' . $time . '</sub>';
                        echo '<br>';

                    
                     $msg = nl2br($row['message']);

                     
            // echo '<p class="text-center pt-3"><sub>'.$row['time'].'</sub></p>';
           

                 ?>
                  </h5>
                  <p class="text-center font-weight-bold"><?php  echo $msg; ?></p>
                  
                </div>

           
           <!-- 
                <div class="card text-white" style="">
              <div class="card-body p-0" style="background-image: linear-gradient(230deg, #759bff, #843cf6);">
                 <h5 class='card-title text-center py-4'>
                  Total Students<br>
                  <?php  

                    // $q="SELECT COUNT(*) FROM user WHERE reg_stat='true' AND room_allocated='yes'";
                    // $result = mysqli_query($con,$q);
                    // $row = mysqli_fetch_array($result);
                    // echo $row['COUNT(*)'];  

                  ?>
                    </h5>
               
               
                </div>
                 -->
             <!--  </div> -->
          <!--   </div>
            <div class="col-md-4 mb-3">
           
                <div class="card" style="">
              <div class="card-body p-0 text-white" style="background-color: green;" >
                 <h5 class="card-title text-center py-4"> -->
                  <!--  <?php  

                    // $q="SELECT COUNT(*) FROM user WHERE reg_stat='true' AND room_allocated='no'";
                    // $result = mysqli_query($con,$q);
                    // $row = mysqli_fetch_array($result);
                    // echo $row['COUNT(*)'];  

                  ?> -->
              <!--    </h5>
                <p class="text-center">pending</p>
                <hr class="m-0 "> 
                </div>
                
                <div class="full-details py-3">
                  <a href="" class="">Registatrion</a>
                </div>
                
              </div>
            </div>
          <div class="col-md-4  mb-3">
           
              <div class="card"  style="background-color: skyblue;" >
              <div class="card-body p-0 ">
                 <h5 class="card-title text-center py-4 text-white">
                   
                   <?php  

                    // $q="SELECT COUNT(*) FROM rooms WHERE allocated='yes'";
                    // $result = mysqli_query($con,$q);
                    // $row = mysqli_fetch_array($result);
                    // echo $row['COUNT(*)'];  

                  ?>
                 </h5>
                <p class="text-center text-white">Rooms Allocated</p>
                <hr class="m-0 "> 
                </div>
                
                <div class="full-details py-3 ">
                  <a href="" class="">Full Details</a>
                </div>
                
              </div> -->
          
           
         </div>
        

        </div>
      
    </div>