<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare String Lengths</title>
</head>
<body>
    <h1>Compare the Length of Two Strings</h1>

    <form method="post">
        <label for="string1">First String:</label>
        <input type="text" id="string1" name="string1" required>
        <br><br>

        <label for="string2">Second String:</label>
        <input type="text" id="string2" name="string2" required>
        <br><br>

        <input type="submit" name="compare" value="Compare Lengths">
    </form>

    <?php
    if (isset($_POST['compare'])) {
        function compare_string_length($string1, $string2) {
            return strlen($string1) == strlen($string2);
        }

        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];

        $result = compare_string_length($string1, $string2) ? "true" : "false";
        echo "<h3>Are the string lengths equal? $result</h3>";
    }
    ?>
</body>
</html>
