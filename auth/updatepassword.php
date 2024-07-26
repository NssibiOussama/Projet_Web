<?php
require '../vendor/src/Exception.php';
require '../vendor/src/PHPMailer.php';
require '../vendor/src/SMTP.php';
require '../connexion/connexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function generateRandomPassword($length = 10)
{
    return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, $length);
}

function sendPasswordResetEmail($email, $newPassword)
{
    $mail = new PHPMailer(true);

    try {
        // Enable verbose debug output
        $mail->SMTPDebug = 0; // Disable debug output for production use
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'oussama.nsibi@esen.tn'; // SMTP username
        $mail->Password = 'HAbiba08087881+-*'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Disable SSL certificate verification (for testing purposes)
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        //Recipients
        $mail->setFrom('oussama.nsibi@esen.tn', 'Seminaire Club');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset';
        $mail->Body = "Your new password is: <b>$newPassword</b>";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $bdd = maConnexion();

    $newPassword = generateRandomPassword();
    $hashedPassword = md5($newPassword);

    $sql = "UPDATE utilisateurs SET mdp=:mdp WHERE email=:email";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':mdp', $hashedPassword);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        if (sendPasswordResetEmail($email, $newPassword)) {
            header("Location: signin_signup.php");
            exit();
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Error updating password: " . $stmt->errorInfo()[2];
    }
}
?>