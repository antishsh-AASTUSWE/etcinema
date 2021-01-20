<div class="card">
  <div class="card-body">

    <h5 class="card-title">Add Cinema</h5>
    <?php echo validation_errors(); ?>
    <?php echo form_open('staff_add_cinema') ?>

    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="form-group">

          <input type="text" class="form-control form-control-rounded" name="cinema_name" id="input-8" placeholder="Enter Cinema Name Here">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add Cinema</button>
        </div>
      </div>
    </div>

    </form>


  </div>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Cinema List</h5>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Cinema Id</th>
            <th scope="col">Cinema Name</th>
            <th scope="col">Edit/Delete</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($cinema as $c) : ?>
            <tr>
              <td><?= $c['cinema_id']; ?></td>
              <td><?= $c['cinema_name']; ?></td>
              <td><a href="<?php echo base_url(); ?>staff_edit_cinema/<?= $c['cinema_id'] ?>" class="btn btn-light btn-round px-5">edit</a><a href="<?php echo base_url(); ?>staff_delete_cinema/<?= $c['cinema_id'] ?>" class="btn btn-light btn-round px-5 ml-1">Delete</a></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>