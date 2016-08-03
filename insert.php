<?php

// Get values from form
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$to = "mcclain.sam@gmail.com";
$subject = "Web Inquiry";
$message = " Name: " . $name . "\r\n Phone: " . $phone . "\r\n Email: " . $email;


$from = $email;//"FutureTutorials";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='success.html';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}



?>
