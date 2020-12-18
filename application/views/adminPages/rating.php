<div class="card">
            <div class="card-body">
            <a href="<?php echo site_url('index.php/admin/add_rating');?>">
                  <i class="zmdi zmdi-plus-square zmdi-hc-lg"></i>  Add Rating</i></a>
                   <br>
                   <br>
            </div>
          </div>

 <?php if(isset($rating)){?>
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
              <h5 class="card-title">Rating</h5>
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Rating</th>
      <th scope="col">Discription</th>
      <th scope="col"></th>
      <th scope="col"></th>
                  </tr>
                </thead>
                <?php 
            
 echo "<tbody>";
      foreach( $rating as $r) { 

       
             
        echo "<tr>"; 
        echo "<td>".$r->rating_id."</td>"; 
        echo "<td>".$r->rating."</td>";
        echo "<td>".$r->description."</td>";?>
               
               <td>
                 
               <a href="<?php echo site_url('index.php/admin/deleteRating/').$r->rating_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/admin/edit_rating/').$r->rating_id;?>">
                   <i class="zmdi zmdi-edit zmdi-hc-lg"></i></a>
           
                   
                  
                </td>
               <?php echo "<tr>"; 
         
   echo " </tbody>";
}
?>
</table>
<?php } else{?>
  <p>No record Found</p>
  <?php } ?>
              
            </div>
            </div>
          </div>