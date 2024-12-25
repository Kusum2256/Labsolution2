<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Array in HTML Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Display Array in HTML Table</h1>
    <?php
    $info = [
        'Name' => 'Ram Bahadur',
        'Address' => 'Lalitpur',
        'Email' => 'info@ram.com',
        'Phone' => 98454545,
        'Website' => 'www.ram.com'
    ];
    ?>
    <table>
        <?php
        foreach ($info as $key => $value) {
            echo "<tr>";
            echo "<th>$key</th>"; 
            echo "<td>$value</td>"; 
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
