

<?php
$showError=false;


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'partials/_dbconnect.php';
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $blood_group = $_POST['blood_group'];
        $availability = $_POST['availability'];
        $time = $_POST['time'];
        $symptoms = $_POST['symptoms'];

        $exists=false;
        $existSql="SELECT * FROM `appointment` WHERE time='$time'";
        $result=mysqli_query($conn, $existSql);
        $numExistRows=mysqli_num_rows($result);
        if($numExistRows>0){
            // $exists=true;
            $showError=" This slot is fixed.";
           
        }
        //connecting to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "users1409";
        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("connection unsuccessful: " . mysqli_connect_error());
        } 
        else {
            // echo "successfully connected.";
            
            $sql = "INSERT INTO `appointment` ( `name`, `phone`, `Email`, `Blood Group`,`Availability`, `time`,`Symptoms`) VALUES ('$name', '$phone', '$email', '$blood_group', '$availability','$time','$symptoms')";
            $result = mysqli_query($conn, $sql);
            
 if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Your appointment is fixed and be available on time. Thankyou
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
            } 
            
            else
             {
                echo "Your entry is not inserted successfully because of this error-->" . mysqli_error($conn);
            }
        }
    }
    ?>
<!-- $showError=false; -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        form {
            position: relative;
            border-style: dotted;
            border-radius: 50px 5px;
            width: 600px;
            margin-left: 130px;
            margin-top: 30px;
            padding: 30px;
            background: lightgrey;
            font-weight: bold;
            box-shadow: 5px 5px 10px crimson;
        }

        sup {
            color: red;
        }

        .but:hover {
            font-weight: bolder;
            opacity: 0.7;
        }

        h3 {
            color: black;
            text-align: center;
            text-decoration: underline;
            /* text-decoration: dotted; */
            text-shadow: 2px 2px 5px crimson;
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

        .banner {
            position: absolute;
            margin-left: 700px;
            margin-top: 150px
        }
    </style>

</head>

<body>

    <?php require 'partials/_newnav.php' ?>

    
<?php
if($showError){

echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> '.$showError.'
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>


        <img class="banner" src="appointment.png" alt="" width="900px" height="500px">

    <form action="/clinic2/appointment2.php" method="POST">
        <h3>APPOINTMENT</h3>
        <div class="mb-3">
            <label for="name" class="form-label">Name<sup>*</sup></label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Full name"
                aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone number<sup>*</sup></label>
            <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone number">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email address"
                aria-describedby="emailHelp">
            <div id="email" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="blood group" class="form-label">Blood Group<sup>*</sup> </label>
            <input type="text" name="blood_group" class="form-control" id="blood group"
                placeholder="Enter your blood group" aria-describedby="emailHelp">
           
            <br><br>
            <div class="mb-3">
                <label for="availability" class="form-label">Availability<sup>*</sup> </label>
                <input type="text" name="availability" class="form-control" id="availability"
                    placeholder="Enter your availability(online/offline)" aria-describedby="emailHelp">
               
            <div class="mb-3">
                <label for="time" class="form-label">Date and Time<sup>*</sup></label>
                <input type="datetime-local" name="time" class="form-control" id="time">
            </div>
            <div class="mb-3">
                <label for="symptoms" class="form-label">Symptoms<sup>*</sup></label><br>
                <textarea name="symptoms" id="" cols="40" rows="2"
                    placeholder="Enter your symptoms or disease"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
    </form> <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>