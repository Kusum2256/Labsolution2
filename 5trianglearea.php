<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Area Calculation</title>
</head>
<body>
    <h1>Calculate the Area of a Triangle</h1>
    <form method="post">
        <label for="base">Base of Triangle:</label>
        <input type="number" id="base" name="base" required>
        <br><br>
        <label for="height">Height of Triangle:</label>
        <input type="number" id="height" name="height" required>
        <br><br>
        <input type="submit" name="triangle" value="Calculate Area">
    </form>
    <?php
    if (isset($_POST['triangle'])) {
        function calculate_triangle_area($base, $height) {
            return 0.5 * $base * $height;
        }
        $base = $_POST['base'];
        $height = $_POST['height'];
        $area = calculate_triangle_area($base, $height);
        echo "<h3>Area of the Triangle: $area</h3>";
    }
    ?>
</body>
</html>

