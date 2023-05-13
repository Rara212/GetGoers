<?= $this->extend('baseadmin') ?>
<?= $this->section('content') ?>
  <div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Event Details</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="items">
            <div class="row">
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="/photos/<?= $data['photo'] ?>" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4><?= $data['name'] ?></h4>
                        <div class="main-button">
                          <a href="/registration/<?= $data['id'] ?>">Book Now</a>
                        </div>
                        <p><?= $data['about'] ?></p>
                        <ul class="info">
                          <li><i class="fa fa-calendar"></i> <?= $data['Time'] ?></li>
                          <li><i class="fa fa-globe"></i> <?= $data['location'] ?></li>
                          <li><i class="fa fa-ticket"></i>$<?= $data['price'] ?></li>
                        </ul>
                        <div class="text-button">
                          <a href="about.html">Contact info <i class="fa fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>