<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    body {
      background-color: whitesmoke;
    }

    form {
      border-style: ridge;
      border-radius: 50px 5px;
      box-shadow: 5px 5px 10px crimson;
      width: 800px;
      margin: auto;
      margin-top: 250px;
      padding: 30px;
      background-color: white;
      font-weight: bold;
    }

    h3 {
      color: black;
      text-decoration: underline;
      text-shadow: 2px 2px 5px crimson;
    }

    .close {
      color: white;
      border: 2px solid black;
      width: 70px;
      text-align: center;
      float: right;
      margin-top: -25px;
      margin-right: -25px;

      background-color: blue;

    }

    .current {
      text-align: center;
      font-weight: bold;
      font-size: large;
      color: white;
    }

    a:hover {
      background-color: crimson;
    }

    .detail {
      margin: auto;
    }

    .add {
      border-style: dashed;

      box-shadow: 5px 5px 10px crimson;
      width: 450px;
      height: 70px;
      float: left;
      margin: 50px;
      font-weight: bold;
      background-color: lightpink;
    }
  </style>

</head>

<body>

  <?php require 'partials/_newnav.php' ?>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    //connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "users1409";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
      die("connection unsuccessful: " . mysqli_connect_error());
    } else {
      // echo "successfully connected.";
      $sql = "INSERT INTO `description` ( `name`, `phone`, `Email`, `desc`, `Time`) VALUES ('$name', '$phone', '$email', '$desc', current_timestamp())";

      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Your entry has been submitted succesfully.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
      } else {
        echo "Your entry is not inserted successfully because of this error-->" . mysqli_error($conn);
      }
    }
  }

  ?>
  <!-- contact details  -->
  <div class="detail">

    <div class="add"><img src="clinicpic.jpg" alt="Check your connection" width="50px" height="50px"
        style="float:left; margin-left: 10px;margin-top:10px"></a> 529, old chandmari, tiwari temple, Subhash nagar,
      Bareilly</div>
    <div class="add"><img src="email.jpg" alt="Check your connection" width="50px" height="50px"
        style="margin-top:10px"></a> subodhasthana1409@gmail.com</div>
    <div class="add"><img src="whatsapp.jpg" alt="Check your connection" width="50px" height="50px"
        style="margin-top:10px"></a> +91 9258460116</div>
  </div>

  <!-- form  -->
  <form action="/clinic2/contact2.php" method="POST">
    <a class="close" href="home2.php">Close</a><br><br>
    <H3>FEEDBACK</H3><br><br>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="name" name="name" class="form-control" id="name" placeholder="Full name"
        aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone number</label>
      <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone number">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" placeholder="Email address" name="email" class="form-control" id="email"
        aria-describedby="emailHelp">
      <div id="email" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="desc" class="form-label">Feedback</label>
      <textarea name="desc" id="" cols="60" rows="1" placeholder="Enter your message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
  </form>


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