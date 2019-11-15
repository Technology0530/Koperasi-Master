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
                  <h1 class="h4 text-gray-900 mb-4">Login Pages</h1>
                </div>
                <?php if ($_GET['page'] == 'register_success') : ?>
                  <div class="alert alert-danger" role="alert">
                    Registrasi Success... Silahkan login
                  </div>
                <?php endif; ?>
                <?php if ($_GET['page'] == 'login_error'): ?>
                  <div class="alert alert-danger" role="alert">
                    Wrong Email or Password!!!
                  </div>
                <?php endif; ?>
                <form class="user" action="ceklog.php" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  </div>
                  <button type="submit" name="login" class="btn btn-user btn-green col-lg">
                    Login
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="#">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="auth.php?page=register">Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
