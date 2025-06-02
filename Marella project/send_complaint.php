
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your-email@example.com";  // Replace with your email address
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $title = htmlspecialchars($_POST["title"]);
    $message = htmlspecialchars($_POST["message"]);

    $subject = "Complaint from Marella Group of School: $title";
    $body = "Name: $name\nEmail: $email\n\nComplaint:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Complaint submitted successfully. We'll get back to you.";
    } else {
        echo "There was a problem sending your complaint. Please try again.";
    }
} else {
    echo "Invalid Request.";
}
?>
