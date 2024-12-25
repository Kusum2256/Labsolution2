<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive String Length</title>
</head>
<body>
    <h1>Calculate String Length Recursively</h1>

    <form method="post">
        <label for="string">Enter a String:</label>
        <input type="text" id="string" name="string" required>
        <br><br>

        <input type="submit" name="calculate" value="Calculate Length">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        function recursive_strlen($str) {
            if ($str == "") {
                return 0;
            }
            return 1 + recursive_strlen(substr($str, 1));
        }

        $string = $_POST['string'];
        $length = recursive_strlen($string);
        echo "<h3>Length of the string: $length</h3>";
    }
    ?>
</body>
</html>
