<?= $this->extend('base') ?>
<?= $this->section('content') ?>
  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Welcome <?= session('name')?></h2>
              <h1>How to start</h1>
              <div class="border-button"><a href="/event/index">Explore</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe "></i>
                        <h4>Find events worldwide</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-ticket"></i>
                        <h4>Book your favorite ones</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4>All from the comfort of your home</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="/event/index">Start Here</a>
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
  </section>
  <section class="about-section section-padding" id="section_2">
            <div class="container" style="margin-top:-150px !important;">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center" >
                        <div class="services-info">
                            <h1 class="text-black mb-4">About Get Goers</h1>

                            <p class="text-black">GET GOERS, A platform that connects people with various experiences; by providing technology solutions for experience creators (such as event organizers and venue owners) and providing exciting experience options for experience seekers through applications and websites. Book your events and activities online with the GET GOERS app.</p>

                            <h6 class="text-black mt-4">Event types</h6>

                            <p class="text-black">there are several events starting from:
                               art, nature, theatre, music and education</p>

                            <h4 class="text-black mt-4">"Together with Get Goers, Ready to enliven your event with an unforgettable experience!"</h4>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="/assets/frontend/assets/images/gg.png" class="about-image img-fluid">

                            <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-person"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

  <!-- ***** Main Banner Area End ***** -->
<?= $this->endSection() ?>
