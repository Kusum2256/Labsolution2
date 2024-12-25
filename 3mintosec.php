<!DOCTYPE html>
<html lang="en">
<head>
    <title>Convert Minutes to Seconds</title>
</head>
<body>
    <h1>Convert Minutes to Seconds</h1>

    <?php
    // Function to convert minutes to seconds
    function minutesToSeconds($minutes) {
        return $minutes * 60;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $minutes = $_POST['minutes'];
        if (is_numeric($minutes) && $minutes >= 0) {
            $seconds = minutesToSeconds($minutes);
            echo "<h2>Results:</h2>";
            echo "Minutes: $minutes<br>";
            echo "Seconds: $seconds<br>";
        } else {
            echo "<h2 style='color: red;'>Please enter a valid non-negative number for minutes.</h2>";
            showForm($minutes); 
        }
    } else {
        showForm(""); 
    }
    function showForm($minutes) {
        echo '<form method="POST" action="">
                <label for="minutes">Enter Minutes:</label>
                <input type="text" name="minutes" id="minutes" placeholder="Enter minutes here" value="' . htmlspecialchars($minutes) . '" required>
                <br><br>
                <input type="submit" value="Convert">
              </form>';
    }
    ?>
</body>
</html>
