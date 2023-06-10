<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Configure your email settings
  $to = 'karthikeyan.ravichandran22@gmail.com';
  $subject = 'New Message from Contact Form';
  $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

  // Send the email using the configured MTA
  $success = mail($to, $subject, $body);

  if ($success) {
    echo 'Thank you for contacting us! We will get back to you soon.';
  } else {
    echo 'Oops! An error occurred. Please try again.';
  }
}
?>
