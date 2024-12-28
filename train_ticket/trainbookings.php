<?php
include 'connect.php';
session_start();
if (empty($_SESSION['log'])) {
    header("location:sindex.php");
    exit();
}
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking System DATABASE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4"><b>Previous Bookings</b></h2>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Journey Date</th>
                    <th>Booking ID</th>
                    <th>Name</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Class</th>
                    <th>Type</th>
                    <th>Amount Paid</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql_transactions = "SELECT * FROM `transactions` WHERE `email`='" . $_SESSION['email'] . "' ORDER BY `T_No.` DESC";
                $result = $connect->query($sql_transactions);
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td>' . $row["booking_date"] . '</td>
                            <td>' . $row["T_No."] . '</td>
                            <td>' . $row["Name"] . '</td>
                            <td>' . $row["source"] . '</td>
                            <td>' . $row["dest"] . '</td>
                            <td>' . $row["Class"] . '</td>
                            <td>' . $row["Type"] . '</td>
                            <td>৳ ' . $row["Amt"] . '</td>
                            <td><a href="print.php?pid=' . $row["T_No."] . '" target="_blank">Click Here</a></td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
