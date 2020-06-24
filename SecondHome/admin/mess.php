<?php

include_once('includes/connection.php');
include('sidebar-nav.php');

?>

<style type="text/css">
  .mess-active{
    border-left: 3px solid #007bff;
   
  }
.mess-active > a >i {
   color: #007bff !important;
}
.mess-active > a {
   color: #007bff !important;
  

}

  
</style>
<div class="main-content">
        <div class="container py-2">
              <h4 class="font-weight-bold my-4 mx-2 text-primary">Mess</h4>
          <hr>
          <form class=""></form>
			<select id="day" name="day" class="form-control mb-3" >
<option  value="" selected disabled hidden>Select Day Here</option>
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>

</select>
<!-- button type="" id="messbtn" class="btn ml-auto">Submit</button> -->
       
          <div class="text-capitalize" id="today-menu">
    			
        
            </div>
            </div>
         </div>


         <script>
         	
         	$(document).ready(function() {
    //      		var s = document.getElementsByName('day')[0];
				// var text = s.options[s.selectedIndex].text;
				
				$('#day').change(function(event) {
			day = $( "#day option:selected" ).text();
			//alert(day);
					$.ajax(
					{
						url:"mess-menu.php",
						method: "post",
						data: {day:day},
						success:function(data){
							$('#today-menu').html(data);
							
				
						}
					});

		});

         	});
         </script>
        
