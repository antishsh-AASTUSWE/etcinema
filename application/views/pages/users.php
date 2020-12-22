<div class="card">
  <div class="card-body">

    <!-- Button trigger modal -->
    <a href="<?php echo base_url() ?>add_user" class="btn btn-primary">
      <i class="zmdi zmdi-plus-circle"></i> <span>Add users</span>
    </a>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Users List</h5>
    <div class="table-responsive">
      <table class="table table-striped" id="mydatatable">
        <thead>
          <tr>
            <th scope="col">User Id</th>
            <th scope="col">User Name</th>
            <th scope="col">User Roll</th>
            <th scope="col">User Status</th>
            <th scope="col">Edit/Delete</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($user as $u) : ?>
            <tr>
              <td><?= $u['user_id']; ?></td>
              <td><?= $u['name']; ?></td>
              <td><?= $u['role']; ?></td>
              <td><?= $u['status']; ?></td>
              <td><a href="<?php echo base_url(); ?>pages/edit_user/<?= $u['user_id'] ?>" class="btn btn-light btn-round px-5">edit</a><a href="<?php echo base_url(); ?>pages/delete_user/<?= $u['user_id'] ?>" class="btn btn-light btn-round px-5 ml-1">Delete</a></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<table class="table" id="table_id">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>