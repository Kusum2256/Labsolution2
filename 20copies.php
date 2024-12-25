<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 20</title>
</head>
<body>
    <h1>Generate 4 Copies of the First 2 Characters</h1>

    <form method="post">
        <label for="inputString">Enter a String:</label><br>
        <input type="text" id="inputString" name="inputString" placeholder="e.g. C Sharp" required>
        <br><br>
        <input type="submit" name="generateString" value="Generate String">
    </form>

    <?php
    if (isset($_POST['generateString'])) {
        function create_copies_of_front($str) {
            if (strlen($str) < 2) {
                return $str; 
            }
            $front = substr($str, 0, 2); 
            return str_repeat($front, 4); 
        }

        $inputString = $_POST['inputString'];
        $result = create_copies_of_front($inputString);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
