
  <div class="card mt-3">
    <div class="card-body">
      <div class="card-title">Add Movie</div>
      <hr>
      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart('pages/add_movies'); ?>
      <div class="form-group">
        <label for="input-6">Title</label>
        <input type="text" class="form-control form-control" name="title" id="input-6" placeholder="Enter Movie Title">
      </div>
      <div class="form-group">
        <label for="input-6">Movie Plot</label>
        <input type="text" class="form-control form-control" name="plot" id="input-6" placeholder="Enter Movie Plot">
      </div>

      <div class="form-group">
        <label for="input-6">Gener</label>
        <select class="form-control form-control-rounded" name="gener" id="input-6">
          <option></option>
          <?php
          foreach ($gener as $g) {
            echo "<option>" . $g['gener'] . "</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="input-6">Ratting</label>
        <select class="form-control form-control-rounded" name="rating" id="input-6">
          <option></option>
          <?php
          foreach ($rating as $r) {
            echo "<option>" . $r['rating'] . "</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Running Time</label>
        <input type="text" class="form-control" name="runningtime">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Released Date</label>
        <input type="text" class="form-control" name="realsedate" id="datepicker">
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Tailer</label>
        <input type="text" class="form-control" name="trailor">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Staring</label>
        <input type="text" class="form-control" name="staring">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Language</label>
        <input type="text" class="form-control" name="language">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Subtitle</label>
        <input type="text" class="form-control" name="subtitle">
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Poster Image</label>
        <input type="file" name="userfile" size="20" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Register</button>
      </div>
      </form>
    </div>
  </div>

<!--End Row-->