<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Student Homepage</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="navstyle.css">
</head>
<body>
	
	<div class="sidebar" id="nav-sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()"> 

		 <div class="sidebar-brand">
      	<h2 class="text-white pt-3">Welcome</h2>
    </div>
	
	<ul class="sidebar-nav p-0 mt-5" style="list-style-type: none;">
      <li class="li-hover">
        <a href="profile.php" class="profile-active" id="profile"><i class="fa fa-user"></i>Profile</a>
      </li>
      <li class="li-hover">
        <a href="discussion.php" class="forum-active"><i class="fa fa-external-link-alt"></i>Discussion</a>
      </li>
        <li class="li-hover">
        <a href="notice.php" class="events-active"><i class="fa fa-comments"></i>Notice</a>
      </li >
       <li class="li-hover">
        <li>
        <a href="mess.php" class="mess-active"><i class="fa fa-pizza-slice"></i>Mess Menu</a>
      </li>
       <li class="li-hover">
        <a href="messages.php" class="messages-active"><i class="fa fa-comments"></i>Messages</a>
      </li>
      <li class="li-hover">
        <a href="#" class="logout-active" id="logout-li" data-toggle="modal" data-target="#logout-modal"><i class="fa fa-sign-out"></i>Logout</a>
      </li>
    </ul>

    </div>


  
    

<!-- <div id="content-wrapper">
  <h2>A simple sidebar.</h2>
  <p>The sidebar is in fixed position and does not close.</p>

     -->


  <div class="modal fade" id="logout-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title font-weight-bold">Want to leave?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Press logout to leave
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
            <button type="button" id="logoutbtn" class="btn btn-danger" data-dismiss="modal">Logout</button>
          </div>
        </div>
      </div>
</div>


 <script src="https://kit.fontawesome.com/d49ee124cd.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
<script>

    $("#logoutbtn").on('click',function(event){


            $.ajax(
            {
                url:"logout.php",
                method:"POST",
                success:function(){
                    window.location.href = "../index.html";
                }


            });
    });
 
	var mini = true;
function toggleSidebar() {
if (mini) {
document.getElementById("nav-sidebar").style.width = "250px";
document.getElementById("content-wrapper").style.marginLeft = "250px";
this.mini = false;
} 
else {
document.getElementById("nav-sidebar").style.width = "60px";
document.getElementById("content-wrapper").style.marginLeft = "60px";
this.mini = true;
 }

}

</script>
</html>