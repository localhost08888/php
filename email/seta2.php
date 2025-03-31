<?php
if(isset($_POST['send'])) {
    $from = trim($_POST['from']);
    $to = trim($_POST['to']);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $text = htmlspecialchars(trim($_POST['text']));

    // Splitting multiple email addresses
    $to_many = explode(",", $to);
    $headers = "From: " . $from . "\r\n" .
               "Reply-To: " . $from . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $success = 0;
    $failed = 0;
    $output = "";

    foreach($to_many as $email) {
        $email = trim($email); // Remove any extra spaces

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if(mail($email, $subject, $text, $headers)) {
                $output .= "<b>Email to $email sent successfully!</b><br>";
                $success++;
            } else {
                $output .= "<b>Email to $email could not be sent!</b><br>";
                $failed++;
            }
        } else {
            $output .= "<b>Invalid email address: $email</b><br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Email Result</title>
</head>
<body>
    <h2>Email Sending Result</h2>
    <?php
    if(isset($output)) {
        echo $output;
        echo "<hr><b>Summary:</b> Sent: $success, Failed: $failed <br><br>";
    } else {
        echo "<b>No email was sent.</b>";
    }
    ?>
    <br><br>
    <a href="index.html">Go Back</a>
</body>
</html>
