<?php

$mysqli = new mysqli("localhost", "root", "", "test33");
if ($mysqli->connect_error) die("Connection failed: " . $mysqli->connect_error);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $table = $_POST['table'];
    if (isset($_POST['create'])) {
        // CREATE operation
        $fields = implode(",", array_keys($_POST['data']));
        $values = "'" . implode("','", array_map([$mysqli, 'real_escape_string'], $_POST['data'])) . "'";
        $query = "INSERT INTO $table ($fields, created_at, updated_at) VALUES ($values, NOW(), NOW())";
        $mysqli->query($query) or die($mysqli->error);
        echo "Record created successfully!";
    } elseif (isset($_POST['update'])) {
        // UPDATE operation
        $updates = [];
        foreach ($_POST['data'] as $key => $value) {
            $updates[] = "$key='" . $mysqli->real_escape_string($value) . "'";
        }
        $query = "UPDATE $table SET " . implode(",", $updates) . ", updated_at=NOW() WHERE id='" . $_POST['id'] . "'";
        $mysqli->query($query) or die($mysqli->error);
        echo "Record updated successfully!";
    } elseif (isset($_POST['delete'])) {
        // DELETE operation
        $query = "DELETE FROM $table WHERE id='" . $_POST['id'] . "'";
        $mysqli->query($query) or die($mysqli->error);
        echo "Record deleted successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
</head>
<body>
    <h1>Simple CRUD Interface</h1>
    <form method="POST">
        <h3>Create Record</h3>
        <input type="hidden" name="table" value="courses">
        <input type="text" name="data[title]" placeholder="Title" required>
        <input type="text" name="data[duration]" placeholder="Duration" required>
        <select name="data[status]">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
        <button type="submit" name="create">Create</button>
    </form>

    <form method="POST">
        <h3>Update Record</h3>
        <input type="hidden" name="table" value="courses">
        <input type="text" name="id" placeholder="Record ID" required>
        <input type="text" name="data[title]" placeholder="Title">
        <input type="text" name="data[duration]" placeholder="Duration">
        <select name="data[status]">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
        <button type="submit" name="update">Update</button>
    </form>

    <form method="POST">
        <h3>Delete Record</h3>
        <input type="hidden" name="table" value="courses">
        <input type="text" name="id" placeholder="Record ID" required>
        <button type="submit" name="delete">Delete</button>
    </form>

    <h3>View Records</h3>
    <?php
    if ($result = $mysqli->query("SELECT * FROM courses")) {
        echo "<table border='1'><tr>";
        while ($field = $result->fetch_field()) {
            echo "<th>" . $field->name . "</th>";
        }
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Error: " . $mysqli->error;
    }
    ?>
</body>
</html>
