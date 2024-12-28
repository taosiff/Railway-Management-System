<?php
include 'connect.php';
include 'homehead.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Fares</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4"><b>Check Train Fares</b></h2>

        <form method="post" action="">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="source" class="form-label">Source Station</label>
                        <select id="source" name="source" class="form-select" required>
                            <option value="">Select Source Station</option>
                            <option>Dhaka</option>
                            <option>Gazipur</option>
                            <option>Narayanganj</option>
                            <option>Tangail</option>
                            <option>Mymensingh</option>
                            <option>Brahmanbaria</option>
                            <option>Chattogram</option>
                            <option>Sylhet</option>
                            <option>Cumilla</option>
                            <option>Jamalpur</option>
                            <option>Rajshahi</option>
                            <option>Khulna</option>
                            <option>Barisal</option>
                            <option>Rangpur</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="dest" class="form-label">Destination Station</label>
                        <select id="dest" name="dest" class="form-select" required>
                            <option value="">Select Destination Station</option>
                            <option>Dhaka</option>
                            <option>Gazipur</option>
                            <option>Narayanganj</option>
                            <option>Tangail</option>
                            <option>Mymensingh</option>
                            <option>Brahmanbaria</option>
                            <option>Chattogram</option>
                            <option>Sylhet</option>
                            <option>Cumilla</option>
                            <option>Jamalpur</option>
                            <option>Rajshahi</option>
                            <option>Khulna</option>
                            <option>Barisal</option>
                            <option>Rangpur</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <select id="class" name="class" class="form-select" required>
                            <option value="">Select Class</option>
                            <option>First</option>
                            <option>Second</option>
                            <option>AC</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Journey Type</label>
                        <select id="type" name="type" class="form-select" required>
                            <option value="">Select Journey Type</option>
                            <option>Single</option>
                            <option>Return</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Check Fare</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $source = $_POST['source'];
            $dest = $_POST['dest'];
            $class = $_POST['class'];
            $type = $_POST['type'];

            if ($source != $dest) {
                $sql_price = "SELECT * FROM `price` WHERE `source` = '$source' AND `dest` = '$dest'";
                $result = $connect->query($sql_price);

                if ($result->num_rows > 0) {
                    echo '<h3 class="mt-4"><b>Fares for the selected route:</b></h3>';
                    echo '<table class="table table-striped table-bordered mt-3">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Source</th>';
                    echo '<th>Destination</th>';
                    echo '<th>Class</th>';
                    echo '<th>Type</th>';
                    echo '<th>Price</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    while ($row = $result->fetch_assoc()) {
                        $price = $row['Price'];

                        // Apply class adjustments
                        if ($class == 'Second') {
                            $price /= 2;
                        } elseif ($class == 'AC') {
                            $price *= 2;
                        }

                        // Apply type adjustments
                        if ($type == 'Return') {
                            $price *= 2;
                        }

                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($row["source"]) . '</td>';
                        echo '<td>' . htmlspecialchars($row["dest"]) . '</td>';
                        echo '<td>' . htmlspecialchars($row["class"]) . '</td>';
                        echo '<td>' . htmlspecialchars($row["type"]) . '</td>';
                        echo '<td>৳ ' . htmlspecialchars($price) . '</td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p class="mt-4 text-danger">No fares found for the selected route.</p>';
                }
            } else {
                echo '<p class="mt-4 text-danger">Source and destination cannot be the same.</p>';
            }
        }
        ?>
    </div>
</body>
</html>
