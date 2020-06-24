<?php 
	include_once('includes/connection.php');
if (isset($_POST['day'])) {
	$day = $_POST['day'];
?>
<div class="container">
	<div class="row">
		
		<div class="col-md-4">
			

  <table class="table table-striped table-bordered table-hover ">
              <tr><th>Breakfast</th></tr>
              <?php
                  $q="SELECT * FROM mess WHERE day='". $_POST['day'] ."' AND time='breakfast'";
                  $sql = mysqli_query($con,$q);
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
            




             } ?>
          </table>

		</div>


		<div class="col-md-4">
			

  <table class="table table-striped table-bordered table-hover ">
              <tr><th>Lunch</th></tr>
              <?php
                  $q="SELECT * FROM mess WHERE day='". $_POST['day'] ."' AND time='lunch'";
                  $sql = mysqli_query($con,$q);
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

		<div class="col-md-4" id="dinner">
			

  <table class="table table-striped table-bordered table-hover" >
              <tr><th>Dinner</th></tr>
              <?php
                  $q="SELECT * FROM mess WHERE day='". $_POST['day'] ."' AND time='dinner'";
                  $sql = mysqli_query($con,$q);
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

<button type="button" id="editbreakf" class="btn btn-outline-primary m-auto">Edit Breakfast</button>
<button type="button" id="editlunch" class="btn btn-outline-primary m-auto">Edit Lunch</button>

<button type="button" id="editdinner" class="btn btn-outline-primary m-auto">Edit Dinner</button>

</div>
</div>
<div class="modal fade" id="lunch-modal" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" >UPDATE LUNCH MENU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="update_mess.php" method="POST" id="update_lunch">
      <div class="modal-body" id="updatebody">
        <?php 
        $q = "SELECT * FROM mess WHERE time ='lunch' AND day='$day'";
        $sql = mysqli_query($con,$q);
        $row = mysqli_fetch_array($sql);
 				
                    echo '<input type="text" class="form-control my-2" name="item1" value="'. $row['item1'] .'">';

                 
                   echo '<input type="text" class="form-control my-2" name="item2" value="'. $row['item2'] .'">';
                  
                  
                    echo '<input type="text" class="form-control my-2" name="item3" value="'. $row['item3'] .'">';
                  
                  
                    echo '<input type="text" class="form-control my-2" name="item4" value="'. $row['item4'] .'">';
                 
                  
                  echo '<input type="text" class="form-control my-2" name="item5" value="'. $row['item5'] .'">';
                
                   echo '<input type="text" class="form-control my-2" name="item6" value="'. $row['item6'] .'">';
                 
                   echo '<input type="hidden" class="" name="day" value="'. $day .'">';
                   echo '<input type="hidden" class="" name="time" value=lunch>';
            
       



 ?>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" id="updatebtn" name="update_lunch" value="Update"></input>
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
  </form>
    </div>
  </div>
</div>

<div class="modal fade" id="breakfast-modal" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" >UPDATE BREAKFAST MENU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="update_mess.php" method="POST" id="update_breakf">
      <div class="breakfast-modal-body" id="breakfast-modal-body">
        <?php 
        $q = "SELECT * FROM mess WHERE time ='breakfast' AND day='$day'";
        $sql = mysqli_query($con,$q);
        $row = mysqli_fetch_array($sql);
 				
                    echo '<input type="text" class="form-control my-2" name="item1" value="'. $row['item1'] .'">';

                 
                   echo '<input type="text" class="form-control my-2" name="item2" value="'. $row['item2'] .'">';
                  
                  
                    echo '<input type="text" class="form-control my-2" name="item3" value="'. $row['item3'] .'">';
                  
                  
                    echo '<input type="text" class="form-control my-2" name="item4" value="'. $row['item4'] .'">';
                 
                  
                  echo '<input type="text" class="form-control my-2" name="item5" value="'. $row['item5'] .'">';
                
                   echo '<input type="text" class="form-control my-2" name="item6" value="'. $row['item6'] .'">';
                 
                   echo '<input type="hidden" class="" name="day" value="'. $day .'">';
                    echo '<input type="hidden" class="" name="time" value=breakfast>';

       



 ?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="bf-updatebtn" name="update_breakf">Update</button>
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
  </form>
    </div>
  </div>
