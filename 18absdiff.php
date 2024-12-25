<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absolute Difference</title>
</head>
<body>
    <h1>Calculate Absolute Difference</h1>

    <form method="post">
        <label for="number">Enter a Number:</label><br>
        <input type="number" id="number" name="number" placeholder="Enter a number" required>
        <br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        function absolute_difference($n) {
            $difference = abs($n - 51); 
            if ($n > 51) {
                return 3 * $difference; 
            }
            return $difference;
        }
        $number = (int)$_POST['number'];
        $result = absolute_difference($number);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
