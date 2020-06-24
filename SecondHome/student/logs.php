<?php
session_start();
$email = $_SESSION['temp_email'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'hms_project');

$result1 = mysqli_query($con,"SELECT * FROM forum ORDER BY chatid DESC");
//echo " <table> ";

  	

echo '<style>
			.usermsg{

				background-color:lightgreen;
				
				border-radius:8px;
				 position: relative;
		        padding:12px 12px;
		        word-wrap: break-word;
			}
			
		</style>';

while($extract = mysqli_fetch_array($result1)) {
if ($_SESSION["temp_email"] == $extract['email']) {
  		
echo '<style>
	.border-1:before {
      content: "";
      position: absolute;
      right: 100%;
      top: 12px;
      width: 0;
      height: 0;
      border-top: 13px solid transparent;
      border-right: 26px solid #98FB98;
      border-bottom: 13px solid transparent;
    }
</style>
<div class="msg" >
<div class="container">
<div class="row usermsg border-1 my-2" style="background-color:#98FB98;width:80%;">
	
	<div class="col-md-4">
		<span>'. $extract['message'] .'</span>
		

	</div>
	<div class="col-md-5">
		<h6 class="font-weight-bold"><span>'.$extract['email'].' : </span></h6>
	</div>
	<div class="col-md-3">
		<span><sub>'. $extract['time'] .'</sub></span>
	</div>
	
</div>
</div>
</div>';
  		
  	}
  	else{

echo '<style>
	
	.c-bo:after {
      content: "";
      position: absolute;
      left: 100%;
      top: 12px;
      width: 0;
      height: 0;
      border-top: 13px solid transparent;
      border-left: 26px solid #8BBEE8FF;
      border-bottom: 13px solid transparent;
    }
</style>
<div class="msg">
<div class="container">
<div class="row usermsg c-bo my-2" style="background-color:#8BBEE8FF;width:80%; margin-left:auto;">
	<div class="col-md-5">
		<h6 class="font-weight-bold"><span>'.$extract['email'].' : </span></h6>
	</div><div class="col-md-3">
		<span><sub>'. $extract['time'] .'</sub></span>
	</div>
	<div class="col-md-4">
		<span>'. $extract['message'] .'</span>
		

	</div>
	
</div>
</div>
</div>';
  		
  	}


//echo "<tr><td>" .$extract['email'] ."</td> &nbsp <td> " . $extract['message'] ." &nbsp" .$extract['time']. "</td></tr> ";
	
//echo "  &nbsp <span style='color:black;font-weight:bold;display:inline-block;'> " .$extract['email'] ."</span>: &nbsp <span> " . $extract['message'] ."</span>: &nbsp <span><sub>" .$extract['time']. "</sub></span><br> ";
}

//echo " </table> "
?>