<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Experience from around the world</h2>
            <div class="main-button">
              <a class="top-link" href="/event/new">Add New Event</a>
            </div>
          </div>
        </div>
        <?php foreach ($events as $item): ?>
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row row-cols-2 row-cols-lg-5 g-2">
              
              <div class="col-lg-6">
                <div class="image">
                  <img src="/photos/<?= $item['photo'] ?>" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <h4><?= $item['name'] ?></h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-clock"></i>
                      <span class="list"><?= $item['Time'] ?></span>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-map"></i>
                      <span class="list"><?= $item['location'] ?></span>
                    </div>
                  </div>
                  <p><?= $item['about'] ?></p>
                  <div class="row">
                    <div class="col-10 main-button">
                      <a href="/event/<?= $item['id'] ?>">Make a Reservation</a>
                    </div>
                    <!-- <div class="col-5 main-button">
                      <a href="/event/<?= $item['id'] ?>/edit">Edit</a>
                    </div>
                    <div class="col-5 main-button">
                      <a href="reservation.html">Delete</a>
                    </div> -->
                    <div class="btn-group " role="group " aria-label="Basic example ">
                      <form action="/event/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                        <a href="/event/<?= $item['id'] ?>/edit" class="btn btn-info text-white "><i class='fa fa-light fa-pencil'></i></a>
                        <input type="hidden" name="_method" value="DELETE" />
                        <button class="btn btn-danger text-white" type="submit">
                            <i class='fa fa-light fa-trash'></i>
                        </button>
                      </form>
                    </div>
                    <div class="col-6">
                        <p>tickets issued:</p>
                        <i class='fa fa-user'></i>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
      <div class="col-12">
        <?= $pager->links('events', 'custom_pagination') ?>
      </div>
    </div>
</div>
<?= $this->EndSection() ?>