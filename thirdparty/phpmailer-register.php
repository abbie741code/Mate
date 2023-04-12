
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load composer's autoloader
require '../../vendor/autoload.php';

$registerEmail = isset($_GET['registerEmail']) ? $_GET['registerEmail'] : 'needyandhorny+register@outlook.com';
$registerName = isset($_GET['registerName']) ? $_GET['registerName'] : 'Register Love';
$subject = "Mate - Hooray! You are registered!";
$body = file_get_contents('../reference/html/mail_register.html');
$redirectUrl = "";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication 
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = "base64";
    $mail->Username = 'notmeta.service@gmail.com';          // SMTP username
    $mail->Password = 'ahuvwxxdhusgoyaw';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->setFrom('notmeta.service@gmail.com', 'Mate');       // TCP port to connect to
    //Recipients
    $mail->addAddress($registerEmail, $registerName);    // Add a recipient // Name is optional   // Name is optional
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
