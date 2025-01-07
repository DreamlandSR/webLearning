<section class="vh-100 overflow-auto">
  <div class="container-fluid h-100 pl-5">
    <div class="row d-flex align-items-center justify-content-between h-100">
      
      <!-- Form login -->
      <div class="col-12 col-md-6 col-xl-5 ml-4 p-5">
      <form>
        <h2 class="fw-bolder mb-4" style="text-align: center;"> Sign In </h2>
        <!-- Email input -->
         <h4 class="lead fw-normal mb-2">Email address</h4>
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="email" id="form2Example1" class="form-control" />
        </div>

        <!-- Password input -->
        <h4 class="lead fw-normal mb-2">Password</h4>
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" id="form2Example2" class="form-control" />
        </div>

        <!-- remember + forgot pass -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>

            <!-- lupa password -->
            <a href="#!">Forgot password?</a>
          </div>
        </div>


        <!-- Submit button -->
        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

        <!-- Register buttons -->
        <div class="text-center">
          <p>or sign in with:</p>
          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>

          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>

          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>

          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
      </div>

      <!-- Gambar: disembunyikan di mode HP -->
      <div class="col-12 col-md-6 d-none d-md-block" 
        style="height: 100vh; padding-top: 20px; padding-bottom: 20px;">
      <img src="<?=BASEURL; ?>/img/Screen.jpg"
        class="img-fluid h-100 w-100 object-fit-cover d-block rounded-3" 
        alt="Phone image" style="height: calc(100% - 40px);">
    </div>

    </div>
  </div>
</section>
