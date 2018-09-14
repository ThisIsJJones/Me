<?php
if($_POST["sendMessage"]) {
    mail("21jrjones21@gmail.com", "Form to email message", $_POST["sendMessage"], "From: $_POST['emailMessage']");
}
?>