<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find String Index</title>
</head>
<body>
    <h1>Find the Index of a String in an Array</h1>

    <form method="post">
        <label for="array">Array (comma separated):</label>
        <input type="text" id="array" name="array" required>
        <br><br>

        <label for="search_string">Search String:</label>
        <input type="text" id="search_string" name="search_string" required>
        <br><br>

        <input type="submit" name="find_index" value="Find Index">
    </form>

    <?php
    if (isset($_POST['find_index'])) {
        function find_string_index($array, $str) {
            return array_search($str, $array);
        }

        $array = explode(",", $_POST['array']);
        $search_string = $_POST['search_string'];

        $index = find_string_index($array, $search_string);
        echo "<h3>Index of '$search_string': $index</h3>";
    }
    ?>
</body>
</html>
