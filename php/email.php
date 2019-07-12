
<?php

//error_reporting(-1);
//ini_set('display_errors', 'On');
//set_error_handler("var_dump");

    $validationAnswer = $_POST['validationAnswer'];
    if ($validationAnswer != 15)
        exit();

    $name = $_POST['senderName'];
    $visitor_email = $_POST['senderEmail'];
    $message = $_POST['senderMessage'];
    
    $email_to = '21jrjones21@gmail.com'; 
    $email_subject = "Message from website";
    $date_rcvd = date("Y/m/d");

    $email_body = "New message: \n    Name:   $name \n    Email:    $visitor_email \n    Date:    $date_rcvd  \n   Message:\n        $message \n\n";


    $myfile = fopen("./email.txt", "a+");
    fwrite($myfile, $email_body);
    fclose($myfile);


//    $headers = array("From: $visitor_email",
//                    "Reply-To: $visitor_email"
//                    );
//
//    $headers = implode("\r\n", $headers);
//
//    mail($email_to, $email_subject, $email_body, $headers);
    header("location:../index.html");
    exit();
   
?>
