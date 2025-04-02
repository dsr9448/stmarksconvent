<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $studentName = $_POST['studentName'];
    $message = $_POST['message'];

    $to = "stmarksconventrajajinagar@gmail.com";
    $subject = "New Enquiry from $name";
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nStudent Name: $studentName\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: index.html#enquiry?status=success");
    } else {
        header("Location: index.html#enquiry?status=error");
    }
    exit();
}
?>
