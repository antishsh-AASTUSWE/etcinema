<div class="card">
  <div class="card-body">

    <h5 class="card-title">Edit Grner</h5>
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/update_gener') ?>

    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="form-group">
          <input type="hidden" name="gener_id" value="<?php echo $items['gener_id']; ?>">
          <input type="text" class="form-control form-control-rounded" name="gener" id="input-8" value="<?php echo $items['gener']; ?>">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Edit Cinema</button>
          <a href="<?php echo base_url(); ?>admin/cinema" class="btn btn-light btn-round px-5">Cancel</a>
        </div>
      </div>
    </div>

    </form>


  </div>
</div>