<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
</head>
<body>
    <h1>Find the Largest Number Among Three Integers</h1>

    <form method="post">
        <label for="num1">Enter First Number:</label><br>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Enter Second Number:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="num3">Enter Third Number:</label><br>
        <input type="number" id="num3" name="num3" required><br><br>

        <input type="submit" name="findLargest" value="Find Largest">
    </form>

    <?php
    if (isset($_POST['findLargest'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        function find_largest($a, $b, $c) {
            return max($a, $b, $c);
        }

        $largest = find_largest($num1, $num2, $num3);
        echo "<h3>The largest number is: $largest</h3>";
    }
    ?>
</body>
</html>
