<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capstone Project 1</title>
</head>
<body>
    <!-- Logic -->
    <?php
    $total_cost = 0;
    $total_unit = 0;

    if (isset($_POST["submit"])) {
        
        if (empty($_POST["units"]) || ($_POST["units"] < 0)) {
            $total_unit = "Invalid Input";
        } else {
            $total_unit = $_POST["units"];

            for ($unit_count = 1; $unit_count <= $total_unit; $unit_count++) {
                if ($unit_count <= 50) {
                    $total_cost += 3.50;
                } else if ($unit_count > 50 && $unit_count <= 150) {
                    $total_cost += 4.00;
                } else if ($unit_count > 150 && $unit_count <= 250) {
                    $total_cost += 5.20;
                } else {
                    $total_cost += 6.50;
                }
            }
        }
    }
    ?>

    <!-- HTML markup -->
    <h2>Calculate your Electricity Bill.</h2>
    <div>
        Enter number of units:<br>
        <form method="POST">
            <input type="text" name="units">
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
    <div>
        <h3>
            Total number of units: <?php echo $total_unit; ?>
        </h3>
        <h3>
            Electricity Bill: <?php echo $total_cost; ?>
        </h3>
    </div>
</body>
</html>
