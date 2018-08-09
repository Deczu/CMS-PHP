<?php
$info=$app['database']->fetchtoreset($_POST['email']);
$info=$info[0];

$addhash=password_hash($info->updated_at,PASSWORD_DEFAULT);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                // Enable verbose debug output
    $mail->isSMTP();                                     // Set mailer to use SMTP
    $mail->Host = 'smtp.mailtrap.io';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                              // Enable SMTP authentication
    $mail->Username = 'e2efe91e2172bb';                  // SMTP username
    $mail->Password = 'fd79617e1e56e4';                  // SMTP password
    $mail->SMTPSecure = 'tls';                           // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                   // TCP port to connect to

    //Recipients
    $mail->setFrom('e2efe91e2172bb@mailtrap.io', 'Mailer');
    $mail->addAddress($_POST['email']);     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "<a href='http://example2.com/reset/user?token={$info->id}&dd={$addhash}'>Link</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Wiadomość została wysłana. Następuje przekierowanie na strone główną.';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
header( "refresh:3; /" );