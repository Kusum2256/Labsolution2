<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Needed</title>
</head>
<body>
    <h1>Calculate the Number of Cars Needed</h1>

    <form method="post">
        <label for="people">Number of People:</label>
        <input type="number" id="people" name="people" required>
        <br><br>

        <input type="submit" name="calculate_cars" value="Calculate Cars Needed">
    </form>

    <?php
    if (isset($_POST['calculate_cars'])) {
        function calculate_cars_needed($n) {
            return ceil($n / 5);
        }

        $people = $_POST['people'];
        $cars_needed = calculate_cars_needed($people);
        echo "<h3>Cars needed: $cars_needed</h3>";
    }
    ?>
</body>
</html>
