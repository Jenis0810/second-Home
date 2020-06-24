<?php 
include_once('../include/dataconnect.php');
 // echo $_POST['time'];

   $sql="UPDATE mess SET item1='".$_POST['item1']."',item2='".$_POST['item2']."',item3='".$_POST['item3']."',item4='".$_POST['item4']."',item5='".$_POST['item5']."',item6='".$_POST['item6']."' WHERE day='". $_POST['day'] ."' AND time='". $_POST['time'] ."'";
  $q= mysqli_query($conn,$sql);
  echo '<h3>Updated Successfully<h3>';

 ?>