<?php
session_start();

// Set correct credentials
$correct_username = "admin";
$correct_password = "password123";

// Initialize login attempts if not set
if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && $password === $correct_password) {
        // Reset attempts and redirect to welcome page
        $_SESSION['attempts'] = 0;
        $_SESSION['loggedin'] = true;
        header("Location: SetC3b.php");
        exit();
    } else {
        // Increase attempts count
        $_SESSION['attempts']++;
        
        if ($_SESSION['attempts'] >= 3) {
            $error_message = "You have exceeded the maximum number of login attempts!";
        } else {
            $error_message = "Invalid username or password! Attempts remaining: " . (3 - $_SESSION['attempts']);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>User Login</h2>

    <?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>

    <?php if ($_SESSION['attempts'] < 3) { ?>
        <form method="post">
            <label>Username:</label>
            <input type="text" name="username" required><br><br>

            <label>Password:</label>
            <input type="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>
    <?php } else { ?>
        <p>Login disabled. Please try again later.</p>
    <?php } ?>

</body>
</html>
