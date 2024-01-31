<?php
$con=mysqli_connect("localhost","root","","patient_login_details");
if(!$con)
{
    die("Connection error");
}
$query="select * from appointment";
$result=mysqli_query($con,$query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Display appointment details</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card header">
                        <h2 class="display-6 text-center">Appointment details</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="heading">
                                <th>S.No.</th>
                                <th>First_Name</th>
                                <th>Last_Name</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                            <tr>
                                <?php
                                while($row=mysqli_fetch_assoc($result))
                                {
                                ?>
                                <td><?php echo $row['S.No.'];?></td>
                                <td><?php echo $row['First_Name'];?></td>
                                <td><?php echo $row['Last_Name'];?></td>
                                <td><?php echo $row['Number'];?></td>
                                <td><?php echo $row['Email'];?></td>
                                <td><?php echo $row['Date'];?></td>
                                <td><?php echo $row['Time'];?></td>
                               </tr>
                                <?php
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>