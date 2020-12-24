<div class="card">
  <div class="card-body">
    <h5 class="card-title">Add Rating</h5>
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/update_rating') ?>

    <div class="form-group">
    <input type="hidden" name="rating_id" value="<?php echo $items['rating_id']; ?>">
      <label for="formGroupExampleInput">Rating</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="rating" value="<?php echo $items['rating']; ?>">

      <div class="text-danger">
        <?php echo form_error('rating'); ?>
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput">Discription</label>
        <textarea class="form-control" cols="20" rows="5" id="formGroupExampleInput" name="description"><?php echo $items['description']; ?></textarea>
        <div class="text-danger">
          <?php echo form_error('description'); ?>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Update Rating</button>
        <a href="<?php echo base_url(); ?>admin/rating" class="btn btn-light btn-round px-5">Cancel</a>
      </div>
      </form>


    </div>
  </div>
</div>