<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last 3 Characters Uppercase</title>
</head>
<body>
    <h1>Convert Last 3 Characters to Uppercase</h1>

    <form method="post">
        <label for="inputString">Enter a String:</label><br>
        <input type="text" id="inputString" name="inputString" placeholder="Enter a string" required>
        <br><br>
        <input type="submit" name="convertString" value="Convert String">
    </form>

    <?php
    if (isset($_POST['convertString'])) {
        $inputString = $_POST['inputString'];

        function convert_last_three_uppercase($str) {
            if (strlen($str) < 3) {
                return strtoupper($str);
            }
            $lastThree = strtoupper(substr($str, -3));
            $remaining = substr($str, 0, -3); 
            return $remaining . $lastThree;
        }

        $result = convert_last_three_uppercase($inputString);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
