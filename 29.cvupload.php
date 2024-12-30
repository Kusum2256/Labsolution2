<!DOCTYPE html>
<html>
<head>
    <title>Upload CV and Profile Image</title>
</head>
<body>
    <h2>Upload CV</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="cv" accept=".pdf,.doc,.docx" required>
        <button type="submit" name="upload_cv">Upload CV</button>
    </form>
    <?php
    if (isset($_POST['upload_cv'])) {
        if ($_FILES['cv']['size'] <= 1048576 && preg_match('/\.(pdf|doc|docx)$/', $_FILES['cv']['name'])) {
            move_uploaded_file($_FILES['cv']['tmp_name'], 'uploads/' . $_FILES['cv']['name']);
            echo "CV uploaded successfully!";
        } else {
            echo "Invalid file type or size exceeds 1 MB.";
        }
    }
    ?>
</body>
</html>
