<?php

$email = $_POST['email'];
$message = $_POST['message'];

$php_error = '';
if(trim($email) == '')
 
$error = 'Введите email';
elseif(trim($message) == '')
$error = 'Введи сообщение';

elseif(strlen($message) < 10)
$error = 'Cообщене должно быть более 10 символов' ;

if($error != '') {
 echo $error;
 exit;

}
$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type:
text\html;charset=utf-8\r\n";

mail('englisheniks@gmail.com', $subject, $message, $headers);

header('Location: /about.php')

?>