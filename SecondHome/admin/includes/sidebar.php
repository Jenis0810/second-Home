<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Second Home Admin</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class=" navbar-expand-md navbar-dark bg-dark m-0 p-0">
<div class="container-fluid">
  

      <!-- top-nav -->
      <div class="navbar bg-dark top-navbar fixed-top">
     <a class="navbar-brand font-weight-bold" href="#">Welcome</a>
             <button class="navbar-toggler ml-auto bg-dark navbar-toggler-right" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav ml-auto">
        <li class="nav-item">
        <a href="#s" data-toggle="modal" data-target="#sign-out" class="nav-link">Logout</a>
        </li>
        
      </div>
    </div>
      </div>
     </div>
         <!-- modal -->
    <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Want to leave?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Press logout to leave
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->
            <!-- end of top-nav -->
  
     


      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="">
          <div class="row">

            <!-- sidebar -->
            <div class="sidebar p-2 fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Second Home</a>
              
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="index.php" class="nav-link text-white p-3 mb-2 sidebar-link dashboard-active"><i class="fa fa-dashboard text-light fa-lg sidebar-icons"></i>Dashboard</a></li>
                <li class="nav-item "><a href="profile.php" class="nav-link text-white p-3 mb-2 sidebar-link profile-active"><i class="fas fa-user text-light fa-lg sidebar-icons "></i>Profile</a></li>
                 <li class="nav-item"><a href="rooms.php" class="nav-link text-white p-3 mb-2 sidebar-link rooms-active"><i class="fas fa-bed text-light fa-lg sidebar-icons"></i>Rooms</a></li>
                 <li class="nav-item"><a href="students.php" class="nav-link text-white p-3 mb-2 sidebar-link manage-active"><i class="fas fa-users text-light fa-lg sidebar-icons"></i>Manage Students</a></li>
                 <li class="nav-item"><a href="pending.php" class="nav-link text-white p-3 mb-2 sidebar-link pending-active"><i class="fas fa-external-link-alt text-light fa-lg sidebar-icons"></i>Pending Request</a></li>
                 <li class="nav-item"><a href="messages.php" class="nav-link text-white p-3 mb-2 sidebar-link messages-active"><i class="fab fa-facebook-messenger text-light fa-lg sidebar-icons"></i>Messages</a></li>
     
    </ul>

            </div>
            <!-- end of sidebar -->

            
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->



  <!--   <div class="main-content">
        <div class="container py-2">
          <h3>DASHBOARD</h3>
          <hr>
          <div class="row ">
            
         <div class="col-md-4 mb-3">
           
                <div class="card text-white" style="">
              <div class="card-body p-0" style="background-color: mediumpurple;">
                 <h5 class="card-title text-center py-4">5</h5>
                <p class="text-center">Students</p>
                <hr class="m-0 "> 
                </div>
                
                <div class="full-details py-3" >
                  <a href="" class="">Full Details</a>
                </div>
                
              </div>
            </div>
            <div class="col-md-4 mb-3">
           
                <div class="card" style="">
              <div class="card-body p-0 text-white" style="background-color: green;" >
                 <h5 class="card-title text-center py-4">7</h5>
                <p class="text-center">pending</p>
                <hr class="m-0 "> 
                </div>
                
                <div class="full-details py-3">
                  <a href="" class="">Registatrion</a>
                </div>
                
              </div>
            </div>
          <div class="col-md-4  mb-3">
           
                <div class="card"  style="background-color: skyblue;" >
              <div class="card-body p-0 ">
                 <h5 class="card-title text-center py-4">40</h5>
                <p class="text-center">Total Rooms</p>
                <hr class="m-0 "> 
                </div>
                
                <div class="full-details py-3">
                  <a href="" class="">Full Details</a>
                </div>
                
              </div>
            </div>
            </div>
         </div>
        

        </div>
      
    </div> -->


     <script src="https://kit.fontawesome.com/d49ee124cd.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  </body>
</html>






