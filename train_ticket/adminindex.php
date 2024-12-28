<?php
include 'connect.php';
include 'head2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-90">

        <h1 class="text-center mb-4"><b>Admin Sign In</b></h1>

        <form method="post" action="adminauthenticate.php" class="w-50">
            <div class="mb-3">
                <label for="email" class="form-label"><b>Email ID:</b></label>
                <input type="email" class="form-control" id="email" name="email" maxlength="50" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><b>Password:</b></label>
                <input type="password" class="form-control" id="password" name="password" maxlength="50" required>
            </div>
            <div class="text-center mb-5">
                <button type="submit" class="btn btn-primary" name="login_submit"><b>Sign In</b></button>
            </div>
        </form>
        <div class="text-center mt-5">		
            <h5> Not an Admin? <a href="sindex.php" class="text-dark d-inline my-40"><b>Sign In as a Passenger here</b></a></h5>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
