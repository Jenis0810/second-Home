<?php
include_once('../include/dataconnect.php');
include('nav.php');
    session_start();
    if (isset($_SESSION["temp_email"])) {
      $temp=$_SESSION["temp_email"];
      
    }
    else {
      header('Location: ../index.html');
    }
 ?>

 <style type="text/css">
    .mess-active{
        background-color: deepskyblue;
    }
</style>
<div id="content-wrapper">
  <h2>Today's Mess Menu</h2>


  <?php //echo $temp;
  
  $today = date("l");
  $q = "SELECT * FROM mess WHERE day = '$today'";
  $res = mysqli_query($conn,$q);

  ?>

<div class="container">
      <div class="row text-capitalize">
        <div class=col-md-4>
          
          <table class="table table-striped table-bordered table-hover ">
              <tr><th>Breakfast</th></tr>
              <?php
                  $q = "SELECT * FROM mess WHERE time='breakfast' AND day ='$today'";
                  $sql = mysqli_query($conn,$q);
                  $row = mysqli_fetch_array($sql);
                  
              
               
                  if($row['item1']!=''){
                    echo '<tr><td>'. $row['item1'] .'</td></tr>';
                  }
                  if($row['item2']!=''){
                    echo '<tr><td>'. $row['item2'] .'</td></tr>';
                  }
                  if($row['item3']!=''){
                    echo '<tr><td>'. $row['item3'] .'</td></tr>';
                  }
                  if($row['item4']!=''){
                    echo '<tr><td>'. $row['item4'] .'</td></tr>';
                  }
                  if($row['item5']!=''){
                    echo '<tr><td>'. $row['item5'] .'</td></tr>';
                  }
                  if($row['item6']!=''){
                    echo '<tr><td>'. $row['item6'] .'</td></tr>';
                  }
              ?>
          </table>

        </div>
        <div class=col-md-4>
        <table class="table table-striped table-bordered table-hover">
              <tr class=""><th>Lunch</th></tr>
              <?php
                  $q = "SELECT * FROM mess WHERE time='lunch' AND day ='$today'";
                  $sql = mysqli_query($conn,$q);
                  $row = mysqli_fetch_array($sql);
                  
              ?><?php  
              if($row['item1']!=''){
                echo '<tr><td>'. $row['item1'] .'</td></tr>';
              }
              if($row['item2']!=''){
                echo '<tr><td>'. $row['item2'] .'</td></tr>';
              }
              if($row['item3']!=''){
                echo '<tr><td>'. $row['item3'] .'</td></tr>';
              }
              if($row['item4']!=''){
                echo '<tr><td>'. $row['item4'] .'</td></tr>';
              }
              if($row['item5']!=''){
                echo '<tr><td>'. $row['item5'] .'</td></tr>';
              }
              if($row['item6']!=''){
                echo '<tr><td>'. $row['item6'] .'</td></tr>';
              }
              ?>
              
              
          </table>
        </div>
        <div class=col-md-4>
        <table class="table table-striped table-bordered table-hover">
              <tr><th>Dinner</th></tr>
              <?php
                  $q = "SELECT * FROM mess WHERE time='dinner' AND day ='$today'";
                  $sql = mysqli_query($conn,$q);
                  $row = mysqli_fetch_array($sql);
                  if($row['item1']!=''){
                    echo '<tr><td>'. $row['item1'] .'</td></tr>';
                  }
                  if($row['item2']!=''){
                    echo '<tr><td>'. $row['item2'] .'</td></tr>';
                  }
                  if($row['item3']!=''){
                    echo '<tr><td>'. $row['item3'] .'</td></tr>';
                  }
                  if($row['item4']!=''){
                    echo '<tr><td>'. $row['item4'] .'</td></tr>';
                  }
                  if($row['item5']!=''){
                    echo '<tr><td>'. $row['item5'] .'</td></tr>';
                  }
                  if($row['item6']!=''){
                    echo '<tr><td>'. $row['item6'] .'</td></tr>';
                  }
              ?>
             
          </table>
        </div>
      </div>
  </div>
</div>

</div>