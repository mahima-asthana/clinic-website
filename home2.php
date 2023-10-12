<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    /* body{
      width: 100%;
    }
    */
    a:hover {

      background-color: crimson;
    }

    .container {
      text-align: center;
      margin-top: 20px;
      /* background-color: lightblue; */
    }

    .poster {
      background-color: crimson;
      color: white;
      height: 25px;
    }

    button {
      background-color: lightskyblue;
      font-weight: bold;
      font-size: large;
    }

    .advantage {
      background-color: lightcyan;
      color: black;
      /* opacity: 0.6; */
    }

    .current {
      text-align: center;
      font-weight: bold;
      font-size: large;
    }

    .poster {
      border: 4px solid black;
      font-weight: bold;
      font-size: large;
      text-align: center;
      height: 40px;
      margin-left: 0px;
      margin-top: 20px;
      text-align: center;
    }

    .animate {
      height: 200px;
      width: 200px;
      position: relative;
      animation-name: doctor;
      animation-iteration-count: 10;
      animation-duration: 12s;
    }

    @keyframes doctor {

      from {
        left: 0px;
      }

      to {
        left: 1520px;
      }
    }

    .detail {
      text-align: center;
    }
  </style>
</head>

<body>
  <?php require 'partials/_newnav.php' ?>
  <!-- slidebar -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="margin-top: 50px;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="clinic.png" class="d-block" width="1500px" style="margin: auto;" height="600px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="2.png" class="d-block" width="1500px" style="margin: auto;" height="600px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="appointment.png" class="d-block" width="1500px" style="margin: auto;" height="600px" alt="...">
      </div>
    </div>
  </div>
  <hr>
  <div>
    <img src="animate.png" alt="" class="animate">
    <div class="poster">
      Appointment time - 08:00 AM - 09:00 PM
    </div>
  </div>
  <!-- container  -->
  <div class="container">
    <h1>D.S.L. MEMORIAL CLINIC</h1>
    <h4>Your health is our priority</h4>
    <strong>To fix your appointment with us, you need to create your account or login to your account(if already a
      member)</strong> <br><br>

    <a href="signup.php"><button>Create your account</button> </a><br> <br>
    <a href="login.php"><button>Login</button> </a>
  </div>
  <br>
  <hr>
  <img class="banner" src="mask.png" alt="" width="1100px" height="700px" style="margin:center; margin-left:300px ">

  <hr style="color: black">
  <br> <br>
  <!-- advantage  -->
  <div class="advantage">

    <div class="container text-center py-2">
      <h1>THE D.S.L. MEMORIAL ADVANTAGE</h1>
      <div class="row" style="margin-top: 20px" ;>
        <div class="col">
          <img src="allover.png" alt="" width="50px" height="50px"><br><br>
          <strong>Our service is for everyone.</strong>
        </div>
        <div class="col">
          <img src="ontime.png" alt="" width="50px" height="50px"><br><br>
          <strong>We provide our service on time.</strong>
        </div>
        <div class="col">
          <img src="safe.png" alt="" width="50px" height="50px"><br><br>
          <strong>We care about your privacy.</strong>
        </div>
      </div>
    </div>
  </div>
  <br>
  <hr><br><br>
  <div class="detail">
    <div class="row" style="margin-top:20px">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body" style="background-color:lightcyan">
            <h5 class="card-title">Register Now</h5>
            <p class="card-text">If you are new to our website then you need to create your account to fix your
              appointment with us.</p>
            <a href="signup.php" class="btn btn-primary">Sign up</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body" style="background-color:lightcyan">
            <h5 class="card-title">Login here</h5>
            <p class="card-text">Login to your account to fix your appointment with us.</p>
            <a href="login.php" class="btn btn-primary">Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <!-- footer  -->
  <div class="card my-5" style="border:2px solid black; background-color:lightpink">
    <h5 class="card-header"
      style="text-align:center;background-color: crimson;color:white; border:2px solid black;margin:5px">Featured </h5>

    <div class="card-body" style="background-color: lightpink;color:black">
      <hr>
      <h5 class="card-title" style="text-align:center">D.S.L. MEMORIAL CLINIC</h5>
      <strong class="card-text" style="text-align:center">D.S.L. MEMORIAL CLINIC is one of the most popular clinic of
        Subhash Nagar, Bareilly, Uttar Pradesh. Now we are going to expand our business and we would love it if you
        become our member.</strong>
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