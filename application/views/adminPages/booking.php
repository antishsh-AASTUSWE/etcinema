<div class="card">
            <div class="card-body">
            <a href="<?php echo site_url('index.php/admin/add_booking');?>">
                  <i class="zmdi zmdi-plus-square zmdi-hc-lg"></i>  Book A movie</i></a>
                   <br>
                   <br>
            </div>
          </div>
 <?php if(isset($booking)){?>
          <div class="card">
            <div class="card-body">

            
                   <?php if ($message = $this->session->flashdata('message')): ?>
			<div class="row">
				<div class="col-md-6">
					<div class="alert alert-success alert-dismissble">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $message; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
              <h5 class="card-title">Bookings</h5>
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Showtime</th>
      <th scope="col">User</th>
      <th scope="col">Seat No</th>
      <th scope="col">Tickets</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
      <th scope="col"></th>
                  </tr>
                </thead>
                <?php 
            
 echo "<tbody>";
      foreach( $booking as $r) { 

       
              
               echo "<tr>"; 
               echo "<td>".$r->booking_id."</td>"; 
               echo "<td>".$r->show_id."</td>"; 
               echo "<td>".$r->user_id."</td>"; 
               echo "<td>".$r->seat_id."</td>"; 
               echo "<td>".$r->Tickets."</td>"; 
               echo "<td>".$r->Status."</td>";?>
               
               <td>
                 
               <a href="<?php echo site_url('index.php/admin/deleteBooking/').$r->booking_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/admin/edit_booking/').$r->booking_id;?>">
                   <i class="zmdi zmdi-edit zmdi-hc-lg"></i></a>
           
                   
                  
                </td>
               <?php echo "<tr>"; 
         
   echo " </tbody>";
}
?>
</table>
<?php } ?>
              
            </div>
            </div>
          </div>