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
    .messages-active{
        background-color: deepskyblue;
    }
    body{
        background-color: #14171a;

    }

  </style> 

<script>

function submitChat() {
   // alert("enter message");
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
	
	xmlhttp.open('GET','insertmsg.php?&msg='+msg,true);
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
	setInterval( function(){ $('#chatlogs').load('logsmsg.php'); }, 2000 );
});
var observe;
if (window.attachEvent) {
    observe = function (element, event, handler) {
        element.attachEvent('on'+event, handler);
    };
}
else {
    observe = function (element, event, handler) {
        element.addEventListener(event, handler, false);
    };
}
function init () {
    var text = document.getElementById('msg_area');
    function resize () {
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }
    /* 0-timeout to get the already changed text */
    function delayedResize () {
        window.setTimeout(resize, 0);
    }
    observe(text, 'change',  resize);
    observe(text, 'cut',     delayedResize);
    observe(text, 'paste',   delayedResize);
    observe(text, 'drop',    delayedResize);
    observe(text, 'keydown', delayedResize);

    text.focus();
    text.select();
    resize();
}
</script>

<style> textarea { border: 0 none white; overflow: hidden; padding: 0;
outline: none; background-color: #D0D0D0; resize:none; } 

.msg-box{ position:
fixed; z-index: 10; background-color: #14171a; } 
#chatlogs{ 
 margin-top: 130px;
  } </style>




<div id="content-wrapper">
<div class="container p-0">
 	<div class="row ">
        
    <div class="col-10 ml-lg-5 ml-md-5 msg-box">
        
   
     <h2 class="font-weight-bold text-center text-white">Messages</h2>
      <form name="form1" class="text-white mb-2" id="form" class="">
<div class="input-group">
  <body onload="init();">
<textarea rows="1" id="msg_area" name="msg" class="form-control width100" style="height:1.2em;"></textarea>
</body>
<!-- <textarea id="msg_area" name="msg" class="form-control width100"></textarea> -->
    <span class="input-group-btn mx-lg-4">
        <button onclick="submitChat()" class="btn btn-info form-control">Send</button>
    </span>
   
</div>
 </form>
<!--     <div class="input-group">
    <form name="form1" class="text-white" id="form">
Your Message: <br/>
    <input class="form-control width100">

<textarea id="msg_area" name="msg" class="form-control width100"></textarea><br />
<a href="#" onclick="submitChat()" class="btn btn-dark input-group-btn">Send</a>
</form>
</div> -->
</div>
 </div>
<div id="chatlogs" class="col-md-12 p-0" style="" >
LOADING CHATLOG...
</div>
</div>
</div>








    