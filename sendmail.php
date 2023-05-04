<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validate form data
    $errors = [];
    $name = trim($_POST['name']);
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    $email = trim($_POST['email']);
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    $message = trim($_POST['message']);
    if (empty($message)) {
        $errors[] = 'Message is required';
    }

    // if there are errors, output them and stop processing
    if (!empty($errors)) {
        foreach ($errors as $error) {
        echo '<p>' . $error . '</p>';
        }
        exit;
    }

    // if there are no errors, send the email
    $to = 'mrankovic310@gmail.com';
    $subject = 'New message from ' . $name;
    $message = $message . "\r\n\r\nFrom: " . $name . " <" . $email . ">";
    $headers = 'From: ' . $name . ' <' . $email . '>';
        if (mail($to, $subject, $message, $headers)) {
            echo 'Email sent!';
        } else {
            echo 'Email not sent. Please try again later.';
        }
    }
?>