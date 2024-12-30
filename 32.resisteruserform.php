<?php
$conn = mysqli_connect('localhost', 'root', '', 'testdb');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? '';
    $rank = $_POST['rank'] ?? '';
    $status = $_POST['status'] ?? '';
    $created_by = 'admin'; 
    $updated_by = 'admin';
    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');
    $image = $_FILES['image']['name'] ?? '';

    if ($action === 'store') {
    
        if (!empty($image)) {
            move_uploaded_file($_FILES['image']['tmp_name'], "uploads/$image");
        }
        $query = "INSERT INTO records (name, rank, status, image, created_by, updated_by, created_at, updated_at) 
                  VALUES ('$name', '$rank', '$status', '$image', '$created_by', '$updated_by', '$created_at', '$updated_at')";
        mysqli_query($conn, $query);
    } elseif ($action === 'update') {
        $query = "UPDATE records SET name='$name', rank='$rank', status='$status', updated_by='$updated_by', updated_at='$updated_at' 
                  WHERE id='$id'";
        mysqli_query($conn, $query);
    } elseif ($action === 'delete') {
        $query = "DELETE FROM records WHERE id='$id'";
        mysqli_query($conn, $query);
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Fetch all records
$result = mysqli_query($conn, "SELECT * FROM records");
$records = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Records</title>
</head>
<body>
    <h2>Manage Records</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="store">
        <input type="text" name="name" placeholder="Name" required>
        <input type="number" name="rank" placeholder="Rank" required>
        <input type="text" name="status" placeholder="Status" required>
        <input type="file" name="image" accept="image/*">
        <button type="submit">Add Record</button>
    </form>

    <h3>All Records</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Rank</th>
            <th>Status</th>
            <th>Image</th>
            <th>Created By</th>
            <th>Updated By</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($records as $record): ?>
        <tr>
            <td><?= $record['id'] ?></td>
            <td><?= $record['name'] ?></td>
            <td><?= $record['rank'] ?></td>
            <td><?= $record['status'] ?></td>
            <td>
                <?php if ($record['image']): ?>
                    <img src="uploads/<?= $record['image'] ?>" width="50" height="50">
                <?php endif; ?>
            </td>
            <td><?= $record['created_by'] ?></td>
            <td><?= $record['updated_by'] ?></td>
            <td><?= $record['created_at'] ?></td>
            <td><?= $record['updated_at'] ?></td>
            <td>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?= $record['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" value="<?= $record['id'] ?>">
                    <input type="text" name="name" value="<?= $record['name'] ?>" required>
                    <input type="number" name="rank" value="<?= $record['rank'] ?>" required>
                    <input type="text" name="status" value="<?= $record['status'] ?>" required>
                    <button type="submit">Update</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
