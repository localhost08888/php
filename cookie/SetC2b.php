<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['phone'] = $_POST['phone'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Information</title>
</head>
<body>
    <h2>Enter Product Details</h2>
    <form method="post" action="SetC2c.php">
        <label>Product Name:</label>
        <input type="text" name="product_name" required><br><br>

        <label>Quantity:</label>
        <input type="number" name="qty" required min="1"><br><br>

        <label>Rate (per unit):</label>
        <input type="number" name="rate" required min="1"><br><br>

        <input type="submit" value="GENERATE BILL">
    </form>
</body>
</html>
