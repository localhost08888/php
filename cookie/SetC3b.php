<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, You are successfully logged in!</h2>
    <p>This is the second form that appears after successful login.</p>

    <!-- Logout Button -->
    <form method="post" action="logout.php">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
