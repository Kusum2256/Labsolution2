<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Leg Calculator</title>
</head>
<body>
    <h1>Calculate Total Number of Legs of Animals</h1>

    <form method="post">
        <label for="chickens">Number of Chickens:</label>
        <input type="number" id="chickens" name="chickens" required>
        <br><br>

        <label for="cows">Number of Cows:</label>
        <input type="number" id="cows" name="cows" required>
        <br><br>

        <label for="pigs">Number of Pigs:</label>
        <input type="number" id="pigs" name="pigs" required>
        <br><br>

        <input type="submit" name="legs" value="Calculate Total Legs">
    </form>
    <?php
    if (isset($_POST['legs'])) {
        function calculate_total_legs($chickens, $cows, $pigs) {
            return ($chickens * 2) + ($cows * 4) + ($pigs * 4);
        }
        $chickens = $_POST['chickens'];
        $cows = $_POST['cows'];
        $pigs = $_POST['pigs'];
        $total_legs = calculate_total_legs($chickens, $cows, $pigs);
        echo "<h3>Total Legs of All Animals: $total_legs</h3>";
    }
    ?>
</body>
</html>
