<div class="card">
            <div class="card-body">
            <a href="<?php echo site_url('index.php/admin/add_user');?>">
                  <i class="zmdi zmdi-plus-square zmdi-hc-lg"></i>  Add User</i></a>
                   <br>
                   <br>
            </div>
          </div>
 <?php if(isset($user)){?>
          <div class="card">
            <div class="card-body">
            
              <h5 class="card-title">Cinema</h5>
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Birth Date</th>
      <th scope="col">User Role</th>
      <th scope="col">Registerd Date</th>
      <th scope="col"></th>
      <th scope="col"></th>
                  </tr>
                </thead>
                <?php 
            
 echo "<tbody>";
      foreach( $user as $r) { 

       
             
               echo "<tr>"; 
               echo "<td>".$r->user_id."</td>"; 
               echo "<td>".$r->name."</td>";
               echo "<td>".$r->email."</td>"; 
               echo "<td>".$r->phone_no."</td>";
               echo "<td>".$r->date_of_birth."</td>";
               echo "<td>".$r->role."</td>"; 
               echo "<td>".$r->Reg_date."</td>"; 
                
               ?>
               <td>
                 
               <a href="<?php echo site_url('index.php/admin/deleteUser/').$r->user_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/admin/edit_user/').$r->user_id;?>">
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