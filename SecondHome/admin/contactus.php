<?php

include_once('includes/connection.php');
include('sidebar-nav.php');

?>

<style type="text/css">
  .contact-active{
    border-left: 3px solid #007bff;
   
  }
.contact-active > a >i {
   color: #007bff !important;
}
.contact-active > a {
   color: #007bff !important;
  

}
</style>
<div class="main-content">
        <div class="container py-2 table-responsive">
              <h4 class="font-weight-bold my-4 mx-2 text-primary">Visitors Messages</h4>

              <table class="table table-hover">
              	<thead>
              		<tr>
              			<th>Sr No.</th>
              			<th>Name</th>
              			<th>Email</th>
              			<th>Mobile No.</th>
              			<th>Messages</th>
              		</tr>
              	</thead>
              	<tbody>
              		
              
              <?php 
              $count = 1;
              	$q= "SELECT * FROM contact";
              	$sql = mysqli_query($con,$q);
              		while ($row = mysqli_fetch_array($sql)) {
              		    echo '<tr>
              		    <td>' .$count. '</td>
              			<td>' .$row['name']. '</td>
              			<td><a href="mailto:'.$row['email'].'">' .$row['email']. '</a></td>
              			<td ><a href="tel:' .$row['mobile']. '">' .$row['mobile']. '</a></td>
              			<td>' .$row['message']. '</td>

              		</tr>';
              		$count++;
              		}
               ?>

	</tbody>
              </table>
          <hr>
          </div>
      </div>

