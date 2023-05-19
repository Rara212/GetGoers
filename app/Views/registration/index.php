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
                      
                      <form action="/registration" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                          <label for="inputEmail" class="form-label">Email Address</label>
                          <input type="email" class="form-control" name="emailUser" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                          <div id="emailHelp" class="form-text">Tickets will be sent to this email</div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="eventName" class="form-label">Event Name</label>
                          <input type="text" class="form-control" name="event" id="inputEmail" aria-describedby="eventHelp" value="<?= $data['name'] ?>">
                          <input type="hidden" id="eventId" name="eventId" value="<?= $data['id'] ?>">
                          <div id="eventName" class="form-text">Tickets will be sent to this email</div>
                        </div>
                        <div class="form-group row mb-3">
                          <div class="col">
                            <label for="inputFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="inputFirstName" placeholder="Enter first name">
                          </div>
                          <div class="form-group col">
                            <label for="inputLastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="inputLastName" placeholder="Enter last name">
                          </div>
                        </div>
                        <div class="form-group row mb-3">
                          <div class="col">
                            <label for="inputCountryCode" class="form-label">Country Code</label>
                            <select name="countryCode" id="inputCountryCode" class="form-select" style="width: 10rem;">
                              <option selected>+62</option>
                              <option value="+93">+93</option>
                              <option value="+355">+355</option>
                              <option value="+54">+54</option>
                              <option value="+880">+880</option>
                              <option value="+673">+673</option>
                              <option value="+55">+55</option>
                              <option value="+855">+855</option>
                              <option value="+1">+1</option>
                              <option value="+57">+57</option>
                              <option value="+45">+45</option>
                              <option value="+20">+20</option>
                              <option value="+33">+33</option>
                              <option value="+299">+299</option>
                              <option value="+852">+852</option>
                              <option value="+62">+62</option>
                            </select>
                          </div>
                          <div class="form-group col">
                            <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" style="width: 30rem;" name="telephone" id="inputPhoneNumber" placeholder="Enter phone number">
                          </div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="inputGender" class="form-label">Gender</label>
                          <div>
                            <div class="form-check form-check-inline">
                              <input type="radio" class="btn-check" name="gender" id="option1" autocomplete="off" value="male">
                              <label class="btn btn-primary" style="width: 15rem;" for="option1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input type="radio" class="btn-check" name="gender" id="option2" autocomplete="off" value="female">
                              <label class="btn btn-primary" style="width: 15rem;" for="option2">Female</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="inputTicket" class="form-label">Book for</label>
                          <input type="number" min="1" class="form-control" name="ticketsIssued" id="inputEmail" aria-describedby="emailHelp" placeholder="1">
                        </div>
                        <div class="form-group form-check mb-3">
                          <input class="form-check-input" type="checkbox" value="" id="agreementCheckbox" required>
                          <label class="form-check-label" for="agreementCheckbox">
                            I agree with GetGoers' terms and conditions and privacy policy. Accept agreement and click continue to process your order.
                          </label>
                          <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                        <div class="col-12">
                          <?php if (ticketsIssued==0): ?>
                          <button type="submit" class="btn btn-primary" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>Continue</button>
                          <?php else: ?>
                          <button type="submit" class="btn btn-primary" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#exampleModal">Continue</button>
                          <?php endif; ?>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Success!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>Your ticket has been sent through your email</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                              </div>
                            </div>
                          </div>
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