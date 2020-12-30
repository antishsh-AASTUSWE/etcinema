<div class="card">
  <div class="card-body">
    <a href="<?php echo base_url(); ?>admin/add_showtime">
      <i class="zmdi zmdi-plus-square zmdi-hc-lg"></i> Add Showtime</i></a>
    <br>
    <br>
  </div>
</div>

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


    <tbody>
      <?php foreach ($showtime as $r) : ?>
        <tr>
          <td><?= $r['show_id']; ?></td>
          <td><?= $r['mov_name']; ?></td>
          <td><?= $r['cinema_name']; ?></td>
          <td><?= $r['show_date']; ?></td>
          <td><?= $r['show_time']; ?></td>
          <!-- <td><?= $r['Price']; ?> </td> -->
          <td> <a href="<?php echo base_url(); ?>admin/deleteShowtime/<?=$r['show_id']; ?>">
              <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a></td>
          <td> <a href="<?php echo base_url(); ?>admin/edit_showtime/<?=$r['show_id']; ?>">
              <i class="zmdi zmdi-edit zmdi-hc-lg"></i></a> </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>


</div>