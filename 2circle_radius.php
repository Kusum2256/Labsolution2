<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Area of a Circle</title>
</head>
<body>
    <h1>Calculate Area of a Circle</h1>

    <?php
    // Define PI as a constant
    define('PI', 3.14159);
    $radius = ""; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];
        if (is_numeric($radius) && $radius > 0) {
            $area = PI * $radius * $radius;
            echo "<h2>Results:</h2>";
            echo "Radius: $radius<br>";
            echo "Area of Circle: $area<br>";
        } else {
            echo "<h2 style='color: red;'>Please enter a valid positive number for the radius.</h2>";
            showForm($radius);
        }
    } else {
        showForm($radius);
    }
    function showForm($radius) {
        echo '<form method="POST" action="">
                <label for="radius">Enter Radius:</label>
                <input type="text" name="radius" id="radius" placeholder="Enter radius here" value="' . htmlspecialchars($radius) . '" required>
                <br><br>
                <input type="submit" value="Calculate">
              </form>';
    }
    ?>
</body>
</html>
