<!DOCTYPE html>
<html>
<head>
    <title>Mark Sheet Generator</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #d9f9d9; /* Greenish color for Pass rows */
        }
        tr:nth-child(odd) {
            background-color: #f9d9d9; /* Reddish color for Fail rows */
        }
    </style>
</head>
<body>
    <h1>Mark Sheet Generator</h1>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="roll">Roll Number:</label>
        <input type="text" name="roll" id="roll" required><br><br>

        <label for="web_tech">Web Tech II Marks:</label>
        <input type="number" name="web_tech" id="web_tech" min="0" max="100" required><br><br>

        <label for="dbms">DBMS Marks:</label>
        <input type="number" name="dbms" id="dbms" min="0" max="100" required><br><br>

        <label for="economics">Economics Marks:</label>
        <input type="number" name="economics" id="economics" min="0" max="100" required><br><br>

        <label for="dsa">DSA Marks:</label>
        <input type="number" name="dsa" id="dsa" min="0" max="100" required><br><br>

        <label for="account">Account Marks:</label>
        <input type="number" name="account" id="account" min="0" max="100" required><br><br>

        <button type="submit" name="generate">Generate Mark Sheet</button>
    </form>

    <?php
    if (isset($_POST['generate'])) {
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $web_tech = $_POST['web_tech'];
        $dbms = $_POST['dbms'];
        $economics = $_POST['economics'];
        $dsa = $_POST['dsa'];
        $account = $_POST['account'];

        $total = $web_tech + $dbms + $economics + $dsa + $account;
        $result = $total >= 250 ? 'Pass' : 'Fail'; // Assuming 250 as the passing marks.

        echo "<h2>Mark Sheet</h2>";
        echo "<table>";
        echo "<tr>
                <th>SN</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Web Tech II</th>
                <th>DBMS</th>
                <th>Economics</th>
                <th>DSA</th>
                <th>Account</th>
                <th>Total</th>
                <th>Result</th>
              </tr>";
        echo "<tr>
                <td>1</td>
                <td>$name</td>
                <td>$roll</td>
                <td>$web_tech</td>
                <td>$dbms</td>
                <td>$economics</td>
                <td>$dsa</td>
                <td>$account</td>
                <td>$total</td>
                <td style='background-color: " . ($result === 'Pass' ? '#90ee90' : '#ffcccb') . ";'>$result</td>
              </tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
