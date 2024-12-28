<?php

include 'homehead.php';
?>



<html>
<head>

</head>

 
  
<div class="container-fluid px-4 py-5 my-5 text-center">
    <div class="lc-block">
        <div editable="rich">
            <h2 class="display-5 fw-bold">Book Your Train Tickets Easily</h2>
        </div>
    </div>
    <div class="lc-block col-lg-6 mx-auto mb-4">
        <div editable="rich">
            <p class="lead">Plan your journey with ease using our train ticket booking system. Enjoy a user-friendly interface, quick booking process, and secure transactions for your travel needs across various destinations. Get started with just a few clicks!</p>
        </div>
    </div>

    <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a class="btn btn-primary btn-lg px-4 gap-3" href="book.php" role="button">Book Tickets Now</a>
        <a class="btn btn-outline-secondary btn-lg px-4" href="view-fares.php" role="button">Check Fares</a>
    </div>
    <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center">
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img class="img-fluid border rounded-3 shadow-lg mb-4" src="train_pic.jpg">
            </div>
        </div>
    </div>
</div>

  

<?php include 'footer.php';
?> 

</html>