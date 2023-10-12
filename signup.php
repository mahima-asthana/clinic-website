<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partials/_dbconnect.php';
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $exists = false;
  $existSql = "SELECT * FROM `users` WHERE username='$username'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);
  if ($numExistRows > 0) {
    // $exists=true;
    $showError = " Username already exist.";
  } else {
    // $exists=false;

    if (($password == $confirmpassword)) {
      $sql = "INSERT INTO `users` ( `name`, `phone`, `email`, `username`, `password`, `date`) VALUES ( '$name', '$phone', '$email', '$username', '$password', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $showAlert = true;
      }
    } else {
      $showError = "Passwords do not match.";
    }
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SignUp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    body {
      /* background-image: url(login.png); */
      /* height: 800px; */
      background-color: whitesmoke;
    }

    .signupform {
      background-color: lightpink;
      font-weight: bold;
      position: relative;
      border-radius: 50px 5px;
      box-shadow: 5px 5px 5px crimson;
      border-style: double;
      width: 500px;
      margin-left: 1000px;
      margin-top: 120px;
    }

    .current {
      text-align: center;
      font-weight: bold;
      font-size: large;
    }

    a:hover {

      background-color: crimson;
    }

    h3 {
      color: black;
      text-decoration: underline;
      text-shadow: 2px 2px 5px crimson;
    }

    .banner {
      position: absolute;
      margin-left: 100px;
      margin-top: 80px
    }
  </style>
</head>

<body>

  <?php require 'partials/_newnav.php' ?>
  <?php
  if ($showAlert) {

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login now.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
  }
  if ($showError) {

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
  }
  ?>

  <img class="banner" src="signupnow.png" alt="" width="1200px" height="800px">


  <!-- form  -->
  <div class="signupform">
    <div class="container my-4">
      <h3 class="text-center" id="heading">SignUp to our website</h3>
      <form action="/clinic2/signup.php" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="number" class="form-control" id="phone" name="phone">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="mb-3">
          <label for="confirmpassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
          <div id="emailHelp" class="form-text">Make sure to type the same password</div>
        </div>

        <button type="submit" class="btn btn-primary">SignUp</button>
      </form>
    </div>
  </div>
  <br><br><br><br>
  <!-- footer  -->
  <div class="card my-5" style="border:2px solid black; background-color:lightpink">
    <h5 class="card-header"
      style="text-align:center;background-color: crimson;color:white; border:2px solid black;margin:5px">Featured </h5>

    <div class="card-body" style="background-color: lightpink;color:black">
      <hr>
      <h5 class="card-title" style="text-align:center">D.S.L. MEMORIAL CLINIC</h5>
      <strong class="card-text">D.S.L. MEMORIAL CLINIC is one of the most popular clinic of Subhash Nagar, Bareilly,
        Uttar Pradesh. Now we are going to expand our business and we would love it if you become our member.</strong>
      <hr>
      <div style="background-color:crimson;color:white">

        <a href="https://www.facebook.com/dr.subodhasthana4/" target="_blank"><img src="facebook.png" alt=""
            width="50px" height="50px"></a>
        <a href="https://www.instagram.com/s.k_asthana/" target="_blank"><img src="instagram.png" alt="" width="50px"
            height="50px" style="margin-left:50px"></a>
        <div class="current" style="float:right">


          <!-- current time  -->
          <?php
          date_default_timezone_set('Asia/Kolkata');
          echo date('dS M Y, l');
          echo '<br>' . date('H:i A');
          ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>