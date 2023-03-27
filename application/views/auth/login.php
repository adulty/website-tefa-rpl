<?php $this->load->view('auth/templates/header') ?>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Admin TEFA</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" name="identity" class="form-control form-control-user" id="email" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <a href="index.html" class="btn btn-primary btn-user btn-block">
                      Login
                    </a>
                    <hr>
                  </form>
                  <hr class="my-4">
                  <div class="text-center mt-1">
                    <a href="<?= base_url('auth/forgot_password') ?>">Forgot Your Password ? </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php $this->load->view('auth/templates/footer') ?>