</div>


<!-----------------DInner modal ----------------->

<div class="modal fade" id="dinner-modal" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" >UPDATE DINNER MENU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="update_mess.php" method="POST" id="update_dinner">
      <div class="dinner-modal-body" id="dinner-modal-body">
        <?php 
        $q = "SELECT * FROM mess WHERE time ='dinner' AND day='$day'";
        $sql = mysqli_query($con,$q);
        $row = mysqli_fetch_array($sql);
 				
                    echo '<input type="text" class="form-control my-2" name="item1" value="'. $row['item1'] .'">';

                 
                   echo '<input type="text" class="form-control my-2" name="item2" value="'. $row['item2'] .'">';
                  
                  
                    echo '<input type="text" class="form-control my-2" name="item3" value="'. $row['item3'] .'">';
                  
                  
                    echo '<input type="text" class="form-control my-2" name="item4" value="'. $row['item4'] .'">';
                 
                  
                  echo '<input type="text" class="form-control my-2" name="item5" value="'. $row['item5'] .'">';
                
                   echo '<input type="text" class="form-control my-2" name="item6" value="'. $row['item6'] .'">';
                 
                   echo '<input type="hidden" class="" name="day" value="'. $day .'">';
                    echo '<input type="hidden" class="" name="time" value=dinner>';

       



 ?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="dinner-updatebtn" name="update_dinner">Update</button>
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
  </form>
    </div>
  </div>
</div>



<!-----------------DInner modal end----------------->


<script>
	$(document).ready(function() {
		$("#editlunch").click(function(event) {
				
				$("#lunch-modal").modal('show');
		});


		$('#updatebtn').click(function(){
			var day =' <?php echo $day; ?>';
				//alert(day);
				var update = $('#update_lunch');
       		 update.submit(function(e){
          $.ajax({

                type:update.attr('method'),
                url: update.attr('action'),
                data: update.serialize(),
                success: function(data){
                
                  $('#updatebody').html(data);
                  $('#updatebtn').hide();
                   $('#lunch-modal').on('hidden.bs.modal', function () { 
                             location.reload();
                            
                         })
                }

            });
          e.preventDefault();

        })
		});



			$("#editbreakf").click(function(event) {
				
				$("#breakfast-modal").modal('show');
		});


			$('#bf-updatebtn').click(function(){
			var day =' <?php echo $day; ?>';
				//alert(day);
				var update = $('#update_breakf');
       		 update.submit(function(e){
          $.ajax({

                type:update.attr('method'),
                url: update.attr('action'),
                data: update.serialize(),
                success: function(data){
                
                  $('#breakfast-modal-body').html(data);
                  $('#bf-updatebtn').hide();
                   $('#breakfast-modal').on('hidden.bs.modal', function () { 
                             location.reload();
                         })
                }

            });
          e.preventDefault();

        });
		});


			// -------------- Dinner AJAX 

				$("#editdinner").click(function(event) {
				
				$("#dinner-modal").modal('show');
		});


			$('#dinner-updatebtn').click(function(){
			var day =' <?php echo $day; ?>';
				//alert(day);
				var update = $('#update_dinner');
       		 update.submit(function(e){
          $.ajax({

                type:update.attr('method'),
                url: update.attr('action'),
                data: update.serialize(),
                success: function(data){
                
                  $('#dinner-modal-body').html(data);
                  $('#dinner-updatebtn').hide();
                   $('#dinner-modal').on('hidden.bs.modal', function () { 
                   	  location.reload();
                               })
                }

            });
          e.preventDefault();

        });
		});
	});


</script>


