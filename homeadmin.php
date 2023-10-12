<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
  .bglogo{
        /* background: url(logonew.png); */
        background-repeat: no-repeat;
      
    }
    .app{
        border-radius: 50px 5px;
        border: 2px solid crimson;
        margin-top: 60px;
        margin-left: 700px;
        width: 300px;
        height: 300px;
        position: absolute;
        padding: 80px;
        font-weight: bolder;
        font-size: large;
        border: ridge;
        box-shadow: 5px 5px 10px crimson;
       text-align: center;
       

    }
         .sidenav {
/* position: relative; */
float: left;
text-decoration: none;
width: 300px;
height: 1000px;
background-color: black;
color: white;
justify-content: center;
}

.papa{
border: 5px solid crimson;
border-radius: 50%;
margin-left: 50px;
margin-top: 50px;
}
ul{
margin-top: 30px;
margin-left: 40px;
padding: 40px;
}
a {
text-decoration: none;

color: white;
font-weight: bold;
font-size: large;
display: table-row;

}
a:hover{
background-color: crimson;
}
.hi {
margin-top: 20px;
margin-left: 70px;
font-weight: bolder;
font-size: large;
}
#welcome{
    width: 800px;
    margin: auto;
    /* margin-top: 20px; */
}
</style>  
</head>
  <body>
    <!-- <img class="bglogo" src="logonew.png" alt=""> -->
  <nav class="sidenav">

<img class="papa"src="papa.png" alt=""> <br>
<div class="hi">HELLO ADMIN</div>
<ul>

    <a href="homeadmin.php">Home</a> <br><br>
    <a href="display.php">Dashboard</a><br><br>
    <a href="feedback.php">Feedbacks</a> <br><br>
    <a href="adminlogin.php">Logout</a> 

</ul>

</nav>

<!-- welcome  -->

<div id="welcome"class="alert alert-success " role="alert">
  <h4 class="alert-heading">Welcome Dr. Subodh Asthana!</h4>
  <p>Click on Dashboard to see the details of patients. And see below to check out the number of appointments. </p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to logout.</p>
  <a href="adminlogin.php"> <button>Logout</button></a>
</div>


<!-- no. of appointments  -->
    <div class="app">
        
        <?php


$servername="localhost";
$username="root";
$password="";
$database="users1409";
$conn=mysqli_connect($servername,$username,$password,$database);

if (!$conn)
{
die("connection unsuccessful: ".mysqli_connect_error());
}
else
{
// echo "successfully connected.";
$sql= "SELECT * FROM `appointment`";
$result= mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
echo  "Total number of appointments are <br>" .$num;
echo "<br>";
}
?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>