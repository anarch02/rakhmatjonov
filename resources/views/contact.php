<?php require 'parts/header.php' ?>

    <div class="px-4 py-5 my-5 text-center">
        <!-- <img class="d-block mx-auto mb-4" src="#" alt="Logo" width="72" height="57"> -->
        <h1 class="display-5 fw-bold">Contact From</h1>
    </div>

    <div class="container">
        <div class="col-12">
            <div class="row justify-content-center">        
                <div class="col-md-7 col-lg-8">
                    <form class="needs-validation" novalidate="">
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label for="firstName" class="form-label">First name</label>
                          <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <label for="lastName" class="form-label">Last name</label>
                          <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>

                        <div class="col-12">
                          <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
                          <input type="email" class="form-control" id="email" placeholder="you@example.com">
                          <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                          </div>
                        </div>

                        <div class="col-12">
                          <label for="prev" class="form-label">Prev</label>
                          <input type="prev" class="form-control" id="prev">
                          <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                          </div>
                        </div>

                        <div class="col-12">
                          <label for="prev" class="form-label">Message</label>
                          <textarea cols="10" class="form-control"></textarea>
                        </div>



                      <button class="w-100 btn btn-primary btn-lg" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require 'parts/footer.php' ?>

