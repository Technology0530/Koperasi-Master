<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" method="post" action="ceklog.php">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Full Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="confpassword" name="confpassword" placeholder="Repeat Password">
                </div>
              </div>
              <button type="submit" name="register" class="btn btn-user btn-green col-lg">
                Register Account
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="auth.php?page=login">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
