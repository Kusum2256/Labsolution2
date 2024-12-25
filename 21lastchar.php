<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 21</title>
</head>
<body>
    <h1>Add Last Character to Front and Back</h1>

    <form method="post">
        <label for="inputString">Enter a String:</label><br>
        <input type="text" id="inputString" name="inputString" placeholder="Enter at least 1 character" required>
        <br><br>
        <input type="submit" name="processString" value="Process String">
    </form>

    <?php
    if (isset($_POST['processString'])) {
        function add_last_to_front_and_back($str) {
            $lastChar = substr($str, -1); 
            return $lastChar . $str . $lastChar; 
        }

        $inputString = $_POST['inputString'];
        $result = add_last_to_front_and_back($inputString);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
