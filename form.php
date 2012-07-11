<?php
    session_start();
    $to = "clayphillipp@gmail.com";
    $subject = "Contact Form";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $message = $name . "\n ". $email . "\n ". $phone . "\n ". $message;
    $headers = "From: $email";
    $sent = mail($to, $subject, $message, $headers);
    if($sent) {
        $_SESSION['message'] = 'Thank you, we will be in touch soon.';
        header('Location: index.php#bottom');
    }
    else{
        $_SESSION['message'] = 'Sorry, there was a problem. Please try again.';
        header('Location: index.php#bottom');
    }
?>