<?php
session_start();

// Database connection
include 'conn.php';
// Handle login submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Fetch user from the database
    $query = "SELECT * FROM admins WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verify credentials
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['admin_username'] = $user['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "Username not found.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0A1F44;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #FFFFFF;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(7, 236, 22, 0.2);
            text-align: center;
            width: 350px;
        }
        .login-container h2 {
            color: rgb(0, 59, 160);
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .input-group label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            color: #0A1F44;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #87CEEB;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 5px;
        }
        .login-btn {
            background-color: #FF6700;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        .login-btn:hover {
            background-color: #D35400;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>
</html>
