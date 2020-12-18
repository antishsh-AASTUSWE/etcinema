<div class="card">
            <div class="card-body">
            <a href="<?php echo site_url('index.php/admin/add_cinema');?>">
                  <i class="zmdi zmdi-plus-square zmdi-hc-lg"></i>  Add Cinema</i></a>
                   <br>
                   <br>
            </div>
          </div>
 <?php if(isset($cinema)){?>
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
              <h5 class="card-title">Cinema</h5>
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Cinema Name</th>
      <th scope="col"></th>
      <th scope="col"></th>
                  </tr>
                </thead>
                <?php 
            
 echo "<tbody>";
      foreach( $cinema as $r) { 

       
              
               echo "<tr>"; 
               echo "<td>".$r->cinema_id."</td>"; 
               echo "<td>".$r->cinema_name."</td>";?>
               
               <td>
                 
               <a href="<?php echo site_url('index.php/admin/deleteCinema/').$r->cinema_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/admin/edit_cinema/').$r->cinema_id;?>">
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