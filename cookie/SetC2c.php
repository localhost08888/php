<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['product_name'] = $_POST['product_name'];
    $_SESSION['qty'] = $_POST['qty'];
    $_SESSION['rate'] = $_POST['rate'];

    // Calculate Total
    $_SESSION['total'] = $_SESSION['qty'] * $_SESSION['rate'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Bill</title>
</head>
<body>
    <h2>Customer Bill</h2>
    <h3>Customer Details:</h3>
    <p><strong>Name:</strong> <?php echo $_SESSION['name']; ?></p>
    <p><strong>Address:</strong> <?php echo $_SESSION['address']; ?></p>
    <p><strong>Phone:</strong> <?php echo $_SESSION['phone']; ?></p>

    <h3>Product Details:</h3>
    <p><strong>Product Name:</strong> <?php echo $_SESSION['product_name']; ?></p>
    <p><strong>Quantity:</strong> <?php echo $_SESSION['qty']; ?></p>
    <p><strong>Rate (per unit):</strong> ₹<?php echo $_SESSION['rate']; ?></p>

    <h3>Total Bill Amount:</h3>
    <p><strong>Total:</strong> ₹<?php echo $_SESSION['total']; ?></p>

    <a href="SetC2.php">Start New Order</a>
</body>
</html>

<?php
// Clear session after displaying bill
session_destroy();
?>
