<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<!-- ini masih raw dari template bapaknya -->
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update Event <?= $data['name'] ?></h5>

            <form action="/event/<?= $data['id'] ?>" method="post">
                <input type="hidden" name="_method" value="put" />
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
<?= $this->endSection() ?>