<?php
if(isset($_POST['submit'])) 
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $formcontent="From: $name \n Message: $message";
  $recipient = "your@mail.com";
  $subject = "Contact Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  header("Location: http://www.notyez.com/");
  echo "<script>alert(Thank You!)</script>";
  session_destroy();
}
?>
