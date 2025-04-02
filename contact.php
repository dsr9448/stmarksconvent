<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $classes = $_POST['classes'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $message = $_POST['message'];

    $to = "stmarksconventrajajinagar@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMobile: $mobile\nClass: $classes\nCity: $city\nPincode: $pincode\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact-us.html?status=success");
    } else {
        header("Location: contact-us.html?status=failed");
    }
}
?>
