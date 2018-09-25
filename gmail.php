<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['send_mail'])) {

    //Load composer's autoloader
    require 'vendor/autoload.php';
    print_r($_POST);
    $mail = new PHPMailer(true); // Passing `true` enables exceptions
    try {
        //Server settings
        // $mail->SMTPDebug = 2; // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'luongthongvfu@gmail.com'; // SMTP username
        $mail->Password = 'kpxvxernkwreuoen'; // SMTP password
        $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465; // TCP port to connect to

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('luongthongvfu@gmail.com', 'Joe User'); // Add a recipient

        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body = 'This is the HTML message body hrhe1 <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Gửi mail thành công!';

    } catch (Exception $e) {
        
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
