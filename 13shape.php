<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculation</title>
</head>
<body>
    <h1>Calculate the Area of a Shape</h1>

    <form method="post">
        <label for="base">Base (decimal):</label>
        <input type="number" step="any" id="base" name="base" required>
        <br><br>

        <label for="height">Height (decimal):</label>
        <input type="number" step="any" id="height" name="height" required>
        <br><br>

        <label for="shape">Shape (triangle or parallelogram):</label>
        <input type="text" id="shape" name="shape" required>
        <br><br>

        <input type="submit" name="calculate_area" value="Calculate Area">
    </form>

    <?php
    if (isset($_POST['calculate_area'])) {
        function calculate_area($base, $height, $shape) {
            if ($shape == "triangle") {
                return 0.5 * $base * $height;
            } elseif ($shape == "parallelogram") {
                return $base * $height;
            } else {
                return "Invalid shape.";
            }
        }

        $base = $_POST['base'];
        $height = $_POST['height'];
        $shape = $_POST['shape'];

        $area = calculate_area($base, $height, $shape);
        echo "<h3>Area of the $shape: $area</h3>";
    }
    ?>
</body>
</html>
