<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">Add Movie</div>
    <hr>


    <?php echo form_open_multipart('admin/add_movie'); ?>
    <div class="form-group">
      <label for="input-6">Title</label>
      <input type="text" class="form-control form-control" name="title" id="input-6" placeholder="Enter Movie Title">
      <div class="text-danger">
        <?php echo form_error('title'); ?>
      </div>
    </div>
    <div class="form-group">
      <label for="input-6">Movie Plot</label>
      <input type="text" class="form-control form-control" name="plot" id="input-6" placeholder="Enter Movie Plot">
      <div class="text-danger">
        <?php echo form_error('plot'); ?>
      </div>
    </div>

    <div class="form-group">
      <label for="input-6">Gener</label>
      <select class="form-control form-control-rounded" name="gener_id" id="input-6">

        <option disabled selected value>Please Choose Gener</option>
        <?php
        foreach ($gener as $g) {
          echo "<option value='$g[gener_id]'>$g[gener] </option>";
        }
        ?>
      </select>
      <div class="text-danger">
        <?php echo form_error('gener_id'); ?>
      </div>
    </div>
    <div class="form-group">
      <label for="input-6">Ratting</label>
      <select class="form-control form-control-rounded" name="rating_id" id="input-6">

        <option disabled selected value>Please Choose Rating</option>
        <?php
        foreach ($rating as $r) {
          echo "<option value='$r[rating_id]'>$r[rating]</option>";
        }
        ?>
      </select>
      <div class="text-danger">
        <?php echo form_error('rating_id'); ?>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Running Time</label>
      <input type="text" class="form-control" name="runningtime">
      <div class="text-danger">
        <?php echo form_error('runningtime'); ?>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Released Date</label>
      <input type="text" class="form-control" name="realsedate" id="datepicker">
      <div class="text-danger">
        <?php echo form_error('realsedate'); ?>
      </div>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Tailer</label>
      <input type="text" class="form-control" name="trailor">
      <div class="text-danger">
        <?php echo form_error('trailor'); ?>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Staring</label>
      <input type="text" class="form-control" name="staring">
      <div class="text-danger">
        <?php echo form_error('staring'); ?>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Language</label>
      <input type="text" class="form-control" name="language">
      <div class="text-danger">
        <?php echo form_error('language'); ?>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInput">synopsis</label>
      <textarea name="mov_synopsis" class="form-control"></textarea>
      <div class="text-danger">
        <?php echo form_error('synopsis'); ?>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Poster Image</label>
      <input type="file" name="userfile" size="20" class="form-control-file" id="exampleFormControlFile1">
      <div class="text-danger">
        <?php echo form_error('userfile'); ?>
      </div>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add Movie</button>
    </div>
    </form>
  </div>
</div>

<!--End Row-->