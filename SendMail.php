<?php

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $to = 'thetechstuffs@thetechstuffs.com';

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.server.com'; //the smtp server for send email
    $mail->SMTPAuth = true;
    $mail->Username = 'username';  //smtp email username
    $mail->Password = 'password';  //smtp email password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 456; //port for smtp
    $mail->setFrom($email, $first.' '.$last);
    $mail->isHTML(true);
     $mail->addAddress('sumanta@thetechstuffs.com', 'Joe User');     //Add a recipient
    // $mail->addAddress('anotheuser@thetechstuffs.com');               //Name is optional
    // $mail->addReplyTo('replay@thetechstuffs.com', 'The Subject');
    // $mail->addCC('cc@thetechstuffs.com');
    // $mail->addBCC('bcc@thetechstuffs.com');
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    header('location:index.php');

}else{
    echo "Wrong Submit";
}
