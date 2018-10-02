
<?php

    $name = $_POST['senderName'];
    $visitor_email = $_POST['senderEmail'];
    $message = $_POST['senderMessage'];
    
    $email_to = '21jrjones21@gmail.com';
    $email_subject = "Message from website";
    $email_body = "You have received a new message from " . $name . ".\n Here is the message:\n" . $message . "."
    $headers = "From: " . $visitor_email . "\r\n"; 
    
        
    mail($email_to,$email_subject,$email_body,$headers)

?>
