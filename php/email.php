
<?php

//error_reporting(-1);
//ini_set('display_errors', 'On');
//set_error_handler("var_dump");

    $name = $_POST['senderName'];
    $visitor_email = $_POST['senderEmail'];
    $message = $_POST['senderMessage'];
    
    $email_to = '21jrjones21@gmail.com'; 
    $email_subject = "Message from website";
    $email_body = "You have received a new message from $name. \r\n Here is the message:\r\n\r\n $message.";

    $headers = array("From: $visitor_email",
        "Reply-To: $visitor_email"
        );
    $headers = implode("\r\n", $headers);

    mail($email_to, $email_subject, $email_body, $headers);
    header("location:../index.php");

?>
