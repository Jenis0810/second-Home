<?php
include_once('includes/connection.php');
include('sidebar-nav.php');
?>
<style type="text/css">
  .pending-active{
    border-left: 3px solid #007bff;
   
  }
.pending-active > a >i {
   color: #007bff !important;
}
.pending-active > a {
   color: #007bff !important;
  

}

  
</style>
<section id="content-wrapper">
<div class="main-content">
	<div class="container-fluid">
    <h4 class="font-weight-bold my-4 mx-2 text-primary">Pending Requests</h4>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
			
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="table-responsive" style="box-shadow: 1px 1px 5px #999;">
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="text-white"  style="background-image: linear-gradient(230deg, #759bff, #007bff);cursor: pointer;">
					<th>Sno.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Year</th>
					<th>Full Details</th>
					<th>Allocate</th>
					<th>Delete</th>
				</tr>
			</thead>
			<?php
			
			$q="select * from user where reg_stat='true' and room_allocated='no';";
			$query = mysqli_query($con,$q);
			$cnt=1;
			while($row = mysqli_fetch_array($query))
			{
			?>
			<tbody>
				<tr >
					<td><?php echo $cnt;?></td>
					<td><?php echo $row['fname'];?><?php echo " ";?><?php echo $row['lname'];?></td>
					<td><?php echo $row['email'];
										
					?></td>
					<td><?php echo $row['year'];?></td>
					<td> <button type="button" name="view" value="view" class="btn text-white btn-xs view_data" style="background-image: linear-gradient(230deg, #759bff, #843cf6);cursor: pointer;" email="<?php echo $row['email']; ?>" data-toggle="modal" >Full Details</button>
					</td>
					<td> <button type="button" name="view" value="view" class="btn text-white btn-xs allocate_room" style="background-color: #3bb78f;
background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 74%);
" email="<?php echo $row['email']; ?>" data-toggle="modal">Allocate Room</button>
					</td>
					<td> <button type="button" name="view" value="view" class="btn text-white btn-xs delete_data" style="background-color: #eb4511;
background-image: linear-gradient(315deg, #eb4511 0%, #b02e0c 74%);" email="<?php echo $row['email']; ?>" data-toggle="modal-discard" >Discard</button>
					</td>
					
				</tr>
				
				<?php
				$cnt=$cnt+1;
				}
				?>
				
			</tbody>
		</table>
	</div>
	</div>
</div>
<!--  Full DEtails Modal-->
<div class="modal fade" id="dataModal" tabindex="-1" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Student Details:</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="student_detail">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- full details modal end -->
<!--   delete Modals-->
<div class="modal fade" id="delete_dataModal" tabindex="-1" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="delete_detail">
				This Will Permanently Delete the Student from pending requests !
			</div>
			<div class="modal-footer">
				<button type="button" id="deletebtn-id" onclick="" class="btn btn-danger" email="" data-dismiss="modal">Delete</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- delete  modal end -->
<!--   ALLOCATE Modals-->
<div class="modal fade" id="allocate_dataModal" tabindex="-1" >
	<div class="modal-dialog">
		<form action="#" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Allocate</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="allocate-modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="submit" id="allocate-room-id" onclick="" email="" class="btn btn-primary" email="" data-dismiss="modal">ALLOCATE</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
		
	</div>
</div>
</section>
<!-- ALLOCATE modal end -->
<script>
$(document).ready(function(){
//--------------------------- full details ajax function  end-------
	$(".view_data").click(function(){
		var email= $(this).attr("email");
	
		$.ajax(
		{
			url:"full_detail.php",
			method: "post",
			data: {email:email},
			success:function(data){
				$('#student_detail').html(data);
				$("#dataModal").modal('show');
			}
		});
	
	});
//--------------------------- full details ajax function  end-------
	//--------------------------- delete ajax function -------
		$(".delete_data").click(function(){
		email= $(this).attr("email");
		$("#deletebtn-id").attr("email", email);
		$('#delete_dataModal').modal('show');
		
		
		
	});
		$('#delete_dataModal .modal-footer #deletebtn-id').on('click', function(event) {
			
			email= $(this).attr("email");
				$.ajax(
				{
					url:"delete_data.php",
					method: "post",
					data: {email:email},
					success:function(){
						location.reload();
					}
				});
			});
		
	
	//--------------------------- delete ajax function end ---------
	// --------------------------allocate ajax -----------------
			$(".allocate_room").click(function(){
				email= $(this).attr("email");
				$("#allocate-room-id").attr("email", email);
		$.ajax(
		{
			url:"allocate_room.php",
			method: "post",
			data: {email:email},
			success:function(data){
				$('#allocate-modal-body').html(data);
				$("#allocate_dataModal").modal('show');
			}
		});

		
	});
			$('#allocate_dataModal .modal-footer #allocate-room-id').on('click', function(event) {
			
			email= $(this).attr("email");
			room_no = $( "#room-select option:selected" ).text();
				$.ajax(
				{
						url:"allocate_room.php",
						method: "post",
						data: {email:email,room_no : room_no},
						success:function(){
								location.reload();
								
						}
				});
			});
			});
				// $('#allocate_dataModal').modal('show');
		// $("#delete-t").attr("email", email);
		// // alert($("#delete-t").attr("email"));
		//  $('#allocate_dataModal').modal('show');
		// $(".allocate_room").click(function(){
		//  email= $(this).attr("email");
		//  $("#delete-t").attr("email", email);
		//  // alert($("#delete-t").attr("email"));
		//   $('#allocate_dataModal').modal('show');
		// });
		
				
		
		//   $('#allocate_dataModal .modal-footer #delete-t').on('click', function(event) {
					// 		var $button = $(event.target);
					// 		// alert($(this).attr("email"));
					// 		 email= $(this).attr("email");
						// 		$.ajax(
						// 		{
								// 			url:"delete_data.php",
								// 			method: "post",
								// 			data: {email:email},
								// 			success:function(){
										// 				location.reload();
								// 			}
						// 		});
			//  });
</script>