<!DOCTYPE html>
<html>
<head>
    <title>Tax Calculator</title>
</head>
<body>
    <h1>Tax Calculator</h1>
    <form method="POST">
        <label for="income">Annual Income:</label>
        <input type="number" name="income" id="income" required><br><br>

        <label for="status">Marital Status:</label>
        <select name="status" id="status" required>
            <option value="married">Married</option>
            <option value="unmarried">Unmarried</option>
        </select><br><br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>

        <button type="submit" name="calculate">Calculate Tax</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $income = $_POST['income'];
        $status = $_POST['status'];
        $gender = $_POST['gender'];

        $tax = 0;

        if ($status == 'married') {
            if ($income <= 450000) {
                $tax = $income * 0.01;
            } elseif ($income <= 550000) {
                $tax = 4500 + ($income - 450000) * 0.10;
            } elseif ($income <= 750000) {
                $tax = 4500 + 10000 + ($income - 550000) * 0.20;
            } elseif ($income <= 1300000) {
                $tax = 4500 + 10000 + 40000 + ($income - 750000) * 0.30;
            } else {
                $tax = 4500 + 10000 + 40000 + 165000 + ($income - 1300000) * 0.35;
            }
        } else { // Unmarried
            if ($income <= 400000) {
                $tax = $income * 0.01;
            } elseif ($income <= 500000) {
                $tax = 4000 + ($income - 400000) * 0.10;
            } elseif ($income <= 750000) {
                $tax = 4000 + 10000 + ($income - 500000) * 0.20;
            } elseif ($income <= 1300000) {
                $tax = 4000 + 10000 + 50000 + ($income - 750000) * 0.30;
            } else {
                $tax = 4000 + 10000 + 50000 + 165000 + ($income - 1300000) * 0.35;
            }
        }

        // Apply gender discount if female
        if ($gender == 'female') {
            $tax -= $tax * 0.10;
        }

        echo "<h2>Tax Calculation Result</h2>";
        echo "Annual Income: $income<br>";
        echo "Marital Status: " . ucfirst($status) . "<br>";
        echo "Gender: " . ucfirst($gender) . "<br>";
        echo "Calculated Tax: " . round($tax, 2) . "<br>";
    }
    ?>
</body>
</html>
