<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;

require_once "../public/PHPMailer/Exception.php";
require_once "../public/PHPMailer/PHPMailer.php";
require_once "../public/PHPMailer/SMTP.php";

$mail = new PHPMailer(true);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$filename = "http://127.0.0.1/www/Erneo/contact";
$result="success";

try {
    //Configuration
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER; //Je veux des infos de debug

    //Configuration SMTP
    $mail->isSMTP();
    // $mail->Host = "localhost";
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Username = 'erneocontact@gmail.com';
    $mail->Password = 'juliennicolaserneo2021';

    //Charset 
    $mail->CharSet = "utf-8";

    // Destinataires
    $mail->addAddress("contact@erneo.fr");
    // $mail->addAddress("deuxiemeadresse@site.fr");

    // Expéditeur
    $mail->setFrom($email);

    // contenu
    $mail->Subject = $subject;
    $mail->Body = "Message envoyé par : " . $name . "\t\n" . "\t\n" . "Adresse mail de l'expéditeur : " . $email . "\t\n" . "\t\n" . $message;

    // On envoie
    $mail->send();
} catch (Exception $e) {
    //$result = "error";
    ?>
    <script>
        alert("Une erreur est survenue. Message non envoyé.");
    </script>
    <?php
}

header("location:" . $filename);