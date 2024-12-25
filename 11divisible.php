<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisibility by 5</title>
</head>
<body>
    <h1>Check if a Number is Divisible by 5</h1>

    <form method="post">
        <label for="number">Enter a Number:</label>
        <input type="number" id="number" name="number" required>
        <br><br>

        <input type="submit" name="check" value="Check Divisibility">
    </form>

    <?php
    if (isset($_POST['check'])) {
        function is_divisible_by_5($number) {
            return $number % 5 == 0;
        }

        $number = $_POST['number'];
        $result = is_divisible_by_5($number) ? "true" : "false";
        echo "<h3>Is the number divisible by 5? $result</h3>";
    }
    ?>
</body>
</html>
