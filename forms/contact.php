<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "scalpersfx123@gmail.com"; // Replace with your email address
  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";

  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n\n";
  $email_content .= "Subject: $subject\n";
  $email_content .= "Message:\n$message";

  mail($to, $subject, $email_content, $headers);

  http_response_code(200);
  echo "success";
} else {
  http_response_code(403);
  echo "Error: Access Denied.";
}
?>
