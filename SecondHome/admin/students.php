<?php

include_once('includes/connection.php');
include('sidebar-nav.php');

?>

<style type="text/css">
  .manage-active{
    background-color: #565656;
    border-radius: 6px;
  }


  
</style>



    <div class="main-content">
      <div class="container py-2">
        <h3>ALL STUDENTS</h3>
        <hr>
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <!-- <div class="panel-heading">All Room Details</div> -->
              <div class="panel-body">
           <div class="table-responsiveo">
                  
               
             <table class="table table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Sno.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Room Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
               <?php
                      

                      $q="select * from user";
                      $query = mysqli_query($con,$q);
                      $cnt=1;
                      while($res = mysqli_fetch_array($query)){
                    


               ?>
               <tr>
                      <tr><td><?php echo $cnt;?></td>
                      <td class="text-capitalize"><?php echo $res['fname'];?><?php echo " ";?><?php echo $res['lname'];?></td>
                      <td><?php echo $res['email'];?></td>
                      <td class="text-capitalize"><?php echo $res['room_allocated'];?></td>
                      
                      <td>
    <a href="javascript:void(0);" id="print"  onClick="popUpWindow('full-profile.php?email=<?php echo $res['email'];?>');" title="View Full Details">
      <i class="fa fa-desktop"></i>
    </a>&nbsp;&nbsp;

    <a href="#" data-toggle="modal" email="<?php echo $res['email'];?>" class="deletestd">
      <i class="fa fa-trash text-danger ml-4"></i>
    </a>
</td>
                      
                    </tr>


                  <?php
                              $cnt=$cnt+1;  }
                  ?>
                                           
              

                </tbody>

</table>
 </div>
      </div>
    </div>
    <!--   delete Modals-->
<div class="modal fade" id="delete_dataModal" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="delete_detail">
      </div>
      <div class="modal-footer">
        <button type="button" id="deletebtn-id" onclick="" class="btn btn-danger" email="">Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- delete  modal end -->


<script>
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

  $(document).ready(function(){
  //--------------------------- delete ajax function -------
    $(".deletestd").click(function(){
      //alert("sdsa");
    email= $(this).attr("email");
    $("#deletebtn-id").attr("email", email);
    $('#delete_detail').html("This Will Permanently Delete Student :"+ email);  
    $('#delete_dataModal').modal('show');
    
    
    
  });
    $('#delete_dataModal .modal-footer #deletebtn-id').on('click', function(event) {
      
      email= $(this).attr("email");
        $.ajax(
        {

          url:"delete_data.php",
          method: "post",
          data: {email:email},
          success:function(data){
             $('#delete_detail').html(data);
              $("#deletebtn-id").hide();
              $('#delete_dataModal').on('hidden.bs.modal', function () { 
                  location.reload();
              });
          }
        });
      });

    
  });
  //--------------------------- delete ajax function end --------
</script>

    
    
  
