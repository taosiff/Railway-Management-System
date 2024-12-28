<?php     
include 'connect.php';                           
include 'head2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-80">


        <h1 class="text-center mb-4"><b>User Registration</b></h1>

        <form method="post" action="register_insert.php" class="w-75">
            <div class="mb-3">
                <label for="name" class="form-label"><b>Name:</b></label>
                <input type="text" class="form-control" id="name" name="name" maxlength="50" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label"><b>Email ID:</b></label>
                <input type="email" class="form-control" id="email" name="email" maxlength="50" required>
            </div>
            <fieldset class="mb-3">
                <legend class="form-label"><b>Gender:</b></legend>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="male" name="Gender" value="M">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="female" name="Gender" value="F" required>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </fieldset>
            <div class="mb-3">
                <label for="dob" class="form-label"><b>Date of Birth:</b></label>
                <input type="date" class="form-control" id="dob" name="dob" maxlength="50" placeholder="yyyy-mm-dd" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><b>Password:</b></label>
                <input type="password" class="form-control" id="password" name="password" maxlength="50" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label"><b>Contact No.:</b></label>
                <input type="tel" class="form-control" id="phone" name="phone" maxlength="10" required>
            </div>
            <div class="text-center mb-5">
                <button type="submit" class="btn btn-dark" name="register_submit"><b>Submit</b></button>
            </div>
        </form>

        <div class="text-center">
            <h5><a href="sindex.php" class="text-dark"><b>Registered? Sign In!</b></a></h5>
        </div>
    </div>

</body>
</html>
