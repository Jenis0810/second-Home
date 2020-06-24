<?php
include_once('includes/connection.php');

?>
<html>  
      <head>  
           <title>Webslesson Tutorial | Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</title>  
           
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

          
      </head>  
      <body>   
                <h3 align="center">Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</h3>  
                <br />  
                 <input type="button" name="view" value="view" id="btn;" class="btn btn-info view_data" data-toggle="modal" />  
      </body>  
 </html>  

	<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" email="siraskarjay17@gmail.com">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){


 	$(".view_data").click(function(){
 		var email= $(this).attr("email");

 		$.ajax(
 		{
 			url:"full_detail.php",
 			method: "post",
 			data: {email:email},
 			success:function(data){
 				$('student_detail').html(data);
 				$("#dataModal").modal('show');
 			}

 		});


 	
 	});
 });

 </script>



