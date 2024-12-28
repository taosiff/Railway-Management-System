<?php
include 'head2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .ticket-design {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 2rem;
            margin: 2rem auto;
            max-width: 600px;
            background-color: #f8f9fa;
        }
        .ticket-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .ticket-header h1 {
            font-size: 1.5rem;
            margin-bottom: 0;
        }
        .ticket-body h2 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }
        .ticket-footer {
            text-align: center;
            margin-top: 1.5rem;
            font-style: italic;
        }
    </style>
</head>
<body>
    <?php
    include 'connect.php';
    $pid = $_GET['pid'];
    
    $sel = "SELECT * FROM `transactions` WHERE `T_No.` = $pid";
    $rs = $connect->query($sel);

    if ($rs && $row = $rs->fetch_assoc()) {
    ?>
    <div class="container min-vh-90 d-flex justify-content-center align-items-center">
        <div class="ticket-design">
            <div class="ticket-header">
                <h1>Ticket no: <?php echo $row['T_No.'] ?></h1>
                <h1><?php echo $row['source'] ?> &nbsp;&nbsp; To &nbsp;&nbsp; <?php echo $row['dest'] ?></h1>
            </div>
            <div class="ticket-body">
                <h2>Date of Journey: <?php echo $row['booking_date'] ?></h2>
                <h2>Class: <?php echo $row['Class'] ?></h2>
                <h2>Type: <?php echo $row['Type'] ?></h2>
                <h2>No. of Passengers: <?php echo $row['NoOfpass'] ?></h2>
                <h2>Amount: ৳<?php echo $row['Amt'] ?></h2>
            </div>
            <div class="ticket-footer">
                <p>Wishing you a happy & safe journey!</p>
                <p class="text-danger">A total amount of ৳<?php echo $row['Amt'] ?> should be paid at counter for this ticket to be valid</p>
                <p class="text-info">Trains depart from every station at 6:00 AM and 6:00 PM. This schedule is consistent across all stations.</p>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
