<!DOCTYPE html>
<html>
<head>
    <title>Upload Profile Image</title>
</head>
<body>
    <h2>Upload Profile Image</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="profile_image" accept=".png,.jpeg,.jpg" required>
        <button type="submit" name="upload_image">Upload Image</button>
    </form>
    <?php
    if (isset($_POST['upload_image'])) {
        if ($_FILES['profile_image']['size'] <= 512000 && preg_match('/\.(png|jpg|jpeg)$/', $_FILES['profile_image']['name'])) {
            move_uploaded_file($_FILES['profile_image']['tmp_name'], 'uploads/' . $_FILES['profile_image']['name']);
            echo "Profile image uploaded successfully!";
        } else {
            echo "Invalid file type or size exceeds 500 KB.";
        }
    }
    ?>
</body>
</html>
