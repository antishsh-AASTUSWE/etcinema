<div class="row">
    <div class="col-12 col-lg-6 col-xl-6">
<div class="card">
  <div class="card-body">

    <h5 class="card-title">Check Ticket</h5>
    <?php echo form_open('staff_check') ?>

        <div class="form-group">
        <label for="input-6">Username</label>
          <input type="text" class="form-control form-control-rounded" name="username" id="input-8" >
          <div class="text-danger">
        <?php echo form_error('username'); ?>
      </div>
        </div>
      
 
        <div class="form-group">
        <label for="input-6">Ticket Number</label>
          <input type="text" class="form-control form-control-rounded" name="ticket" id="input-8" >
          <div class="text-danger">
        <?php echo form_error('ticket'); ?>
      </div>
        </div>
      
    
        <div class="form-group">
          <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Check</button>
          <a href="<?php echo base_url(); ?>staff_dashboard" class="btn btn-light btn-round px-5">Cancel</a>
        </div>
      
      
    </form>


  </div>
</div>
    </div>

<div class="col-12 col-lg-6 col-xl-6">
        <div class="card">
            <div class="card-body">
            <?php if(isset($error)){?>
            <h2 style="color:#66ff00;" >Ticket Confirmed</h2>
            <?php } elseif(isset($pass)){?>
            <h2 style="color:#ff0000;" >Invalid Ticket </h2>
            <?php } ?>
            </div>
        </div>
</div>
</div>

