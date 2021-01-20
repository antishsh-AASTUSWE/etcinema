<div class="card">
  <div class="card-body">
    <h5 class="card-title">Add Rating</h5>

    <?php echo form_open('staff_add_rating') ?>

    <div class="form-group">
      <label for="formGroupExampleInput">Rating</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="rating" placeholder="Enter Rating Here">

      <div class="text-danger">
        <?php echo form_error('rating'); ?>
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput">Discription</label>
        <textarea type="text" class="form-control" id="formGroupExampleInput" name="description" placeholder="Enter Discription Here"></textarea>
        <div class="text-danger">
          <?php echo form_error('description'); ?>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add Rating</button>
      </div>
      </form>


    </div>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Rating List</h5>
    <div class="table-responsive">
      <table class="table table-hover table-sm">
        <thead>
          <tr>
            <th scope="col">Rating Id</th>
            <th scope="col">Rating Name</th>
            <th scope="col">Rating Discription</th>
            <th scope="col">Edit/Delete</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($rating as $r) : ?>
            <tr>
              <td><?= $r['rating_id']; ?></td>
              <td><?= $r['rating'] ?></td>
              <td><?= word_limiter($r['description'], 6); ?></td>
              <td><a href="<?php echo base_url(); ?>admin_edit_rating/<?= $r['rating_id'] ?>" class="btn btn-light btn-round px-5">edit</a><a href="<?php echo base_url(); ?>admin_delete_rating/<?= $r['rating_id'] ?>" class="btn btn-light btn-round px-5 ml-1">Delete</a></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>