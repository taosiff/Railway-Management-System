<?php
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
        <h2 class="text-center mb-4"><b>Train Schedule</b></h2>
        <p class="text-center">Trains depart from every station at the following times:</p>
        <ul class="list-group">
            <li class="list-group-item">6:00 AM</li>
            <li class="list-group-item">6:00 PM</li>
        </ul>
        <p class="text-center mt-4">This schedule is consistent across all stations.</p>
    </div>
</body>
</html>

<?php include 'footer.php'; ?>
