<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $name = echo $_POST["flname"];
    $from = echo $_POST["email"];
    $to = "test@timothygijbels.nl";
    $subject = echo $_POST["subject"];
    $message = "Name: " $name ",,, Message: " echo $_POST["message"];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Your message was sent by email.";
?>
