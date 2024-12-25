<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Calculation</title>
</head>
<body>
    <h1>Calculate Power from Voltage and Current</h1>

    <form method="post">
        <label for="voltage">Voltage (V):</label>
        <input type="number" id="voltage" name="voltage" required>
        <br><br>

        <label for="current">Current (A):</label>
        <input type="number" id="current" name="current" required>
        <br><br>

        <input type="submit" name="power" value="Calculate Power">
    </form>

    <?php
    if (isset($_POST['power'])) {
        function calculate_power($voltage, $current) {
            return $voltage * $current;
        }
        $voltage = $_POST['voltage'];
        $current = $_POST['current'];
        $power = calculate_power($voltage, $current);
        echo "<h3>Calculated Power: $power W</h3>";
    }
    ?>
</body>
</html>
