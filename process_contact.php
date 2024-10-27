<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you could add functionality to save to a database or send an email

    echo "<p>Thank you, $name! Your message has been received.</p>";
} else {
    echo "<p>Something went wrong. Please try again.</p>";
}
?>
<a href="index.php">Back to Home</a>
