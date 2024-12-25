<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 22</title>
</head>
<body>
    <h1>Add First 3 Characters to Front and Back</h1>

    <form method="post">
        <label for="inputString">Enter a String:</label><br>
        <input type="text" id="inputString" name="inputString" placeholder="Enter a string" required>
        <br><br>
        <input type="submit" name="processString" value="Process String">
    </form>

    <?php
    if (isset($_POST['processString'])) {
        function add_first_three_to_front_and_back($str) {
            $front = strlen($str) < 3 ? $str : substr($str, 0, 3);
            return $front . $str . $front; 
        }

        $inputString = $_POST['inputString'];
        $result = add_first_three_to_front_and_back($inputString);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
