<?php 
include_once('includes/connection.php');
if (isset($_POST["email"])) 
{
	$output ='';
	
	$query = "SELECT * FROM rooms WHERE allocated='no'";
   // echo $query;
	$result= mysqli_query($con,$query);
	$output .=' <div class="form-group">
    <label>Select Room</label>
    <select class="form-control" id="room-select" name="rooms">
     ';
	while($row = mysqli_fetch_array($result))
			{
				$output .= '<option>'.$row["room"].'</option> ';
			}
			echo $output;
}

if (isset($_POST["email"]) && isset($_POST['room_no'])) 
{
	$query = "UPDATE rooms,user SET rooms.email = '" .$_POST["email"]. "',rooms.allocated='yes',user.room_allocated='yes' WHERE rooms.room= '" .$_POST["room_no"]. "' AND user.email='" .$_POST["email"]. "'";
	$result= mysqli_query($con,$query);
}


 ?>