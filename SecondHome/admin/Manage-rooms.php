
    <div class="main-content">
      <div class="container py-2">
        <h3>MANAGE ROOMS</h3>
        <hr>
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">All Room Details</div>
              <div class="panel-body">
                <div class="table-responsive">
                  
               
             <table id="mstd" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Sno.</th>
                      <th>Student Name</th>
                      <th>Reg no</th>
                      <th>Contact no </th>
                      <th>room no  </th>
                      <th>Action</th>
                    </tr>
                  </thead>
               <?php
                      

                      $q="select * from registration";
                      $query = mysqli_query($con,$q);
                      $cnt=1;
                      while($res = mysqli_fetch_array($query)){
                    


               ?>
               <tr>
                      <tr><td><?php echo $cnt;?></td>
                      <td><?php echo $res['firstName'];?></td>
                      <td><?php echo $res['regno'];?></td>
                      <td><?php echo $res['contactno'];?></td>
                      <td><?php echo $res['roomno'];?></td>
                      <td>
    <a href="javascript:void(0);"  onClick="popUpWindow('http://localhost/hostel/admin/full-profile.php?id=<?php echo $row->id;?>');" title="View Full Details"><i class="fa fa-desktop"></i></a>&nbsp;&nbsp;
</td>
                      
                    </tr>


                  <?php
                              $cnt=$cnt+1;  }
                  ?>
                                           
                  <tfoot>
                    <tr>
                      <th>Sno.</th>
                      <th>Student Name</th>
                      <th>Reg no</th>
                      <th>Contact no </th>
                      <th>Room no  </th>
                  
                      <th>Action</th>
                    </tr>
                  </tfoot>


                </tbody>

</table>
 </div>
      </div>
    </div>


    
    
  