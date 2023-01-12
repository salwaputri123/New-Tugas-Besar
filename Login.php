<?php
include "config.php";
session_start();
error_reporting(0);
if (isset($_SESSION['username'])) {
  header("location:index.html");
}
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST["password"]);
  $sql = "SELECT * FROM users WHERE email='$email'AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("location:index.html");
  } else {
    echo "<script> alert('Ooopss ! Email Atau Password Salah')</script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <title>Educational Bootstrap 5 Login Page Website Tampalte</title>
</head>

<body>
  <section class="form-02-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="_lk_de">
            <div class="form-03-main">
              <div class="logo">
                <img src="">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
              </div>

              <div class="checkbox form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="">
                  <label class="form-check-label" for="">
                    Remember me
                  </label>
                </div>
                <a href="register.php">Register</a>
              </div>

              <div class="form-group">
                <div class="_btn_04">
                  <a href="index.html">Login</a>
                </div>
              </div>



              <div class="form-group pt-0">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>