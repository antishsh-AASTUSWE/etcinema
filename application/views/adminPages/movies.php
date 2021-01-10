<div class="card">
  <div class="card-body">
    <div class="col-lg-6">
      <div class="form-group">
        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-plus"></i> <a href="<?php echo base_url() ?>admin/add_movie">Add Movie</a></button>
      </div>
    </div>
  </div>
</div>
<div class="card">

  <div class="card-body">
    <h5 class="card-title">Movie List</h5>
    <div class="table-responsive">
      <table class="table table-striped" id="mydatatable">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Movie Title</th>
            <th scope="col">Movie Poster</th>
            <th scope="col">Movie Rating</th>
            <th scope="col">Movie Gener</th>
            <th scope="col">running time</th>
            <th scope="col">realse date</th>
            <th scope="col">language</th>
            
            <th scope="col">Edit/Delete</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($movie as $m) : ?>
            <tr>
              <td><?= $m['movie_id']; ?></td>
              <td><?= $m['mov_name']; ?></td>
              <td><img src="<?php echo base_url() ?>assets/poster/<?= $m['mov_poster']; ?>" alt='<?= $m['mov_poster']; ?>' width='100' height='100'></td>
              <td><?= $m['rating']; ?></td>
              <td><?= $m['gener']; ?></td>
              <td><?= $m['mov_running_time']; ?></td>
              <td><?= $m['mov_realse_date']; ?></td>
              <td><?= $m['mov_language']; ?></td>
              
              <td><a href="<?php echo base_url(); ?>admin/edit_movie/<?= $m['movie_id'] ?>" class="btn btn-light btn-round px-5">edit</a><a href="<?php echo base_url(); ?>admin/delete_movie/<?= $m['movie_id'] ?>" class="btn btn-light btn-round px-5 ml-1">Delete</a></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>