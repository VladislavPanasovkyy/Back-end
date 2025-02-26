<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'v.o.panasovskyi@student.khai.edu';
    $mail->Password   = 'dupb xmpf wprx itlr';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('v.o.panasovskyi@student.khai.edu', '11234');
    $mail->addAddress('kobalt5t5@gmail.com');

    $mail->Subject = 'TEST';
    $mail->Body    = "firstName : Vlad\nLast name : Panasovskyi\nMiddle name: Olegoviср";

    $mail->send();
    echo "Лист успішно надіслано!";
} catch (Exception $e) {
    echo "Помилка відправки: {$mail->ErrorInfo}";
}
?>
