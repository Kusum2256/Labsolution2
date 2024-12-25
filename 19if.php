<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 19</title>
</head>
<body>
    <h1>Add "if" to the Front of a String</h1>

    <form method="post">
        <label for="inputString">Enter a String:</label><br>
        <input type="text" id="inputString" name="inputString" placeholder="e.g. else" required>
        <br><br>
        <input type="submit" name="processString" value="Process String">
    </form>

    <?php
    if (isset($_POST['processString'])) {
        function add_if_to_string($str) {
            if (strpos($str, "if") === 0) {
                return $str;
            }
            return "if " . $str; 
        }

        $inputString = $_POST['inputString'];
        $result = add_if_to_string($inputString);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
