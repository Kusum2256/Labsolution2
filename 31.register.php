<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            display: flex;
        }
        .form-container {
            width: 300px;
        }
        input, button {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
        }
        button {
            background-color: #28A745;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Register User</h2>
        <form method="POST">
           Username: <input type="text" name="username" placeholder="Username" required><br>
            Email:<input type="email" name="email" placeholder="Email" required><br>
            Date of Birth:<input type="date" name="dob" required><br>
           Phone no: <input type="text" name="phone" placeholder="Phone (10 digits)" required><br>
            <button type="submit" name="register_user">Register</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_user'])) {
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $dob = htmlspecialchars($_POST['dob']);
            $phone = htmlspecialchars($_POST['phone']);

            if (strlen($username) >= 8 && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^\d{10}$/', $phone)) {
                echo "<p>User registered successfully!</p>";
            } else {
                echo "<p style='color: red;'>Invalid inputs. Please check your data.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
