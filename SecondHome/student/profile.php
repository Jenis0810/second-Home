<?php
include_once('../include/dataconnect.php');
include('nav.php');
    session_start();
    if(isset($_SESSION["temp_email"])){
        $temp_email=$_SESSION["temp_email"];
      
    }
    else {
      header('Location: ../index.html');
    }
  
 ?>

 <style type="text/css">
    .profile-active{
        background-color: deepskyblue;
    }
</style>
<div id="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 mt-3 py-md-3 profile-block" >
        <h2 class="font-weight-bold text-center">Profile</h2>
        <img class="my-3" src="user.png" alt="" style="height: 130px; width: 130px;display:block;
    margin:auto;">
        <?php 
          $q="SELECT * FROM user WHERE email='$temp_email'";
          $result = mysqli_query($conn,$q);
          $row = mysqli_fetch_array($result);
         ?>
        <h2 class="text-center font-weight-bold"><span class="text-primary">Welcome </span><?php echo $row['fname'];?></h2>
        <h6 class="text-center text-dark font-weight-bold py-1 mb-4"><?php echo $row['email'];?></h6>
        <a href="#" class="btn m-auto d-block btn-primary py-3 font-weight-bold" id="update-btn">UPDATE CONTACT DETAILS</a>
        <a href="#" id="change-pwd" class="btn-link btn m-auto d-block py-3">Change Password</a>
        <h5 class="font-weight-bold">Room Details</h5>

        <?php 
             $room="SELECT * FROM rooms WHERE email='$temp_email'";
             $res = mysqli_query($conn,$room);
             $rrow = mysqli_fetch_array($res);
         ?>
        <table class="table table-active">
          
          <tr>
            <th>Your Room No.</th>
            <td><?php echo $rrow['room'];?></td>
          </tr>
        </table>
      </div>
      <div class="col-md-7 mt-4 profile-block">
        <h2 class="font-weight-bold my-2 text-center">Your Personal Information</h2>
        <?php 
          $q="SELECT * FROM user WHERE email='$temp_email'";
          $result = mysqli_query($conn,$q);
          $row = mysqli_fetch_array($result);

         ?>
         <table class="table-hover mx-lg-5 mx-md-3 my-3 text-capitalize table-responsive">
           
        
         <tr>
          <th class="text-uppercase"><label>Full Name</label></th>
          <td class="pl-5"><?php echo $row['fname'];?><?php echo " ";?><?php echo $row['lname'];?></td>
        </tr>
        <tr>
          <th class="text-uppercase"><label>Email</label></th>
          <td class="pl-5 text-lowercase"><?php echo $row['email']; ?></td>
        </tr>
        
        <tr>
          <th class="text-uppercase"><label>Mobile</label></th>
          <td class="pl-5"><?php echo $row['mobile']; ?></td>
        </tr> 
        <tr>
          <th class="text-uppercase"><label>Address</label></th>
          <td class="pl-5"> <?php echo $row['line1']."<br>".$row['line2']."<br>".$row['city'].", ".$row['state'];?></td>
        </tr> 
        <tr>
          <th class="text-uppercase"><label>DOB</label></th>
          <td class="pl-5"><?php echo $row['DOB']; ?></td>
        </tr> 
        <tr>
          <th class="text-uppercase"><label>Gender</label></th>
          <td class="pl-5"><?php echo $row['gender']; ?> </td>
        </tr> 
        <tr>
          <th class="text-uppercase"><label>Parents Name</label></th>
          <td class="pl-5"><?php echo $row['pname']; ?></td>
        </tr>
        <tr>
          <th class="text-uppercase"><label>Parents Number</label></th>
          <td class="pl-5"> <?php echo $row['pnumber']; ?></td>
        </tr>
        <tr>
          <th class="text-uppercase"><label>Parents email</label></th>
          <td class="pl-5"><?php echo $row['pemail']; ?></td>
        </tr> 
        <tr>
          <th class="text-uppercase"><label>College</label></th>
          <td class="pl-5"><?php echo $row['college']; ?></td>
        </tr> 
        <tr>
          <th class="text-uppercase"><label>Branch</label></th>
          <td class="pl-5"><?php echo $row['branch']; ?></td>
        </tr> 
        <tr>
          <th class="text-uppercase"><label>Year</label></th>
          <td class="pl-5"><?php echo $row['year']; ?></td>
        </tr>
         </table>
      </div>
       
    </div>
  </div>
    </div>
