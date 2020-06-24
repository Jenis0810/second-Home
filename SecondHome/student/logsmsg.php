<?php
session_start();
$email = $_SESSION['temp_email'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'hms_project');
$result1 = mysqli_query($con,"SELECT * FROM messages WHERE email= '$email' ORDER BY msgid DESC");

// echo $result1;
echo "<style>

.usermsg{
border-radius:20px;
background-color : #363636;

color:#fff;
font-weight:500;
  max-width:60%;
   margin: 0px;
   padding: 0px;
   overflow-wrap:break-word;

}
.adminmsg{
   border-radius:20px; 
background-color:#c32aa3;
color:#fff;
     max-width:60%;
   margin: 0px;
   padding: 0px;
   overflow-wrap:break-word;

}


</style>";
while($extract = mysqli_fetch_array($result1)) {
    // $s = $extract['s-time'];
    // $sa=date(" d /m h:i:s ",$s);
    // echo $s."<br>";
       echo '<div class="">
    <div class="">
    <div class="d-flex flex-column">
         <sub class="text-white mt-2 ml-3">'.$extract['s-time'].'</sub>

        <div class="mr-auto usermsg pb-0 p-3 my-3 ">
         
            ' .$extract['message']. '
           
        </div>';

       
   
if($extract['reply']!=''){
 echo ' <br><div class=" ml-auto adminmsg pb-0 p-3 m-2 ">
            '.$extract['reply'].'
            
        </div>';

}
// else{
//     echo "<tr> <td> &nbsp " . $extract['message'] ." &nbsp <sub>" .  date('jS F h:i A', strtotime($extract['s-time']) ) . "</sub></td> <td>".$extract['reply']."<td/></tr> ";

// }

echo ' </div>
    </div>
    </div>';
 }

?>