<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_address = $_POST['address'];
    $visitor_phoneno = $_POST['phoneno'];
    $message = $_POST['message'];

    $email_to = "joshua7ko@gmail.com"; 

    $email_subject = "New Form Submission";
    $email_body = "User Name: $name\n" .
                  "User Email: $visitor_email\n" .
                  "User Address: $visitor_address\n" .
                  "User Phone Number: $visitor_phoneno\n" .
                  "User Message:\n$message\n";

    // Send the email
    mail($email_to, $email_subject, $email_body);

    // Redirect back to the form or a thank you page
    header("Location: thank-you.html"); // Create a thank-you page
}
?>
              