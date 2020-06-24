<!DOCTYPE html>
<html>
<body>
<?php
session_start();
	include_once('includes/connection.php');
?>
<script type="text/javascript">
    function printpage() {

        var printButton = document.getElementById("printpagebutton");
        printButton.style.visibility = 'hidden';
        window.print()
        printButton.style.visibility = 'visible';
    }
</script>
<style>
  @media print {
  * {
    font-size: 18pt;
  }
}
</style>
<!DOCTYPE html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<title>Student  Information</title>
</head>

<body>
<h2 class="text-secondary font-weight-bold text-center">SECOND HOME</h2>
<table width="100%" border="0" class="mx-3">
<?php 
		$email= $_GET['email'];
		 $ret= mysqli_query($con,"SELECT * FROM user where email = '".$_GET['email']."'");
			while($row=mysqli_fetch_array($ret))
			{
			?>		



       <tr>
   <th colspan="2" align="left"  class="font-weight-bold " style=""><h4>Personal Info : </h4></th>
  </tr>
			<tr><td class="font-weight-bold">Name:</td>
			  <td colspan="2" class="py-1"><?php echo ucfirst($row['fname']);?><?php echo ucfirst($row['mname']);?> <?php echo ucfirst($row['lname']);?></td>
       </tr>
      <tr><td class="py-2 font-weight-bold">Email :</td>
        <td colspan="2"><?php echo ($row['email']);?></td>
  </tr>
  <tr ><td class="font-weight-bold">Address :</td>
        <td colspan="2" class="py-1"><?php echo ($row['line1']);?>
          <?php echo ($row['line2']);?>
          <br><?php echo ($row['city']);?><br>
          <?php echo ($row['state']);?>
        </td>
  </tr>
  <tr><td class="font-weight-bold">Date of Birth:</td>
        <td colspan="2" class="py-1"><?php echo ($row['DOB']);?></td>
  </tr>
  <tr><td class="font-weight-bold">Gender:</td>
        <td colspan="2" class="py-1"><?php echo ($row['gender']);?></td>
  </tr>
    <tr>
   <th colspan="2" align="left"  class="font-weight-bold py-3" style=""><h4>Parents Details : </h4></th>
  </tr>
  <tr><td class="font-weight-bold">Parent Name:</td>
        <td colspan="2" class="py-1"><?php echo ($row['pname']);?></td>
  </tr>
   <tr><td class="font-weight-bold">Parent Email:</td>
        <td colspan="2" class="py-1"><?php echo ($row['pname']);?></td>
  </tr>
   <tr><td class="font-weight-bold">Parent Number:</td>
        <td colspan="2" class="py-1"><?php echo ($row['pnumber']);?></td>
  </tr>
  <tr>
   <th colspan="2" align="left"  class="font-weight-bold py-3" style=""><h4>College Details : </h4></th>
  </tr>
  <tr><td class="font-weight-bold">College Name:</td>
        <td colspan="2" class="py-1"><?php echo ($row['college']);?></td>
  </tr>
   <tr><td class="font-weight-bold">Branch Name:</td>
        <td colspan="2" class="py-1"><?php echo ($row['branch']);?></td>
  </tr>
   <tr><td class="font-weight-bold">Year:</td>
        <td colspan="2" class="py-1"><?php echo ($row['year']);?></td>
  </tr>

<?php } ?>


                   
                  </table></td>
                </tr>
               
					
                  </table></td>
                </tr>
              </table></td>
  </tr>
		
           
 
	 
    </table>
  

  
 <div class="my-5">
    <input id="printpagebutton" type="button" class="m-auto d-block" value="Print this page" onclick="printpage()"/>
 </div>
         

 
</body>
</html>

</body>
</html>
