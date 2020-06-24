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




<head>
<title>Chat Box</title>

<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>

function submitChat() {
	if( form1.msg.value == '') {
		alert("enter message");
		return;
	}
	// var uname = form1.uname.value;
	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 20) {
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','insert.php?&msg='+msg,true);
	xmlhttp.send();
	form1.msg.value = '';
}

$(document).ready(function(e){
	$.ajaxSetup({
		cache: false
	});
	$( "#msg_area" ).keyup(function(e) {
		  var code = e.keyCode || e.which;

		 if(code == 13) { //Enter keycode
		   submitChat();
		 }
	});
	setInterval( function(){ $('#chatlogs').load('logs.php'); }, 2000 );
});

</script>
<style>
#content-wrapper{
	background:linear-gradient(to right,#0f2027,#2c5364);
	height: 100vh;
	overflow: hidden;
}
.main-container{
	
}
#chatlogs{

   background-color: #999999;
	height:453px;
	border: 1px solid black;
	border-radius: 14px;
	overflow:auto;
	
}
/* Smartphones (portrait and landscape) ----------- */
/* Smartphones (portrait and landscape) ----------- */
/* -------------responsive h1  */
@media (max-width: 1200px) {	
} 
@media (max-width: 992px) {

	
} 
@media (max-width: 768px) {
  #chatlogs{
   	height: 400px;
   }
}
	

@media (max-width: 576px) {
   

}

</style>

</head>

<div id="content-wrapper">
<div class="container main-container">
 	
     <h2 class="font-weight-bold text-center text-white">Discussion</h2>
<div class="row">

    <div class="col-md-10">
    <form name="form1" id="form">
Your Message: <br />
<textarea id="msg_area" name="msg" class="form-control "></textarea><br />

</form>
</div>
<div class="col-md-2 d-flex text-center">
<a href="#" onclick="submitChat()" class="btn btn-primary align-self-center mx-auto mb-3 mb-md-0">Send</a>
    </div>
    
    </div>

</div>


     




<!-- <h4 class="text-center">hjkadjhfahjfdjh</h4>
<form name="form1" id="form">
Your Message: <br />
<textarea id="msg_area" name="msg" class="form-control "></textarea><br />
<a href="#" onclick="submitChat()" class="btn btn-dark">Send</a><br /><br />
</form>
<div id="chatlogs" >
LOADING CHATLOG...
</div>
 -->

<div id="chatlogs" class="col-md-12" >
LOADING CHATS...
</div>



</div>