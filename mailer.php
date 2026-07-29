<?php

 
// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
 
if(isset($_POST['submit'])) {
$to = "arthur@artski.org";
$subj = "An Email from ".$name_field."!";
$from = "From: ".$email_field."\r\n";

//constructing the message
$body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $comment";
 
// ...and away we go!
mail($to, $subj, $body, $from);
 
// redirect to confirmation
header('Location: confirm.html');
} else {
// handle the error somehow
}
?>