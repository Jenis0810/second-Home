<?php

include_once('includes/connection.php');
include('sidebar-nav.php');

?>
<style type="text/css">
  .manage-active{
    border-left: 3px solid #007bff;
   
  }
.manage-active > a >i {
   color: #007bff !important;
}
.manage-active > a {
   color: #007bff !important;
  

}
body{
}
  
</style>
<section id="content-wrapper">
<div class="main-content">
  <div class="container-fluid">
    <h4 class="font-weight-bold my-4 mx-2 text-primary">Manage</h4>
          <hr>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          
        </div>
      </div>
    </div>
<div class="row">
  <div class="col-md-12">
    
  


                  <div class="table-responsive " style="box-shadow: 1px 1px 5px #999;">
                       <table class=" table table-bordered table-hover" cellspacing="0" >
               
                 

                    <tr class="text-white"  style="background-image: linear-gradient(230deg, #759bff, #007bff);cursor: pointer;">
                      <th>Sno.</th>
                      <th>Email</th>
                      <th>Room No.</th>
                      <th>Details</th>
                      <th>Deallocate</th>
                      <th>Print</th>

                    </tr>
               
               <?php
                      

                      $q="select * from rooms WHERE allocated='yes'";
                      $query = mysqli_query($con,$q);
                      $cnt=1;
                      while($res = mysqli_fetch_array($query)){
                    


               ?>
               <tr>
                      <tr><td><?php echo $cnt;?></td>
                      <td><?php echo $res['email'];?></td>
                      <td><?php echo $res['room'];?></td>
                      
                      <td>
                        <button type="button" email="<?php echo $res['email'];?>" class="btn view_data text-white" data-toggle="modal"  style="background-image: linear-gradient(230deg, #759bff, #843cf6);cursor: pointer;">Details</button>
                        
                      </td>
                      <td>
                        <button type="button" email="<?php echo $res['email'];?>" class="btn text-white deallocate_room" data-toggle="modal" style="background-color: #eb4511;
background-image: linear-gradient(315deg, #eb4511 0%, #b02e0c 74%);
">Deallocate</button>
                      </td>
                       
                      <td>
                          <a href="javascript:void(0);" class="text-center ml-3" id="print"  onClick="popUpWindow('full-profile.php?email=<?php echo $res['email'];?>');" title="View Full Details">
                            <i class="fa fa-desktop"></i>
                          </a>
                      </td>
                    </tr>


                  <?php
                              $cnt=$cnt+1;  }
                  ?>
                                           
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
        <h5 class="modal-title" id="exampleModalLabel">ARE YOU SURE TO DEALLOCATE?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="delete_detail">
        
      </div>
      <div class="modal-footer">
        <button type="button" id="deletebtn-id" onclick="" class="btn btn-danger" email="">Deallocate</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- delete  modal end -->
           


</table>
</div>
</div>   

 </div>
      </div>
    </section>
<script>
  $(document).ready(function(){
//--------------------------- full details ajax function  end-------
  $(".view_data").click(function(){
    var email= $(this).attr("email");
    $.ajax(
    {
      url:"allocate_detail.php",
      method: "post",
      data: {email:email},
      success:function(data){
        $('#student_detail').html(data);
        $("#dataModal").modal('show');
      }
    });
  
  });

});

  //--------------------------- delete ajax function -------
    $(".deallocate_room").click(function(){
    email= $(this).attr("email");
    $("#deletebtn-id").attr("email", email);
    $('#delete_detail').html("This Will Permanently Deallocate Room for "+ email);
    
    $('#delete_dataModal').modal('show');
    
    
    
  });
    $('#delete_dataModal .modal-footer #deletebtn-id').on('click', function(event) {
      
      email= $(this).attr("email");
        $.ajax(
        {

          url:"deallocate_room.php",
          method: "post",
          data: {email:email},
          success:function(data){
             $('#delete_detail').html(data);
             $('#deletebtn-id').hide();
             $('#delete_dataModal').on('hidden.bs.modal', function () { 
                      location.reload();
                               })
            
          }
        });
      });
    
  
  
  //--------------------------- delete ajax function end ---------
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}


</script>
    
    
  
