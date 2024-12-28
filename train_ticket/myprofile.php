<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="mt-2"><b>User Details</b></h2>
        </div>

        <div class="card mx-auto " style="max-width: 600px;">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th scope="row">Name</th>
                            <td><?php echo htmlspecialchars($_SESSION['name']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?php echo htmlspecialchars($_SESSION['email']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">User ID</th>
                            <td><?php echo htmlspecialchars($_SESSION['userid']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Gender</th>
                            <td><?php echo htmlspecialchars($_SESSION['Gender']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Date of Birth</th>
                            <td><?php echo htmlspecialchars($_SESSION['dob']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Contact Number</th>
                            <td><?php echo htmlspecialchars($_SESSION['phone']); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
