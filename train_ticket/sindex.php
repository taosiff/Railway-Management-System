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
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-90">

        <h1 class="text-center mb-4"><b>User Sign In</b></h1>

        <form method="post" action="authenticate.php" class="w-50">
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

        <div class="text-center mt-4">		
            <h5><a href="register.php" class="text-dark"><b>Register</b></a></h5>
        </div>
        <div class="text-center mt-4">		
            <h5><a href="adminindex.php" class="text-dark"><b>Admin Sign In?</b></a></h5>
        </div>
    </div>

</body>
</html>
<?php include 'footer.php'; ?>