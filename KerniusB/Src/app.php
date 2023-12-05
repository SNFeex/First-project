<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if (!empty($name) && !empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        include 'db.php';
        $from = '$email';
        $to = 'baltusis.kernius@gmail.com';
        $subject = "Nauja žinutė";
        $author = 'Nuo: ' . $name . ', ' . $email;
        $message = htmlspecialchars($message);
        // mail($to, $subject, $author, $message, $from);
        // echo '<script>alert("Dėkojame, Jūsų užklausą gavome. Su Jumis susisieksime")</script>';
    }
}