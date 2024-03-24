<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if an email has been submitted
    if (isset($_POST["email"])) {
        // Email address to which the form will be sent
        $to = "aleksandra@avaloninitiative.org";
        
        // Subject of the email
        $subject = "New subscriber";

        // Message of the email
        $message = "You have subscribed with the email address: " . $_POST["email"];

        // Email headers
        $headers = "From: aleksandra@avaloninitiative.org" . "\r\n" .
                   "Reply-To: aleksandra@avaloninitiative.org" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Thank you for subscribing!";
        } else {
            echo "There was an error processing your request. Please try again later.";
        }
    }
}
?>
