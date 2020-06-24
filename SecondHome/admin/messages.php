<?php

include_once('includes/connection.php');
include('sidebar-nav.php');

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/d49ee124cd.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<style type="text/css">
  .messages-active{
    border-left: 3px solid #007bff;
   
  }
.messages-active > a >i {
   color: #007bff !important;
}
.messages-active > a {
   color: #007bff !important;
  

}
#tdemail{
  width:20vw;
   margin: 0px;
   padding: 10px;
   overflow-wrap:break-word;

}
#tdmsg{
  max-width:300px;
   margin: 0px;
   padding: 6px;
   overflow-wrap:break-word;
   position: relative;

}
#tdmsg>sub{
  display: block;
  bottom: 0%;
  margin-top: 10px;
  font-weight: 500;
  text-align: right;

}
/* #stime{
 
  display: block;
  bottom: 0%;
  margin-top: 10px;
  font-weight: 600;
  text-align: right;
}
#etime{
  position: relative;
  display: block;
  bottom: -10%;
  margin-top: 10px;
  font-weight: 600;
  text-align: right;
}
 */
  
</style>

<div class="main-content">
        <div class="container py-2">
              <h4 class="font-weight-bold my-4 mx-2 text-primary">Messages</h4>

          <hr>
          <div class="row ">
           
        
            </div>
            </div>
              <div>
              <?php
                $q ="SELECT * FROM `messages` as `q` ORDER BY q.`s-time` DESC LIMIT 30";
              $result1 = mysqli_query($con,$q);
            
              echo '<div class="container">
                
              ';
              echo " <table class='table table-hover table-striped'> ";
              // echo $result1;
              echo '<tr class="text-white"  style="background-image: linear-gradient(230deg, #759bff, #007bff);cursor: pointer;"><th>ID</th><th>Email</th><th>Message</th><th>Your Reply</th></tr>';
              while($extract = mysqli_fetch_array($result1)) {
                  if($extract['reply']=="")
                  {
                    echo "<tr style='position:relative;'><td id='tdid'>" .$extract['msgid'] ."</td><td valign='top' id='tdemail' class='font-weight-bold' >" .$extract['email'] ."</td>  <td id='tdmsg'> &nbsp " . $extract['message'] ." &nbsp 
                      
                    <sub class='d-block text-right' id='stime'>" .$extract['s-time'] ."</sub>
                    
                    </td><td> 
                    
                    <button msgid=".$extract['msgid']." class='replybtn btn btn-outline-primary text-center d-block m-auto' style='display:in-line block;'>Reply</button></td> </tr>  ";
 
                  }
                else{
                  echo "<tr><td id='tdid'>" .$extract['msgid'] ."</td> <td valign='top' id='tdemail' class='font-weight-bold'>" .$extract['email'] ."</td>  <td id='tdmsg'> &nbsp " . $extract['message'] ."  <sub class='' id='stime'>" .$extract['s-time'] ."</sub></td><td id='tdmsg'> ". $extract['reply']." </td></tr>  ";

                }
              
             // echo "<tr><td>".$extract['msgid']." </td> <td valign='top'>" .$extract['email'] ."</td>  <td> &nbsp " . $extract['message'] ." &nbsp <sub>" .$extract['s-time']. "</sub></td><td> <button msgid=".$extract['msgid']." class='replybtn' style='display:in-line block;'>hello</button></td> </tr>  ";
                
              //echo "  &nbsp <span style='color:black;font-weight:bold;display:inline-block;'> " .$extract['email'] ."</span>: &nbsp <span> " . $extract['message'] ."</span>: &nbsp <span><sub>" .$extract['time']. "</sub></span><br> ";
              }
              
              echo " </table></div> "; 
                
        

              ?>


              	<!-- allocate modal -->
			<div class="modal fade" id="reply_dataModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Reply To Student</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="reply-modal-body">
			<br>
			<textarea name="" id="replymsg" cols="50" rows="10"></textarea>
		</div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" msgid="" id="modalreply">Reply</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
			<!-- allocated mode -->
             
<script>
$(".replybtn").on('click',function(event){
var msgid= $(this).attr("msgid");
$("#modalreply").attr("msgid",msgid);
$('#reply_dataModal').modal('show');
});

$('#reply_dataModal .modal-footer #modalreply').on('click', function(event) {
			
			msgid= $(this).attr("msgid");
     message = $('#replymsg').val();
			$.ajax(
		{
			url:"reply.php",
			method: "post",
			data: {msgid:msgid,message:message},
			success:function(data){
        $('#reply-modal-body').html(data);
        location.reload();
			}
		});
    event.preventDefault();
			});
	
</script>

            </div>
         </div>
