<?= $this->extend('base') ?>
<?= $this->section('content') ?>
    <!-- form upload event -->
<div class="card" style="width: 100rem;">
  <div class="card-body"> 
    <h5 class="card-title">Upload your event here.</h5>
    <form method="post" action="<?php echo base_url('/event/upload'); ?>" enctype="multipart/form-data">
      <div class="form-group">
          <label for="name">Event Name:</label>
          <input type="text" class="form-control" style="width: 30rem;" id="name" name="name" required>
      </div>
      <div class="form-group">
          <label for="time">Time:</label>
          <input type="text" class="form-control" style="width: 30rem;" id="time" name="time" required>
      </div>
      <div class="form-group">
        <label for="location">Location:</label>
        <input type="text" class="form-control" style="width: 30rem;" id="location" name="location" required>
      </div>
      <label for="about">About Event:</label>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" style="width: 30rem;" id="floatingTextarea">
        <label for="floatingTextarea2"></label>
      </div>
      <label for="type">Type Event:</label>
      <select class="form-select" style="width: 30rem;" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="Theatre">Theatre</option>
        <option value="Music">Music</option>
        <option value="Art">Art</option>
        <option value="Education">Education</option>
        <option value="Nature">Nature</option>
      </select>
        <div class="form-group">
            <label for="price">Ticket Price:</label>
            <input type="text" class="form-control" style="width: 30rem;" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="quantity">Ticket Quantity:</label>
            <input type="number" class="form-control" style="width: 30rem;" id="quantity" name="quantity" required>
        </div>
      <div class="form-group">
          <label for="photo">Event Image:</label>
          <input type="file" class="form-control-file" id="photo" name="photo" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit Event</button>
    </form>
  </div>
</div>
<?= $this->EndSection() ?>