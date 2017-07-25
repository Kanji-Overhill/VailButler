<?php

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $email_send = $_POST['email'];
    $message = $_POST['message'];

require("phpmailer/PHPMailerAutoload.php");



$mail = new PHPMailer;

$mail->addAddress($email_send, 'Contact Client');
//Set who the message is to be sent from
$mail->setFrom('fhernandez@techdev.mx', 'Contact Vail Butler');
//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'Contact Vail Butler');
//Set who the message is to be sent to
$mail->addAddress('ingluisfelipe07@gmail.com', 'Contact Vail Butler');
//Set the subject line
$mail->Subject = 'Request from Web Contact';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("The User ".$name." with the mail: ".$email_send." has made the following order from the web contact
	\n Subject:".$subject."\n Phone:".$phone."\n Message: ".$Message);
//send the message, check for errors
if (!$mail->send()) {
    header('Location: index.html');
} else {
    echo "Message sent!";
}


?>