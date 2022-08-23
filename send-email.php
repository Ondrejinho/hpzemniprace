<?php

session_start();

$required = ['userName', 'userEmail', 'userPhone', 'userMessage'];
$continue = false;

if ($_POST) {
    $continue = true;
    foreach ($required as $req) {
        if ($_POST[$req] == "") {
            $continue = false;
        }
    }
}

if ($continue) {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPhone = $_POST['userPhone'];
    $userMessage = $_POST['userMessage'];

    $to = "patres15999@gmail.com";
    $subject = '/';
    $message = '<html><body>';
    $message .= '<p>Meno: ' . $userName . '</p>';
    $message .= '<p>E-mail: ' . $userEmail . '</p>';
    $message .= '</body></html>';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <' . "example@example.com" . '>' . "\r\n";
    $headers .= 'Reply-To: ' . $userEmail . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    $mail = mail($to, $subject, $message, $headers);

    if ($mail) {
        $_SESSION['email_status'] = 'successfully';
        header("Location: index.php");
        die();
    } else {
        $_SESSION['email_status'] = 'error';
        header("Location: index.php");
        die();
    }
} else {
    $_SESSION['email_status'] = 'required_all';
    header("Location: index.php");
    die();
}
