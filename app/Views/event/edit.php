<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<!-- ini masih raw dari template bapaknya -->
<div class="container mt-5 pt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update Event <?= $data['name'] ?></h5>
            <form action="/event/<?= $data['id'] ?>" method="post">
                <input type="hidden" name="_method" value="put" />
                
                <div class="form-group">
                    <label for="name">Event Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" 
                        placeholder="name" required name="name" value="<?= $data['name'] ?>">
                </div>
                
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="text" class="form-control" id="time" aria-describedby="emailHelp" 
                        placeholder="Enter product name" required name="Time" value="<?= $data['Time'] ?>">
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" aria-describedby="emailHelp" 
                        placeholder="location" required name="location" value="<?= $data['location'] ?>">
                </div>

                <div class="form-group">
                    <label for="about">About</label>
                    <input type="text" class="form-control" id="about" aria-describedby="emailHelp" 
                        placeholder="about" required name="about" value="<?= $data['about'] ?>">
                </div>

                <div class="form-group">
                    <label for="quota">quota</label>
                    <input type="number" min="1" class="form-control" id="quota" aria-describedby="emailHelp" 
                        placeholder="quota" required name="quota" value="<?= $data['quota'] ?>">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" min="1" class="form-control" id="price" aria-describedby="emailHelp" 
                        placeholder="price" required name="price" value="<?= $data['price'] ?>">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="Art" <?= $data['category'] == "Art" ? "selected" : "" ?>>Art</option>
                        <option value="Theatre" <?= $data['category'] == "Theatre" ? "selected" : "" ?>> Theatre</option>
                        <option value="Music" <?= $data['category'] == "Music" ? "selected" : "" ?>>Music</option>
                        <option value="Education" <?= $data['category'] == "Education" ? "selected" : "" ?>>Education</option>
                        <option value="Nature" <?= $data['category'] == "Nature" ? "selected" : "" ?>>Nature</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" id="photo" aria-describedby="photoHelp" name="photo" value="<?= $data['photo'] ?>">
                </div>                                                                                                                                                                                                                                                            
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>