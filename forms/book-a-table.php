<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Customize the email content
  $to = "scalpersfx123@gmail.com"; // Replace with your email address
  $subject = "Booking Request";
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Phone: $phone\n";
  $email_content .= "Message:\n$message";

  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";

  mail($to, $subject, $email_content, $headers);

  http_response_code(200);
  echo "success";
} else {
  http_response_code(403);
  echo "Error: Access Denied.";
}
?>
