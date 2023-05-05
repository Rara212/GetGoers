<!DOCTYPE html>
<html lang="en">

  <head>
    <?= $this->include('layouts/head') ?>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
    <?= $this->include('layouts/navbar') ?>
  <!-- ***** Header Area End ***** -->

  <!-- Main Content --->
  <div id="content">
    <?= $this->renderSection('content') ?>
  </div>

  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Are You Looking For an Event ?</h2>
          <h4>Book Now By Clicking The Button</h4>
        </div>
        <div class="col-lg-4">
          <div class="border-button">
            <a href="reservation.html">Book Yours Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->include('layouts/footer') ?>
  
  <!-- Scripts -->
  <?= $this->include('layouts/scripts') ?>
  </body>

</html>