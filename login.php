<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partials/_dbconnect.php';
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $sql = "Select * from users where username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: welcome.php");
  }
} else {
  $showError = "Invalid Credentials.";
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    .login {
      width: 400px;
      position: relative;
      margin-top: 120px;
      margin-left: 900px;
      background-color: white;
      border-radius: 50px 5px;
      display: flex;
      border-style: outset;
      box-shadow: 5px 5px 5px lightpink;
    }

    .banner {
      position: absolute;
      margin-left: 200px;
      margin-top: 80px
    }

    .current {
      text-align: center;
      font-weight: bold;
      font-size: large;
    }

    a:hover {

      background-color: crimson;
    }
  </style>
</head>

<body>

  <?php require 'partials/_newnav.php' ?>
  <?php
  if ($login) {

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in.
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
  <img class="banner" src="loginnew.png" alt="" width="900px" height="500px">

  <!-- form  -->
  <div class="login">
    <div class="container my-4">
      <h2 class="text-center">Login to your account</h2> <br>
      <form action="/clinic2/login.php" method="post">

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
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div> <br>
  <!-- footer  -->
  <div class="card my-5" style="border:2px solid black; background-color:lightpink; ">
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
  

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>