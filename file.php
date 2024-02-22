<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $rating = $_POST["rating"];
    $comments = $_POST["comments"];

    $to = "kenryanluke@gmail.com";
    $subject = "Survey Response";
    $message = "Name: $name\nEmail: $email\nRating: $rating\nComments: $comments";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for submitting the survey!";
    } else {
        echo "Failed to send the survey. Please try again later.";
    }
}
?>