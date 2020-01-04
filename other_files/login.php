<?php include'header.php'; ?>

<div class="row">
  <div class="container signup-container col-md-6">
    <!-- Material form login -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Login</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="insert.php" autocomplete="off" method="post">

      <!-- Email -->
     

      <!-- Password -->
      <div class="md-form">
        <input type="password" class="form-control" name="password" placeholder="Password">

      </div>

      

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Login</button>

      <!-- Register -->
      <p>Not a member?
        <a href="signup.php">Register</a>
      </p>


    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
  </div>
</div>
<?php include 'footer.php'; ?>