<div class="modal fade" id="change-pwd-modal" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="change-pwd.php" method="POST" id="frm">
      <div class="modal-body" id="pwdbody">
        <div ></div>
        <label class="my-2">Enter Your Current Password</label>
        <input type="password" id="myPsw" class="form-control" name="current-pwd" minlength="8" required>
         <label class="my-2">Enter Your New Password</label>
        <input type="password" name="new-pwd" minlength="8" class="form-control" required/>
      </div>
      <div class="modal-footer">
        <button type="submit"  class="btn btn-primary" id="pwdbtn" name="password_change" email="">Change</button>
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="update-modal" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" >UPDATE CONTACT DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="update_contact.php" method="POST" id="update">
      <div class="modal-body" id="updatebody">
        <?php 
        $update = "SELECT * FROM user WHERE email ='".$temp_email."'";
        $qupdate = mysqli_query($conn,$update);
        $updaterow = mysqli_fetch_array($qupdate);


 ?>
        <label class="my-2 text-uppercase font-weight-bold">Address</label>
       
        <p class="my-1">First Line</p>
        <input type="text" name="line1" class="form-control" value="<?php echo $row['line1'];?>">
         <p class="my-1">Second Line</p>
        <input type="text" name="line2" class="form-control" value="<?php echo $row['line2'];?>">
         <p class="my-1">City</p>
        <input type="text" name="city" class="form-control" value="<?php echo $row['city'];?>">
        <p class="my-1">State</p>
        <input type="text" name="state" class="form-control" value="<?php echo $row['state'];?>">
         <label class="my-2 text-uppercase font-weight-bold">Mobile</label>

        
        <input type="text" name="mobile" title="10 Digits Only" pattern="[1-9]{1}[0-9]{9}" minlength="10" value="<?php echo $updaterow['mobile'];?>" class="form-control" required/>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="updatebtn" name="update_contact">Update</button>
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <script>
      
      $(document).ready(function(){
        $("#change-pwd").click(function(){
          $("#change-pwd-modal").modal('show');
        });
     var frm = $('#frm');
        frm.submit(function(e){
            $.ajax({

                type:frm.attr('method'),
                url: frm.attr('action'),
                data: frm.serialize(),
                success: function(data){
                
                  $('#pwdbody').html(data);
                  $('#pwdbtn').hide();
                  $('#change-pwd-modal').on('hidden.bs.modal', function () { 
                            location.reload();
                        })
                }

            });

            e.preventDefault();
        });
          
   $("#update-btn").on('click',function(){
        $("#update-modal").modal('show');
   });
   var update = $('#update');
        update.submit(function(e){
          $.ajax({

                type:update.attr('method'),
                url: update.attr('action'),
                data: update.serialize(),
                success: function(data){
                
                  $('#updatebody').html(data);
                  $('#updatebtn').hide();
                   $('#update-modal').on('hidden.bs.modal', function () { 
                             location.reload();
                         })
                }

            });
          e.preventDefault();

        })
    

      //  $('#change-pwd-modal .modal-footer #change-pwd-btn').on('click', function(event) {
      // var x = document.getElementById("myPsw").value;
      // alert(x);

      // // email= $(this).attr("email");
      //   $.ajax(
      //   {
      //     url:"change-pwd.php",
      //     method: "post",
      //     data: {},
      //     success:function(){
      //       location.reload();
      //     }
      //   });
      // });
    

      });

    </script>
 