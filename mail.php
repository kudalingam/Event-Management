<?php
// the message
$msg = "Hi! Manikandan, This is your 6-digit '$code'. Please enter the code to join the event management family. Bye!!!... ";

// use wordwrap() if lines are longer than 70 characters
$header="From: 'Event Management' kudalingam18@gmail.com";
$subject= "Email Verification Code ";
$to="mk475079@gmail.com";
// send email
if(mail($to,$subject,$msg,$header)){
    echo"Success";
}
else{
echo"Failed";
}
?>
