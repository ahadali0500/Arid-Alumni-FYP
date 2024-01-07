<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>ARID ALUMNI ADMIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
  <scrip src='main.js'>
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>

<body>
  <div class="bg-img"><img src="images/banner2.jpg" alt=""></div>
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <div><a href="index.html"><img src="images/final_logo.png" alt="Logo"></a></div>
      <h2 class="text-success">ARID ALUMNI</h2>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse px-2" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link text-success fw-bold" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.html">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="success_stories.html">success Stories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Register</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="alumni-form.html">New Alumni</a></li>
              <li><a class="dropdown-item" href="student-form.html">New Student</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="admin/login.html" class="btn btn-outline-success" role="button" aria-pressed="true">Admin Login</a>
        </form>
      </div>
    </nav>
  </header>
  <div class="container0">
    <div class="login form">
      <header>Admin Login</header>
      <form method="POST">
        <input type="text" required name="email" placeholder="Enter user email">
        <input type="password" required name="password" placeholder="Enter your password">
        <!-- <a href="#">Forgot password?</a><br><br> -->
        <button type="submit" name="btn" class="btn btn-success btn-lg active col-md-8" style="margin-left: 4rem;"
          role="button" aria-pressed="true">Submit</button>

      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>
</body>

</html>

<?php
include('include/connection.php');
if (isset($_REQUEST['btn'])) {
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];

  $qry = "SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'";
  $sql = mysqli_query($conn, $qry);
  if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
    $_SESSION['admintype'] = "admin";
    $_SESSION['adminname'] = $row['name'];
    ?>
    <script>
      window.location.href = "admin.php"
    </script>
    <?php

  } else {

    echo "<script>
   toastr.error('Invalid login details!');
  </script>";
  }
}
?>