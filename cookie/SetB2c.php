<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $_SESSION['physics'] = $_POST['physics'];
    $_SESSION['biology'] = $_POST['biology'];
    $_SESSION['chemistry'] = $_POST['chemistry'];
    $_SESSION['maths'] = $_POST['maths'];
    $_SESSION['marathi'] = $_POST['marathi'];
    $_SESSION['english'] = $_POST['english'];

    // Calculate total and percentage
    $total = $_SESSION['physics'] + $_SESSION['biology'] + $_SESSION['chemistry'] + 
             $_SESSION['maths'] + $_SESSION['marathi'] + $_SESSION['english'];
    $percentage = ($total / 600) * 100;
}
?>

<!Doctype html>
<html>
<head>
    <title>Mark Sheet</title>
</head>
<body>
    <h2>Student Mark Sheet</h2>
    <p><strong>Name:</strong> <?php echo $_SESSION['name']; ?></p>
    <p><strong>Class:</strong> <?php echo $_SESSION['class']; ?></p>
    <p><strong>Address:</strong> <?php echo $_SESSION['address']; ?></p>

    <h3>Marks Obtained</h3>
    <p>Physics: <?php echo $_SESSION['physics']; ?></p>
    <p>Biology: <?php echo $_SESSION['biology']; ?></p>
    <p>Chemistry: <?php echo $_SESSION['chemistry']; ?></p>
    <p>Maths: <?php echo $_SESSION['maths']; ?></p>
    <p>Marathi: <?php echo $_SESSION['marathi']; ?></p>
    <p>English: <?php echo $_SESSION['english']; ?></p>

    <h3>Total and Percentage</h3>
    <p><strong>Total Marks:</strong> <?php echo $total; ?> / 600</p>
    <p><strong>Percentage:</strong> <?php echo number_format($percentage, 2); ?>%</p>
</body>
</html>
