<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum or Triple</title>
</head>
<body>
    <h1>Compute the Sum of Two Integers</h1>

    <form method="post">
        <label for="a">First Integer:</label>
        <input type="number" id="a" name="a" required>
        <br><br>

        <label for="b">Second Integer:</label>
        <input type="number" id="b" name="b" required>
        <br><br>

        <input type="submit" name="sum_or_triple" value="Compute Sum">
    </form>

    <?php
    if (isset($_POST['sum_or_triple'])) {
        function sum_or_triple($a, $b) {
            if ($a == $b) {
                return 3 * ($a + $b);
            }
            return $a + $b;
        }

        $a = $_POST['a'];
        $b = $_POST['b'];

        $result = sum_or_triple($a, $b);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
