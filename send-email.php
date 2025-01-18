<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $dob = htmlspecialchars($_POST['dob']);
    $idNumber = htmlspecialchars($_POST['idNumber']);
    $location = htmlspecialchars($_POST['location']);

    $to = "ahmed.bahrouni@esprit.tn"; // Replace with your email address
    $subject = "New Chef Registration";
    $message = "Chef Details:\n\n" .
               "First Name: $firstName\n" .
               "Last Name: $lastName\n" .
               "Date of Birth: $dob\n" .
               "ID Number: $idNumber\n" .
               "Location: $location\n";

    $headers = "From: noreply@example.com"; // Replace with your domain's email address

    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully.";
    } else {
        echo "There was an error submitting the form.";
    }
}
?>
