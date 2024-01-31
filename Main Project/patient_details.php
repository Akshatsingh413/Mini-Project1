<?php
$con=mysqli_connect("localhost","root","","patient_login_details");
if(!$con)
{
    die("Connection error");
}
$query="select * from login_details";
$result=mysqli_query($con,$query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Display patients details</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card header">
                        <h2 class="display-6 text-center">Patients details</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="heading">
                                <th>ID number</th>
                                <th>First_Name</th>
                                <th>Last_Name</th>
                                <th>Email</th>
                                <th>Mobile number</th>
                                <th>Password</th>
                            </tr>
                            <tr>
                                <?php
                                while($row=mysqli_fetch_assoc($result))
                                {
                                ?>
                                <td><?php echo $row['ID number'];?></td>
                                <td><?php echo $row['First_Name'];?></td>
                                <td><?php echo $row['Last_Name'];?></td>
                                <td><?php echo $row['Email'];?></td>
                                <td><?php echo $row['Number'];?></td>
                                <td><?php echo $row['Password'];?></td>
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