<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = trim($_POST["firstname"]);
    $lastname = trim($_POST["lastname"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);
    
    // Additional fields for checkboxes
    $interests = isset($_POST['interests']) ? $_POST['interests'] : array();
    if (isset($_POST['permaculture'])) {
        $interests[] = "Permaculture";
    }
    if (isset($_POST['sustainable_living'])) {
        $interests[] = "Sustainable Living";
    }
    if (isset($_POST['visiting_avalon'])) {
        $interests[] = "Visiting Avalon";
    }
    if (isset($_POST['territory'])) {
        $interests[] = "Exploring the indigenous territory";
    }
    if (isset($_POST['something_else'])) {
        $interests[] = $_POST['something_else'];
    }

    // Compose email message
    $to = "aleksandra@avaloninitiative.org";
    $subject = "New Form Submission";
    $email_content = "First Name: $firstname\n";
    $email_content .= "Last Name: $lastname\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message: $message\n";
    $email_content .= "Interests: " . implode(", ", $interests) . "\n";

    // Send email
    $headers = "From: $email";
    mail($to, $subject, $email_content, $headers);
    
    // Redirect after submission
    header("Location: thank_you_page.html");
    exit();
}
?>
