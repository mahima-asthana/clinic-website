<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    h5 {
      text-align: center;
    }

    .current {
      text-align: center;
      font-weight: bold;
      font-size: large;
    }

    .advantage {
      background-color: lightcyan;
      color: black;

    }

    .detail {
      text-align: center;
    }

    a:hover {
      background-color: crimson;
    }

    .about {
      width: 900px;
      height: 200px;
      margin-top: 40px;
      margin-left: 100px;
      background-color: lightcyan;
      border-style: outset;
    }

    .active {
      background-color: crimson;
    }

    .papa {

      width: 900px;
      height: 200px;
      margin-top: 40px;
      background-color: lightcyan;
      margin-left: 600px;
      border-style: outset;
    }

    .degree {
      /* border: 2px solid black; */
      width: 900px;
      height: 200px;
      margin-top: 40px;
      margin-left: 100px;
      background-color: lightcyan;
      border-style: outset;
    }

    .banner {
      margin: center !important;
      margin-top: 80px
    }
  </style>
</head>

<body>

  <?php require 'partials/_newnav.php' ?>

  <img class="banner" src="clinic.png" alt="" width="900px" height="500px" style="margin:center; margin-left:400px ">

  <div class="about">
    <img src="clinicpic.jpg" alt="" style="width:170px;height:170px;margin-right:40px;float:left">
    D.S.L. MEMORIAL CLINIC was established in 1995. It is located in Bareilly. It is the most popular clinic of
    Bareilly. All the patients of Subhash nagar, BDA colony, patel Vihar and nearby areas come to our clinic. Now we are
    going to expand our business online as well as offline. Through this website we want to serve the facility of fixing
    the appointment while sitting at home. Anyone can fix their appointment with us by creating / login to their account
    on our website. We also have tie up with some of the popular hospitals of Bareilly.
  </div>
  <div class="papa">
    <img src="papa.png" alt="" style="width:170px;height:170px;margin-left:40px;float:right">
    DR. Subodh Kumar Asthana is the owner of D.S.L. MEMORIAL CLINIC. He is a General physician. He has experience of 28
    years. Basically he is from Aonla but running their clinic in Bareilly.
  </div>
  <div class="degree">
    <img src="degree.jpg" alt="" style="width:170px;height:170px;margin-right:40px;float:left">
    The major degrees of Dr. Subodh Kumar Asthana are :-
    <ul type="square">
      <li>BNYS (Bachelor of Naturopathy & Yoga Sciences) from Lucknow (2 years).
      </li>
      <li>DHMS (Diploma in Homeopathic and Surgery) from Coimbatore (2 years).
      </li>
    </ul>
  </div>

  <!-- about us  -->
  <div class="accordion" id="accordionExample" style="margin-top:50px">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
          aria-expanded="false" aria-controls="collapseOne">
          Know more about D.S.L. MEMORIAL CLINIC :-
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>D.S.L. MEMORIAL is the clinic located in Bareilly (Uttar Pradesh). This clinic is manage by a doctor
            named Dr. Subodh kumar Asthana having 28 years of experience. </strong>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
          aria-expanded="false" aria-controls="collapseTwo">
          Contact Details :-
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>Email -</strong> subodhasthana1409@gmail.com <br>
          <strong>Address -</strong> 529, old chandmari, tiwari temple, Subhash nagar, Bareilly, Uttar Pradesh.
          <strong></strong>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Other social networks :-
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">

          <a href="https://www.facebook.com/dr.subodhasthana4/" target="_blank"><img src="facebook.png" alt=""
              width="40px" height=40px></a>
          <a href="https://www.instagram.com/s.k_asthana/" target="_blank"><img src="instagram.png" alt="" width="40px"
              height=40px style="margin-left:50px"></a>
        </div>
      </div>
    </div>
  </div><br>
  <!-- tie up  -->
  <div class="advantage" style="margin-top:50px">

    <div class="container text-center py-2">
      <h1>Tie Up with these Hospitals</h1>
      <div class="row" style="margin-top: 50px" ;>
        <div class="col">
          <strong>Jeevan Jyoti Hospital.</strong>
          <p>(Rampur garden)</p>
        </div>
        <div class="col">
          <strong>Dhanwantari Tomar Hospital.</strong>
          <p>(Rampur garden)</p>
        </div>
        <div class="col">
          <strong>Saran Hospital.</strong>
          <p>(Junction road)</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <hr><br>
  <!-- advantage  -->
  <div class="advantage" style="margin-top:50px">

    <div class="container text-center py-2">
      <h1>THE D.S.L. MEMORIAL ADVANTAGE</h1>
      <div class="row" style="margin-top: 50px" ;>
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
  <hr><br>
  <img src="appointment.png" alt="" width="900px" height="500px" style="margin:center; margin-left:400px ">
  <div class="detail">
    <div class="row" style="margin-top:50px">
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