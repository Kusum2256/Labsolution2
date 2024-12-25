<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Points Calculator</title>
</head>
<body>
    <h1>Calculate Total Points of Football Team</h1>

    <form method="post">
        <label for="wins">Number of Wins:</label>
        <input type="number" id="wins" name="wins" required>
        <br><br>

        <label for="draws">Number of Draws:</label>
        <input type="number" id="draws" name="draws" required>
        <br><br>

        <label for="losses">Number of Losses:</label>
        <input type="number" id="losses" name="losses" required>
        <br><br>

        <input type="submit" name="calculate" value="Calculate Total Points">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        function calculate_points($wins, $draws, $losses) {
            return ($wins * 3) + ($draws * 1) + ($losses * 0);
        }
        $wins = $_POST['wins'];
        $draws = $_POST['draws'];
        $losses = $_POST['losses'];
        $total_points = calculate_points($wins, $draws, $losses);
        echo "<h3>Total Points: $total_points</h3>";
    }
    ?>
</body>
</html>
