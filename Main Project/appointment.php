<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patient_login_details";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sel = "select * from login_details";
$query = mysqli_query($conn, $sel);
$result = mysqli_fetch_assoc($query);

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $num = $_POST["number"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Insert data into the database
    $sql = "INSERT INTO appointment(First_Name,Last_Name,Number,Email,Date,Time) VALUES ('$fname','$lname','$num', '$email','$date','$time')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
        alert("Successfully registered for appointment!!")
        </script>';
    } else {
        echo '<script>
        alert("An error occured!!")
        </script>' . $sql . "<br>" . $conn->error;
    }
}
// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <title>Book Appointment</title>
</head>

<body>
    <div id="header" class="intro-bg">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="" alt="No Image">
                </div>
                <div class="col-7">
                    <div class="nav justify-content-center">
                        <div class="nav">
                            <a href="index.php" class="nav-link white pt-3">Home</a>
                            <a href="" class="nav-link white pt-3">Services</a>
                            <a href="" class="nav-link white pt-3">About Us</a>
                            <a href="" class="nav-link white pt-3">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                <div class="dropdown">
                    <img src="user icon.webp" class="user_icon dropdown-button">
                    <div class="dropdown-content">
                    <i class="fa-solid fa-user user_icon_size"></i>
                    <span class="user_name"> <?php echo $result["First_Name"];?></span>
                    <hr>
                        <a href="#" target="_blank" class="dropdown-item">Edit Profile </a>
                        <a href="#" class="dropdown-item">Help and Support </a>
                        <a href="index.php" class="dropdown-item">Log out</a>
                    </div>
                    <!-- <i class="fa-solid fa-user user_icon_size"></i> -->
                </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-4 white-bg appt-form">
                        <form action="#" method="post" class="ap-form">
                            <div class="form-group">
                                <h3 class="appt-heading">Book Your Appointment</h3>
                                <p class="appt-msg">Online appointment form</p>
                                <div class="row">
                                    <div class="col-5">
                                        <label>First Name*</label>
                                        <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                                    </div>
                                    <div class="col-5">
                                        <label>Last Name</label>
                                        <input class="form-control type=" text" name="lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <label>Mobile Number*</label>
                                        <input class="form-control type=" tel" name="number" placeholder="Mobile Number" required>
                                    </div>
                                    <div class="col-5">
                                        <label>E-mail Address*</label>
                                        <input class="form-control type=" email" name="email" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <label>Appointment Date*</label>
                                        <input class="form-control" type="date" name="date" placeholder="DD/MM/YYYY" required>
                                    </div>
                                    <div class="col-5">
                                        <label>Appointment Time*</label>
                                        <input class="form-control" type="time" name="time" placeholder="Example-12:00 AM" required>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button id="appt-btn" type="submit">Book Appointment</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-4">
                        <img src="appointment_img.svg" class="appt_img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>
    <div id="footer" class="black-bg footer-height">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="" alt="LOGO">
                </div>
                <div class="col">
                    <h5 class="test-head-height white footer-font-h">COMPANY</h5>
                    <a href="" class="nav-link white footer-font-l">About</a>
                    <a href="" class="nav-link white footer-font-l">Blog</a>
                    <a href="" class="nav-link white footer-font-l">Services</a>
                    <a href="" class="nav-link white footer-font-l">Appointment</a>
                </div>
                <div class="col">
                    <h5 class="test-head-height white footer-font-h">QUICK LINKS</h5>
                    <a href="login.php" class="nav-link white footer-font-l">Login</a>
                    <a href="Signup.php" class="nav-link white footer-font-l">Sign up</a>
                    <a href="" class="nav-link white footer-font-l">Forget</a>
                    <a href="" class="nav-link white footer-font-l">Members</a>
                </div>
                <div class="col">
                    <h5 class="test-head-height white footer-font-h">HELP</h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>