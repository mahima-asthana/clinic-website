<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partials/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $sql = "Select * from admin where username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: homeadmin.php");
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
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .logo {
            position: absolute;
            margin-top: 200px;

            margin-left: 350px;

        }

        .login {
            width: 400px;
            height: 400px;
            position: relative;
            margin-top: 200px !important;
            margin-left: 700px !important;
            font-weight: bold;
            margin: auto;
            background-color: white;
            border-radius: 50px 5px;
            border-style: outset;
            box-shadow: 5px 5px 5px lightpink;
        }

        h2 {
            color: black;
            text-decoration: underline;
            text-shadow: 2px 2px 10px crimson;
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
    </style>

</head>
<body>
    <?php require 'partials/_newnav.php' ?>
    <img src="logonew.png" alt="" class="logo" width="400px" height="400px">
    <!-- form  -->
    <div class="login">
        <div class="container my-4">
            <h2 class="text-center">Admin Login</h2> <br>
            <form action="/clinic2/adminlogin.php" method="post">

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous"></script>
</body>

</html>