
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedbacks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <style>
             .sidenav {

float: left;
text-decoration: none;
width: 300px;
height: 1000px;
background-color: black;
color: white;
justify-content: center;
}

img {
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
      </style> 
</head>

<body>
  
    <nav class="sidenav">

<img src="papa.png" alt=""> <br>
<div class="hi">HELLO ADMIN</div>
<ul>

    <a href="homeadmin.php">Home</a> <br><br>
    <a href="display.php">Dashboard</a><br><br>
    <a href="feedback.php.php">Feedbacks</a> <br><br>
    <a href="adminlogin.php">Logout</a> 

</ul>

</nav>

   


<!-- new 
 -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2 class="display-6 text-center">Feedbacks</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                        <td>S.no.</td>
                        <td>Name</td>
                        <td>Phone number</td>
                        <td>Email</td>
                        <td>Feedback</td>
                    </tr>
                    <tr>
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
    $sql= "SELECT * FROM `description`";
    $result= mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
                        while($row=mysqli_fetch_assoc($result))
                        {
                            ?>
                            
                        <td><?php echo $row['S.no.'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['desc'];?></td>
                       
                    </tr>
                    <?php
                }
            }
                ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous"></script>
</body>

</html>



