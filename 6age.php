<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age to Days Calculation</title>
</head>
<body>
    <h1>Convert Age in Years to Age in Days</h1>

    <form method="post">
        <label for="age">Age in Years:</label>
        <input type="number" id="age" name="age" required>
        <br><br>

        <input type="submit" name="age_in_days" value="Calculate Age in Days">
    </form>

    <?php
    // Function to convert age in years to age in days
    if (isset($_POST['age_in_days'])) {
        function age_in_days($age_in_years) {
            return $age_in_years * 365; // Approximation
        }

        // Get the age input
        $age_in_years = $_POST['age'];

        // Calculate and display the age in days
        $days = age_in_days($age_in_years);
        echo "<h3>Age in Days: $days</h3>";
    }
    ?>
</body>
</html>
