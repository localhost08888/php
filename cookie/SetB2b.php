<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['class'] = $_POST['class'];
    $_SESSION['address'] = $_POST['address'];
}
?>

<!Doctype html>
<html>
<head>
    <title>Enter Marks</title>
</head>
<body>
    <h2>Enter Student Marks</h2>
    <form method="post" action="SetB2c.php">
        Physics   : <input type="number" name="physics" required> <br><br>
        Biology   : <input type="number" name="biology" required> <br><br>
        Chemistry : <input type="number" name="chemistry" required> <br><br>
        Maths     : <input type="number" name="maths" required> <br><br>
        Marathi   : <input type="number" name="marathi" required> <br><br>
        English   : <input type="number" name="english" required> <br><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>
