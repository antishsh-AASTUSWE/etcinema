<div class="card">
  <div class="card-body">
    <h5 class="card-title">Add Gener</h5>

    <?php echo form_open('admin/add_gener') ?>
    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="form-group">

          <input type="text" class="form-control" id="formGroupExampleInput" name="gener" placeholder="Gener">
          <div class="text-danger">
            <?php echo form_error('gener'); ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add Gener</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Striped Table</h5>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Gener Id</th>
            <th scope="col">Gener Name</th>
            <th scope="col">Edit/Delete</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($gener as $g) : ?>
            <tr>
              <td><?= $g['gener_id']; ?></td>
              <td><?= $g['gener']; ?></td>
              <td><a href="<?php echo base_url(); ?>admin/edit_gener/<?= $g['gener_id'] ?>" class="btn btn-light btn-round px-5">edit</a><a href="<?php echo base_url(); ?>admin/delete_gener/<?= $g['gener_id'] ?>" class="btn btn-light btn-round px-5 ml-1">Delete</a></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>