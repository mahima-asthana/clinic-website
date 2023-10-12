
<!-- //session_start();
//if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  //header("location: login.php");
  //exit;
//} -->
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    .appoint{
      border: 2px solid black;
      color: white;
      background-color: crimson;
      text-decoration: none;
      font-weight: bold;
      font-size: large;
     
    }
    a:hover {

background-color: crimson;
}
.current {
      text-align: center;
      font-weight: bold;
      font-size: large;
      color: white;
    }
  </style>
  </head>
  <body>
    
  <?php require'partials/_newnav.php' ?>
<br> <br>
    <div class="container">
    <div class="alert alert-success" role="alert">
  <!-- <h4 class="alert-heading">Welcome <?php echo $_SESSION['username']?></h4> -->
 <strong> Welcome to D.S.L. MEMORIAL CLINIC. You are logged in as <?php echo $_SESSION['username']?>.</strong>
  <p><?php echo $_SESSION['username']?> now you can fix your appointment. Click on the button below :-</p>
  <br>
 <a href="appointment2.php" class="appoint">Appointment</a>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to logout. <a href="/clinic2/logout.php" class="appoint">Logout</a></p>
</div>
    </div>


    <img class="banner" src="mask.png" alt="" width="1100px" height="700px" style="margin:center; margin-left:300px ">

    <!-- footer  -->
    <div class="card my-5" style="border:2px solid black; background-color:lightpink">
    <h5 class="card-header" style="text-align:center;background-color: crimson;color:white; border:2px solid black;margin:5px">Featured </h5>

    <div class="card-body" style="background-color: lightpink;color:black"> <hr>
      <!-- <img src="logo.png" alt="" width="50px" height="50px" style="margin:auto"> -->
      <h5 class="card-title" style="text-align:center">D.S.L. MEMORIAL CLINIC</h5>
      <strong class="card-text" >D.S.L. MEMORIAL CLINIC is one of the most popular clinic of Subhash Nagar, Bareilly, Uttar Pradesh. Now we are going to expand our business and we would love it if you become our member.</strong>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>