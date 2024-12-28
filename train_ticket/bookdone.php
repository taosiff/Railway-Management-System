<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:index.php");
}
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Summary</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="mt-2"><b>Booking Summary</b></h2>
        </div>

        <?php 
        $result = mysqli_query($connect, "SELECT * FROM `transactions` WHERE `email`='" . $_SESSION['email'] . "' ORDER BY `T_No.` DESC LIMIT 1");
        while ($row = mysqli_fetch_assoc($result)): 
            $tno = $row["T_No."];
            $_SESSION['tno'] = $tno;
        ?>
        
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">Booking ID</th>
                            <td><?php echo htmlspecialchars($row['T_No.']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Name</th>
                            <td><?php echo htmlspecialchars($_SESSION['name']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?php echo htmlspecialchars($_SESSION['email']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Source Station</th>
                            <td><?php echo htmlspecialchars($_SESSION['source']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Destination</th>
                            <td><?php echo htmlspecialchars($_SESSION['dest']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Route</th>
                            <td><?php echo htmlspecialchars($_SESSION['Route']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Amount</th>
                            <td>৳ <?php echo htmlspecialchars($_SESSION['final']); ?></td>
                        </tr>
                    </tbody>
                </table>

                <div class="text-center mt-4">
                    <a href="print.php?pid=<?php echo urlencode($_SESSION['tno']); ?>" target="_blank" class="btn btn-primary">
                        <h3 class="text-white">Print Ticket</h3>
                    </a>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
    </div>

</body>
</html>
