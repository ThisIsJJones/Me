
<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

    $name = $_POST['senderName'];
    $visitor_email = $_POST['senderEmail'];
    $message = $_POST['senderMessage'];
    
    $email_to = '21jrjones21@gmail.com'; 
    $email_subject = "Message from website";
    $email_body = "You have received a new message from $name.\n Here is the message:\n $message .";
        
    $headers = array("From: $visitor_email",
        "Reply-To: $visitor_email",
        "X-Mailer: PHP/" . PHP_VERSION,
        "Content-Type: text/html; charset=ISO-8859-1"
        );
    $headers = implode("\r\n", $headers);
    
        
   
    if ($_POST['submit']) {
        if ( mail($email_to, $email_subject, $email_body)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }
//    header("location:../index.php");

?>
