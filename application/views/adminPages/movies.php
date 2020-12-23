<div class="card">
            <div class="card-body">
            <a href="<?php echo site_url('index.php/admin/add_movie');?>">
                  <i class="zmdi zmdi-plus-square zmdi-hc-lg"></i>  Add Movie</i></a>
                   <br>
                   <br>
            </div>
          </div>

<?php if(isset($movie)){?>
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
              <h5 class="card-title">Movie's</h5>
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Movie Title</th>
      <th scope="col">Movie Poster</th>
      <th scope="col">Movie Rating</th>
      <th scope="col">trailor</th>
      <th scope="col">Movie Gener</th>
      <th scope="col">Movie Plot</th>
      <th scope="col">running time</th>
      <th scope="col">realse date</th>
      <th scope="col">language</th>
      <th scope="col">staring</th>
      <th scope="col">subtitle</th>
                  </tr>
                </thead>
                <?php 
            
 echo "<tbody>";
      foreach( $movie as $r) { 

       
               echo "<tr>"; 
               echo "<td>".$r->movie_id."</td>"; 
               echo "<td>".$r->mov_name."</td>";
               echo "<td><img src=".site_url('assets/poster/').$r->mov_poster." alt='$r->mov_poster' width='100' height='100'></td>"; 
               echo "<td>".$r->mov_ratting."</td>";
               echo "<td>".$r->mov_trailor."</td>";
               echo "<td>".$r->mov_gener."</td>"; 
               echo "<td>".$r->mov_plot."</td>"; 
               echo "<td>".$r->mov_running_time."</td>";
               echo "<td>".$r->mov_realse_date."</td>"; 
               echo "<td>".$r->mov_language."</td>";
               echo "<td>".$r->mov_starring."</td>"; 
               echo "<td>".$r->mov_subtitle."</td>";?>
               
               <td>
                 
               <a href="<?php echo site_url('index.php/admin/deleteMovie/').$r->movie_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/admin/edit_movie/').$r->movie_id;?>">
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



          <!--  Modal ADD Movie-->
