<?php
include 'connect.php';
$userName = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
$userId = isset($_SESSION['userid']) ? $_SESSION['userid'] : 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

        footer {
            background-color: #2d2d30;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #444;
            position: fixed;
            width: 100%;
            bottom: 0;
            left: 0;
        }
        .footer-left {
            font-size: 18px;
            color: #f5f5f5;
        }
        .footer-center {
            display: flex;
            gap: 15px;
        }
        .footer-center a {
            color: #f5f5f5;
            text-decoration: none;
            font-size: 20px;
            transition: color 0.3s ease;
        }
        .footer-center a:hover {
            color: #bbb;
        }
        .footer-right {
            font-size: 14px;
            text-align: right;
        }

    </style>
</head>
<body>
    <footer>
        <div class="footer-left">
            Ticket Booking System
        </div>
        <div class="footer-center">
            <a href="https://www.facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="footer-right">
            <span>User: <?php echo $userName; ?></span>
            <span>ID: <?php echo $userId; ?></span>
        </div>
    </footer>
</body>
</html>