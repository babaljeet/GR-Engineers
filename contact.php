<?php
    $visitor_email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];


    $email_form = 'grengineers@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
    
    $to = "son.babaljeet@gmail.com";

    $headers = "From: $email_form \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html")
?>