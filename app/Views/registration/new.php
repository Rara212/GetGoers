<?= $this->extend('base') ?>
<?= $this->section('content') ?>
  <div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Booking Page</h2>
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
                    <!--Ubah nya dari sini -->
                    <div class="card" style="width: 50rem;">
                    <div class="card-body">
                      <h5 class="card-title">Buyer Information</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Make sure all the information is correct. You cannot change it.</h6>
                      <form>
                        <div class="mb-3">
                          <label for="inputEmail" class="form-label">Email Address</label>
                          <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                          <div id="emailHelp" class="form-text">Tickets will be sent to this email</div>
                        </div>
                        <div class="row mb-3">
                          <div class="col">
                            <label for="inputFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="inputFirstName" placeholder="Enter first name">
                          </div>
                          <div class="col">
                            <label for="inputLastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="inputLastName" placeholder="Enter last name">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col">
                            <label for="inputCountryCode" class="form-label">Country Code</label>
                            <select id="inputCountryCode" class="form-select" style="width: 10rem;">
                              <option selected>+62</option>
                              <option>+63</option>
                              <option>+64</option>
                              <option>+65</option>
                            </select>
                          </div>
                          <div class="col">
                            <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" style="width: 30rem;" id="inputPhoneNumber" placeholder="Enter phone number">
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="inputGender" class="form-label">Gender</label>
                          <div>
                            <div class="form-check form-check-inline">
                              <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                              <label class="btn btn-primary" style="width: 15rem;" for="option1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                              <label class="btn btn-primary" style="width: 15rem;" for="option2">Female</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox" value="" id="agreementCheckbox" required>
                          <label class="form-check-label" for="agreementCheckbox">
                            I agree with GetGoers' terms and conditions and privacy policy. Accept agreement and click continue to process your order.
                          </label>
                          <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary" style="width: 100%;">Continue</button>
                        </div>
                      </form>
                    </div>
                  </div>
                    <!--Sampai sini aja -->
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