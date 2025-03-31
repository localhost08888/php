<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Information</title>
</head>
<body>
    <h2>Enter Customer Details</h2>
    <form method="post" action="SetC2b.php">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Address:</label>
        <input type="text" name="address" required><br><br>

        <label>Phone Number:</label>
        <input type="text" name="phone" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number"><br><br>

        <input type="submit" value="NEXT">
    </form>
</body>
</html>
