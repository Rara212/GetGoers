<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Host New Event</h5>

            <form action="/event" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="name">Event Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" 
                        placeholder="name" required name="name">
                </div>

                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="text" class="form-control" id="time" aria-describedby="emailHelp" 
                        placeholder="Enter product name" required name="Time">
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" aria-describedby="emailHelp" 
                        placeholder="location" required name="location">
                </div>

                <div class="form-group">
                    <label for="about">About</label>
                    <input type="text" class="form-control" id="about" aria-describedby="emailHelp" 
                        placeholder="about" required name="about">
                </div>

                <div class="form-group">
                    <label for="quota">quota</label>
                    <input type="number" min="1" class="form-control" id="quota" aria-describedby="emailHelp" 
                        placeholder="quota" required name="quota">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" min="1" class="form-control" id="price" aria-describedby="emailHelp" 
                        placeholder="price" required name="price">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="Art">Art</option>
                        <option value="Theatre"> Theatre</option>
                        <option value="Music">Music</option>
                        <option value="Education">Education</option>
                        <option value="Nature">Nature</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" id="photo" aria-describedby="photoHelp" name="photo">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- <div class="container">
  <div class="row mb-4">
    <div class="col-12"> 
      <h5 class="card-title">Upload your event here.</h5>
      <form action="/event" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">Event Name:</label>
            <input type="text" class="form-control" style="width: 30rem;" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <input type="text" class="form-control" style="width: 30rem;" id="time" name="Time" required>
        </div>

        <div class="form-group">
          <label for="location">Location:</label>
          <input type="text" class="form-control" style="width: 30rem;" id="location" name="location" required>
        </div>

        <div class="form-group">
          <label for="about">About Event:</label>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" style="width: 30rem;" id="floatingTextarea" name="about">
            <label for="floatingTextarea2"></label>
          </div>
        </div>

        <div class="form-group">
          <label for="type">Type Event:</label>
          <select class="form-select" style="width: 30rem;" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="Theatre">Theatre</option>
            <option value="Music">Music</option>
            <option value="Art">Art</option>
            <option value="Education">Education</option>
            <option value="Nature">Nature</option>
          </select>
        </div>

        <div class="form-group">
            <label for="price">Ticket Price:</label>
            <input type="text" class="form-control" style="width: 30rem;" id="price" name="price" required>
        </div>

        <div class="form-group">
            <label for="quantity">Ticket Quantity:</label>
            <input type="number" class="form-control" style="width: 30rem;" id="quantity" name="quota" required>
        </div>

        <div class="form-group">
            <label for="photo">Event Image:</label>
            <input type="file" class="form-control-file" id="photo" name="photo" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit Event</button>
      </form>
    </div>
  </div>
</div> -->
<?= $this->EndSection() ?>