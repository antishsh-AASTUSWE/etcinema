<?php if(isset($records)){ ?>

    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Showtime</h5>
			  <div class="table-responsive">
              <?php echo form_open('index.php/pages/add_showtime')?>
                  <form>
               <table class="table table-sm">
                <thead>
                  <tr>
                <th scope="col">Show ID</th>
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
                    <?php foreach( $records as $r) { ?>
                      <input type="text" class="form-control" id="formGroupExampleInput" 
                       name="show_id" readonly value="<?php echo $r['show_id'];?>"  placeholder="id">
                      </div>
                    </td>
                  <td>
                  
                      
                  <div class="form-group">

<?php if(isset($movies)){ ?>
<select name="movie" class="form-control">
  <option disabled selected value><?php echo $r['mov_name'];?></option>
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
        <option disabled selected value><?php echo $r['cinema_name'];?></option>
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
        <input type="date" name="date" max="3000-12-31" placeholder="Select Date" value="<?php echo $r['show_date'];?>"
        min="1000-01-01" class="form-control">
        <div class="text-danger">
    <?php echo form_error('date'); ?>
    </div> 
</div>
                  </td>
                  <td>

                  <div class="form-group">
      <input class="form-control" name="time" type="time" value="08:00 am" value="<?php echo $r['show_time'];?>" id="example-time-input">
      <div class="text-danger">
    <?php echo form_error('time'); ?>
    </div> 
    </div>
                  </td>
                  <td>
                  <div class="form-group">
      <input class="form-control" name="price" type="curency"  id="example-time-input" value="<?php echo $r['Price'];?>">
      <div class="text-danger">
    <?php echo form_error('price'); ?>
    </div> 
      </div>
                  </td>
                </tbody>
              </table>
              <div class="form-group">
<button type="submit" class="btn btn-outline-secondary">Update</button>
</div>
        </form>
            </div>
            </div>
          </div>

<?php }}else{?>
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
        <?php }?>
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
                 
               <a href="<?php echo site_url('index.php/pages/delete_showtime/').$r->show_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/pages/edit_showtime/').$r->show_id;?>">
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
       