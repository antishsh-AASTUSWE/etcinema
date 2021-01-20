<div class="card">
    <div class="card-body">
    <?php echo form_open('staff_addSeat') ?>
        <form method="post" action="">
        <h5 class="card-title">Add Seat Layout</h5>
        <div class="form-group">
      <label for="input-6">Select Cinema</label>
      <select class="form-control form-control-rounded" name="cinema" id="input-6">

        <option disabled selected value>Please Choose Cinema</option>
        <?php
        if(isset($cinema)){
           
        foreach ($cinema as $g) {
          echo "<option value='$g[cinema_id]'>$g[cinema_name] </option>";
        }}
        ?>
      </select>
      <div class="text-danger">
        <?php echo form_error('cinema'); ?>
      </div>
    </div>


            <div class="form-group">
                <label for="formGroupExampleInput">Seat Row</label>
                <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" name="row" placeholder="Seat Row">
                <div class="text-danger">
                    <?php echo form_error('row'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Seat Col</label>
                <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" name="col" placeholder="Seat Col">
                <div class="text-danger">
                    <?php echo form_error('col'); ?>
                </div>
            </div>
 


            <div class="col-lg-6">
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add Seat Row & Col</button>
                </div>
            </div>
        </form>


    </div>
</div>