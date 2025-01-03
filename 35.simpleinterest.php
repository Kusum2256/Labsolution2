<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest Calculator</title>
</head>
<body>
    <h2>Simple Interest Calculator</h2>
    <form method="post" action="">
        <label for="principal">Principal Amount:</label>
        <input type="number" step="0.01" name="principal" id="principal" required><br><br>

        <label for="rate">Rate of Interest (% per annum):</label>
        <input type="number" step="0.01" name="rate" id="rate" required><br><br>

        <label for="time">Time (in years):</label>
        <input type="number" step="0.01" name="time" id="time" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $principal = $_POST['principal'];
        $rate = $_POST['rate'];
        $time = $_POST['time'];

        // Calculate simple interest
        $simpleInterest = ($principal * $rate * $time) / 100;

        echo "<h3>Simple Interest:</h3>";
        echo "<p>Principal Amount: $$principal</p>";
        echo "<p>Rate of Interest: $rate%</p>";
        echo "<p>Time: $time years</p>";
        echo "<p>Simple Interest: $$simpleInterest</p>";
    }
    ?>
</body>
</html>
