<?php 
include_once('includes/connection.php');
if (isset($_POST["email"])) 
{
	$output ='';
	
	$query = "SELECT * FROM user WHERE email = '" .$_POST["email"]. "'";
	$result= mysqli_query($con,$query);
	$output .=' 
	<div class = "table-responsive">
		<table class="table table-bordered">';
		while($row = mysqli_fetch_array($result))
		{
			$output .='
			<tr>
					<th><label>Full Name</label></th>
					<td> '.$row["fname"].''." ".''.$row["mname"].''." ".''.$row["lname"].'</td>
				</tr>
				<tr>
					<th><label>Email</label></th>
					<td> '.$row["email"].' </td>
				</tr>
				
				<tr>
					<th><label>Mobile</label></th>
					<td> '.$row["mobile"].' </td>
				</tr> 
				<tr>
					<th><label>Address</label></th>
					<td> '.$row["line1"].''."<br> ".''.$row["line2"].''."<br>".''.$row["city"].''."<br>".''.$row["state"].' </td>
				</tr> 
				<tr>
					<th><label>DOB</label></th>
					<td> '.$row["DOB"].' </td>
				</tr> 
				<tr>
					<th><label>Gender</label></th>
					<td> '.$row["gender"].' </td>
				</tr> 
				<tr>
					<th><label>Parents Name</label></th>
					<td> '.$row["pname"].' </td>
				</tr>
				<tr>
					<th><label>Parents Number</label></th>
					<td> '.$row["pnumber"].' </td>
				</tr>
				<tr>
					<th><label>Parents email</label></th>
					<td> '.$row["pemail"].' </td>
				</tr> 
				<tr>
					<th><label>College</label></th>
					<td> '.$row["college"].' </td>
				</tr> 
				<tr>
					<th><label>Branch</label></th>
					<td> '.$row["branch"].' </td>
				</tr> 
				<tr>
					<th><label>Year</label></th>
					<td> '.$row["year"].' </td>
				</tr>
				
				';


		}

		$output .="</table></div>";
		echo $output;
}

 ?>