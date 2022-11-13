<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "path/to/PHPMailer/src/Exception.php";
require "path/to/PHPMailer/src/PHPMailer.php";

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";
// $mail->setLanguage("ru", "phpmailer/language/");
$mail->IsHTML(true);

$mail->setFrom("drevil3372@gmail.com", "Nails");
$mail->addAddress("drevil3372@gmail.com", "yevgen.sydoruk@gmail.com");
$mail->Subject = "Nailllls!";

//mail body
$body = "<h1>New mail</h1>";

if (trim(!empty($_POST["name"]))) {
    $body .= "<p><strong>Name:</strong> " . $_POST["name"] . "</p>";
}
if (trim(!empty($_POST["email"]))) {
    $body .= "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
}
if (trim(!empty($_POST["phone"]))) {
    $body .= "<p><strong>Phone:</strong> " . $_POST["phone"] . "</p>";
}
if (trim(!empty($_POST["date"]))) {
    $body .= "<p><strong>Date:</strong> " . $_POST["date"] . "</p>";
}
if (trim(!empty($_POST["message"]))) {
    $body .= "<p><strong>Message:</strong> " . $_POST["message"] . "</p>";
}

$mail->Body = $body;

//sending
if (!$mail->send()) {
    $message = "Error";
} else {
    $message = "Mail sent";
}

$response = ["message" => $message];

header("Content-type: application/json");
echo json_encode($response);

?>
