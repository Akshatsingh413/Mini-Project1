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

// Function to send an email
function sendEmail($to, $subject, $message) {
    $headers = "From: your_email@example.com"; // Replace with your email address
    mail($to, $subject, $message, $headers);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $num = $_POST["number"];
    $pass = $_POST["password"];

    // Check if the mobile number already exists
    $checkQuery = "SELECT * FROM login_details WHERE number = '$num'";
    $result = $conn->query($checkQuery);
    $email_check = "SELECT * FROM login_details WHERE Email = '$email'";
    $result1 = $conn->query($email_check);

    if ($result1->num_rows > 0) {
        // Email id already exists, show alert
        echo '<script>alert("Email id already exists!");</script>';
    } elseif ($result->num_rows > 0) {
        // Mobile number already exists, show alert
        echo '<script>alert("Mobile Number already exists!");</script>';
    } else {
        // Insert data into the database
        $sql = "INSERT INTO login_details (First_Name,Last_Name,Email,Number,password) VALUES ('$fname','$lname','$email', '$num','$pass')";
        if (isset($_POST['terms']) && $_POST['terms'] == 'on') {
            // Checkbox is checked, proceed with form processing
            if ($conn->query($sql) === TRUE) {
                // Retrieve the ID number from the database
                $userId = $conn->insert_id;

                // Compose the email message
                $emailSubject = "Your ID Number";
                $emailMessage = "Dear $fname $lname,\n\nYour ID number is: $userId\n\nThank you for registering.";

                // Send the email
                sendEmail($email, $emailSubject, $emailMessage);

                echo '<script>
                alert("Registered Successfully! An email has been sent to your registered email with your ID number.")
                </script>';
            } else {
                echo '<script>
                alert("An error occurred!!")
                </script>' . $sql . "<br>" . $conn->error;
            }
        } else {
            // Checkbox is not checked, show an error message
            echo "Please accept the terms and conditions.";
        }
    }
}

// Close the database connection
$conn->close();


