<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


$email_address = isset($_POST['email_address']) ? $_POST['email_address'] : null;
$subject = isset($_POST['subject']) ? $_POST['subject'] : "Email Subject";
$content = isset($_POST['content']) ? $_POST['content'] : null;

if(!$email_address){
    echo "Type your email address";
}elseif (!filter_var($email_address, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email address";
}elseif (!$subject){
    echo "Type your subject";
}elseif (!$content){
    echo "Type your message";
}else{


    $mail = new PHPMailer(true);

    try{
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'user@example.com';                     // SMTP username
        $mail->Password   = 'secret';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above



        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress(@$email_address);     // Add a recipient
        $mail->CharSet='UTF-8';

        if(isset($_FILES['attachment']['name'])){
            $mail->addAttachment($_FILES['attachment']['tmp_name'],$_FILES['attachment']['name']);
        }


        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;

        $mail->send();

        echo "Email sent!";

    }catch (Exception $e){
        echo  $e->ErrorMessage;
    }
}