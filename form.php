<?php 
include ('variables.php');
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['submit'])) { 
// data from the HTML form that is put in to variables
$name = $_POST["fullname"];
$clientEmail = $_POST["email"];
$clientMessage = $_POST["message"];
// define the form of the email the user will recieve
$email_from = $clientEmail;
$email_subject = "new email from $clientEmail";
$email_body = "Hello, you have recieved a message from $name. Below you can find the message: <br>-----<br> $clientMessage";
// check if form contains data from the user
if (empty($name)){
  echo "*fill in your name*";
  exit;
} else if(empty($clientEmail)){
  echo "*fill in your email*";
  exit;
} else if(empty($clientMessage)){
  echo "*fill in your message*";
  exit;
} else{
  $mail;
}
// sanitize the email so that the value is correct
$sanitized_email = filter_var($clientEmail, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
    $mail;
} else{
  echo "*this is not a valid email adress*";
  exit;
}
// end email sanitizer. 
// end formchecker from the user. 
// Load Composer's autoloader
require 'vendor/autoload.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'derycke.kris@gmail.com';                     // SMTP username
    $mail->Password   = $password;                              // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom($clientEmail, $name);
    $mail->addAddress('derycke.kris@gmail.com', 'Kris de Rycke');     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $email_subject;
    $mail->Body    = $email_body;
    $mail->AltBody = $email_body;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Computer says no:<br> Message not sent. <br>Mailer Error: {$mail->ErrorInfo}";
}  
} 
