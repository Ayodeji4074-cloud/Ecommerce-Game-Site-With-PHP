<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set recipient email address
    $to = "adeniyiemmanuel4074@gmail.com";

    // Set email subject
    $subject = "New Order Submitted";

    // Email message
    $message = "ORDER SUBMITTED FROM MANDU OFFFIONG";

    // Additional email headers
    $headers = "From: adeniyiemmanuel998@gmail.com\r\n";
    $headers .= "Reply-To: adeniyiemmanuel998@gmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
