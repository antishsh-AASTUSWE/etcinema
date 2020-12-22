<div class="card">
            <div class="card-body">
            <a href="<?php echo site_url('index.php/admin/add_showtime');?>">
                  <i class="zmdi zmdi-plus-square zmdi-hc-lg"></i>  Add Showtime</i></a>
                  <br>
                  <br>
            </div>
          </div> 
       <?php if(isset($showtime)){?>
          <div class="card">
            <div class="card-body">
            
              <h5 class="card-title">Showtime's</h5>
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
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Movie</th>
      <th scope="col">Cinima</th>
      <th scope="col">date</th>
      <th scope="col">Time</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
      <th scope="col"></th>
                  </tr>
                </thead>
                <?php 
             
 echo "<tbody>";
      foreach( $showtime as $r) { 

       
               echo "<tr>"; 
               echo "<td>".$r->show_id."</td>"; 
               echo "<td>".$r->mov_name."</td>";
               echo "<td>".$r->cinema_name."</td>";
               echo "<td>".$r->show_date."</td>";
               echo "<td>".$r->show_time."</td>";
               echo "<td>".$r->Price."</td>";?>
               
               <td>
                 
               <a href="<?php echo site_url('index.php/admin/deleteShowtime/').$r->show_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/admin/edit_showtime/').$r->show_id;?>">
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
       