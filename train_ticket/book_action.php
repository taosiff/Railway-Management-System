<?php

include 'connect.php';
session_start();
if (empty($_SESSION['log'])) {
    header("Location: sindex.php");
    exit();
}
include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$type = $_POST['type'];
$no = $_POST['number'];
$j_d = $_POST['book_date'];

if ($source == $dest) {
    echo "<br><br><br><h1><center>Selected source and destination are the same. Please refill the details.</center></h1><br><br>";
} else {

    $sql_price = "SELECT * FROM `price` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest'";
    $result = $connect->query($sql_price);

    $final = 0; 

    while ($row = $result->fetch_assoc()) {
        $base_price = $row["Price"]; 
        $final = $base_price * $no; 

        if ($class == 'Second') {
            $final = $final / 2;
        } elseif ($class == 'AC') {
            $final = $final * 2;
        }
        if ($type == 'Return') {
            $final = $final * 2;
        }
    }

    $_SESSION['final'] = $final;
    $_SESSION['source'] = $source;
    $_SESSION['dest'] = $dest;
    $_SESSION['Class'] = $class;
    $_SESSION['Type'] = $type;
    $_SESSION['NoOfpass'] = $no;
    $_SESSION['Route'] = $source . ' ' . $Route . ' ' . $dest;


    $sql_transactions = "INSERT INTO transactions (email, source, dest, Name, Class, Type, NoOfpass, Amt, booking_date) 
                         VALUES ('" . $_SESSION['email'] . "', '" . $_SESSION['source'] . "', '" . $_SESSION['dest'] . "', '" . $_SESSION['name'] . "', 
                                 '" . $_SESSION['Class'] . "', '" . $_SESSION['Type'] . "', '" . $_SESSION['NoOfpass'] . "', '" . $_SESSION['final'] . "', '$j_d')";

    if (mysqli_query($connect, $sql_transactions)) {
        echo "<h1><center>Your Ticket has been successfully booked<center></h1><br>";
    } else {
        echo "<h1><center>There was an error booking your ticket. Please try again.<center></h1><br>";
    }

    header("Location: bookdone.php");
}
?>

<br><br><br><br>
<center>
    <form action="book.php" method="post">
        <button class="btn btn-primary" type="submit">
            <h3>Go back</h3>
        </button>
    </form>
</center>

<?php include 'footer.php'; ?>
