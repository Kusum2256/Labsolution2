<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Value at Index</title>
</head>
<body>
    <h1>Get the Value of an Array at a Given Index</h1>

    <form method="post">
        <label for="array">Array (comma separated):</label>
        <input type="text" id="array" name="array" required>
        <br><br>

        <label for="index">Index:</label>
        <input type="number" id="index" name="index" required>
        <br><br>

        <input type="submit" name="get_value" value="Get Value">
    </form>

    <?php
    if (isset($_POST['get_value'])) {
        function get_value_at_index($array, $index) {
            if (isset($array[$index])) {
                return $array[$index];
            }
            return "Index out of range.";
        }

        $array = explode(",", $_POST['array']);
        $index = $_POST['index'];

        $value = get_value_at_index($array, $index);
        echo "<h3>Value at index $index: $value</h3>";
    }
    ?>
</body>
</html>
