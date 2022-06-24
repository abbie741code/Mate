
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function xxx
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load composer's autoloader
require '../../vendor/autoload.php';

$subject = "Mate - Hooray! You are registered! ";
// $body = "<div>
// <p>您好！</p>
// <p>您已完成 Mate 工程師交友平台的會員註冊，在這裡，共有 2537 位工程師，期待能和你有一場浪漫的約會。
//     現在就登入與他們相遇，一起約會享用美食，探索更多美好的關係！</p>
// <p>Mate團隊</p>
// </div>";  

$body = file_get_contents('./reference/html/mail_register.html');


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // $mail->charSet = 'UTF-8';
    // $mail->Encoding = 'base64';
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'littlehouse6302@gmail.com';                 // SMTP username
    $mail->Password = 'mmmh6302@';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('littlehouse6302@gmail.com', 'Mate');
    $mail->addAddress('kate.bqool@gmail.com', '松山鄧麗君');    // Add a recipient // Name is optional

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        header("Location:../memberIndex.php");
    }
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
