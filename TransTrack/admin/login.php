<?php
session_start();
if(isset($_SESSION['logged_in'])){
  header('location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Administrator</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="./lib/bootstrap-4.5.0-dist/css/style.css">
</head>

<body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Login Administrator</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class="d-flex">
              <div class="w-100">
                <h3 class="mb-4">Log In</h3>
              </div>
            </div>
            <form method="POST" class="login-form" name="login-form" id="login-form">
              <div class="form-group">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-user"></span>
                </div>
                <input type="text" class="form-control rounded-left" placeholder="Username" name="username" required />
              </div>
              <div class="form-group">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-lock"></span>
                </div>
                <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required />
              </div>
              <div class="form-group d-flex align-items-center">
                <div class="w-100 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary rounded submit">
                    Login
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="./lib/bootstrap-4.5.0-dist/js/jquery-3.5.1.js"></script>
  <script src="./lib/bootstrap-4.5.0-dist/js/popper.min.js"></script>
  <script src="./lib/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
  <script src="./lib/bootstrap-4.5.0-dist/js/main.js"></script>
  <script src="./scripts/script.js" type="module"></script>

</body>

</html>