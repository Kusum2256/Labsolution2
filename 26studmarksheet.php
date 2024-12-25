<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marksheet</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
        .pass {
            background-color: #a8f5a8;
        }
        .fail {
            background-color: #f5a8a8;
        }
        .alternate-row:nth-child(even) {
            background-color: #eaeaea;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Mark Ledger</h1>

    <?php

    $students = [
        ["SN" => 1, "Name" => "Rajesh", "Roll" => 25, "Web_Tech_II" => 1, "DBMS" => 2, "Economics" => 3, "DSA" => 3, "Account" => 4],
        ["SN" => 2, "Name" => "Hari", "Roll" => 5, "Web_Tech_II" => 56, "DBMS" => 89, "Economics" => 57, "DSA" => 64, "Account" => 98],
        ["SN" => 3, "Name" => "Shyam", "Roll" => 6, "Web_Tech_II" => 54, "DBMS" => 79, "Economics" => 57, "DSA" => 69, "Account" => 98],
        ["SN" => 4, "Name" => "Rita", "Roll" => 10, "Web_Tech_II" => 16, "DBMS" => 89, "Economics" => 56, "DSA" => 64, "Account" => 98],
        ["SN" => 5, "Name" => "Gita", "Roll" => 4, "Web_Tech_II" => 56, "DBMS" => 89, "Economics" => 57, "DSA" => 69, "Account" => 98],
        ["SN" => 6, "Name" => "Sita", "Roll" => 24, "Web_Tech_II" => 10, "DBMS" => 20, "Economics" => 20, "DSA" => 5, "Account" => 1],
    
    ];

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

    foreach ($students as $student) {
    
        $total = $student["Web_Tech_II"] + $student["DBMS"] + $student["Economics"] + $student["DSA"] + $student["Account"];
        $result = $total >= 300 ? "Pass" : "Fail";
        $class = $result === "Pass" ? "pass" : "fail";

        echo "<tr class='alternate-row'>";
        echo "<td>{$student['SN']}</td>";
        echo "<td>{$student['Name']}</td>";
        echo "<td>{$student['Roll']}</td>";
        echo "<td>{$student['Web_Tech_II']}</td>";
        echo "<td>{$student['DBMS']}</td>";
        echo "<td>{$student['Economics']}</td>";
        echo "<td>{$student['DSA']}</td>";
        echo "<td>{$student['Account']}</td>";
        echo "<td>{$total}</td>";
        echo "<td class='$class'>{$result}</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
