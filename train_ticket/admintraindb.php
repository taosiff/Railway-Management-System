<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:index.php");
}
include 'adminheader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Details</title>
</head>
<body>
    <div class="container my-5">
        <h3 class="text-center mb-4">Passenger Details</h3>
        <div class="table-responsive">
            <table id="data" class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                         <th>Passenger Name</th>                       
                         <th>Booking ID</th>
                         <th>From</th>
                         <th>To</th>
                         <th>Amount to be Paid</th>
                         <th>Journey Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $result = mysqli_query($connect, "SELECT * FROM transactions");
                    while ($row = mysqli_fetch_assoc($result)): 
                    ?>
                    <tr>
                         <td><?php echo $row['Name']; ?></td>                        
                         <td><?php echo $row['T_No.']; ?></td>
                         <td><?php echo $row['source']; ?></td>
                         <td><?php echo $row['dest']; ?></td>
                         <td><?php echo $row['Amt']; ?></td>
                         <td><?php echo $row['booking_date']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <center>
            <button class="btn btn-primary"><a class="text-light" href="logout.php">Logout</a></button>
            </center>
        </div>
    </div>
</body>
</html>
