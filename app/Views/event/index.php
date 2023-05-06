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
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row row-cols-2 row-cols-lg-5 g-2">
              <?php foreach ($events as $item): ?>
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
                  <div class="main-button">
                    <a href="reservation.html">Make a Reservation</a>
                  </div>
                </div>
              </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?= $this->EndSection() ?>