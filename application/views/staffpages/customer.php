
<div class="card">
  <div class="card-body">
      <div class="col-lg-6">
        <div class="form-group">
          <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-plus">

          </i> <a href="<?php echo base_url() ?>staff/add_customer">Add New Customer</a></button>
        </div>
      </div>
  </div>
</div>
<?php if(isset($customer)){ ?>
<div class="card">

  <div class="card-body">
    <h5 class="card-title">Customer List</h5>
    <div class="table-responsive">
      <table class="table table-striped" id="mydatatable">
        <thead>
          <tr>
      <th scope="col">ID</th>
      <th scope="col">Firsr Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Joined Date</th>
      <th scope="col">Edit/Delete</th>
     
          </tr>
        </thead>
        <tbody>
          <?php foreach ($customer as $c) : ?>
            <tr>
              <td><?= $c['cust_id']; ?></td>
              <td><?= $c['first_name']; ?></td>
              <td><?= $c['last_name']; ?></td>
              <td><?= $c['email']; ?></td>
              <td><?= $c['phone_no']; ?></td>
              <td><?= $c['DBO']; ?></td>
              <td><?= $c['joined_date']; ?></td>
             
               
              <td><a href="<?php echo base_url(); ?>staff/edit_customer/<?= $c['cust_id'] ?>"
               class="btn btn-light btn-round px-5">edit</a><a href="<?php echo base_url(); ?>staff/delete_customer/<?= $c['cust_id'] ?>" class="btn btn-light btn-round px-5 ml-1">Delete</a></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
          <?php }else { ?>
              <div class="card">
              <div class="card-body">
             NO Data found!
              </div>
          </div>
        <?php  }?>
