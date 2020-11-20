
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Showtime</h5>
			  <div class="table-responsive">
              <?php echo form_open('index.php/pages/add_showtime')?>
                  <form>
               <table class="table table-sm">
                <thead>
                  <tr>
                <th scope="col">Movie</th>
                <th scope="col">Cinema</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <td>
                  <div class="form-group">

<?php if(isset($movies)){ ?>
<select name="movie" class="form-control">
  <option disabled selected value>Please Choose Movie</option>
  <?php foreach( $movies as $y) { ?>
   <?php echo "<option>".$y->mov_name."</option>";}}?>
</select>

<div class="text-danger">
    <?php echo form_error('movie'); ?>
    </div> 
  </div>
                  </td>
                  <td>
                  <div class="form-group">
        
        <?php if(isset($cinema)){ ?>
      <select name="cinema" class="form-control">
        <option disabled selected value>Please Choose Cinima</option>
        <?php foreach( $cinema as $c) { ?>
         <?php echo "<option>".$c->cinema_name."</option>";}} ?>
      </select>
      <div class="text-danger">
    <?php echo form_error('cinema'); ?>
    </div> 
        </div>
                  </td>
                  <td>
                  <div class="form-group">
        <input type="date" name="date" max="3000-12-31" placeholder="Select Date"
        min="1000-01-01" class="form-control">
        <div class="text-danger">
    <?php echo form_error('date'); ?>
    </div> 
</div>
                  </td>
                  <td>

                  <div class="form-group">
      <input class="form-control" name="time" type="time" value="08:00 am" id="example-time-input">
      <div class="text-danger">
    <?php echo form_error('time'); ?>
    </div> 
    </div>
                  </td>
                  <td>
                  <div class="form-group">
      <input class="form-control" name="price" type="curency"  id="example-time-input">
      <div class="text-danger">
    <?php echo form_error('price'); ?>
    </div> 
      </div>
                  </td>
                </tbody>
              </table>
              <div class="form-group">
<button type="submit" class="btn btn-outline-secondary">Add</button>
</div>
        </form>
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
      <th scope="col">Movie</th>
      <th scope="col">Cinima</th>
      <th scope="col">date</th>
      <th scope="col">Time</th>
      <th scope="col">Price</th>
                  </tr>
                </thead>
                <?php 
            
 echo "<tbody>";
      foreach( $showtime as $r) { 

       
               echo "<tr>"; 
               echo "<td>".$r->show_id."</td>"; 
               echo "<td>".$r->mov_id."</td>";
               echo "<td>".$r->cinema_id."</td>";
               echo "<td>".$r->show_date."</td>";
               echo "<td>".$r->show_time."</td>";
               echo "<td>".$r->Price."</td>";?>
               
               <td>
                 
                   <button type="button" class="btn btn-dark">
                   <a href="<?php echo site_url('index.php/admin_dashbord/edit_rating/').$r->show_id;?>"><i class="fas fa-edit"></i>
                       
                   </a></button>
                   <button type="button" class="btn btn-dark">
                   <a href="<?php echo site_url('index.php/admin_dashbord/delete_rating/').$r->show_id;?>"><i class="fas fa-trash-alt"></i>
                       
                   </a></button>
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
       