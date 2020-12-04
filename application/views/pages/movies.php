<div class="card">
            <div class="card-body">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
<i class="zmdi zmdi-plus-circle"></i> <span>Add Movie</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>


            
</div>
 

<?php if(isset($showtime)){?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Showtime's</h5>
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
      <th scope="col">running_time</th>
      <th scope="col">realse_date</th>
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
               echo "<td>".$r->mov_poster."</td>"; 
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
                 
               <a href="<?php echo site_url('index.php/pages/delete_movie/').$r->show_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/pages/edit_movie/').$r->show_id;?>">
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
